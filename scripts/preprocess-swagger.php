<?php

declare(strict_types=1);

/**
 * Preprocess Simpro's swagger.json:
 *  - Replace hash-style operationIds with method+resource derived names
 *    (e.g. "listJobs", "getJob", "createJob", "updateJob", "deleteJob")
 *  - Avoid collisions by appending segment-derived suffixes
 *
 * Usage: php scripts/preprocess-swagger.php simpro-swagger.json simpro-swagger.clean.json
 */
[$_, $in, $out] = $argv + [null, 'simpro-swagger.json', 'simpro-swagger.clean.json'];

$spec = json_decode(file_get_contents($in), true, flags: JSON_THROW_ON_ERROR);

$verbToPrefix = [
    'get' => 'get',
    'post' => 'create',
    'put' => 'replace',
    'patch' => 'update',
    'delete' => 'delete',
    'head' => 'head',
    'options' => 'options',
];

$seen = [];
$assigned = 0;

foreach ($spec['paths'] as $path => &$ops) {
    $segments = array_values(array_filter(explode('/', $path), fn ($s) => $s !== ''));
    $segments = array_values(array_filter($segments, fn ($s) => ! in_array($s, ['api', 'v1.0', 'companies'], true)));

    $literals = array_values(array_filter($segments, fn ($s) => ! str_starts_with($s, '{')));
    $endsWithParam = $segments && str_starts_with(end($segments), '{');

    $resource = '';
    foreach ($literals as $seg) {
        $resource .= ucfirst(preg_replace('/[^a-zA-Z0-9]/', '', $seg));
    }

    foreach ($ops as $method => &$op) {
        if (! is_array($op) || ! isset($verbToPrefix[strtolower($method)])) {
            continue;
        }

        $verb = strtolower($method);
        $prefix = $verbToPrefix[$verb];

        // List vs single for GET
        if ($verb === 'get') {
            $prefix = $endsWithParam ? 'get' : 'list';
        }

        // Singularize the last literal segment for single-item operations
        $resourceForName = $resource;
        if ($endsWithParam && $literals) {
            $singular = singularize(end($literals));
            $resourceForName = '';
            foreach (array_slice($literals, 0, -1) as $seg) {
                $resourceForName .= ucfirst(preg_replace('/[^a-zA-Z0-9]/', '', $seg));
            }
            $resourceForName .= ucfirst(preg_replace('/[^a-zA-Z0-9]/', '', $singular));
        }

        $name = $prefix.$resourceForName;

        // Resolve collisions
        $base = $name;
        $i = 2;
        while (isset($seen[$name])) {
            $name = $base.$i++;
        }
        $seen[$name] = true;

        $op['operationId'] = $name;
        $assigned++;
    }
    unset($op);
}
unset($ops);

file_put_contents($out, json_encode($spec, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

echo "Assigned {$assigned} operationIds. Wrote {$out}\n";

function singularize(string $word): string
{
    $w = $word;
    $rules = [
        '/ies$/i' => 'y',
        '/ses$/i' => 's',
        '/xes$/i' => 'x',
        '/oes$/i' => 'o',
        '/s$/i' => '',
    ];
    foreach ($rules as $pattern => $replacement) {
        if (preg_match($pattern, $w)) {
            return preg_replace($pattern, $replacement, $w);
        }
    }

    return $w;
}
