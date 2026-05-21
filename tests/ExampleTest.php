<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use StevenGrant\SimproSdk\Requests\Jobs\ListJobs;
use StevenGrant\SimproSdk\Resource\Jobs;
use StevenGrant\SimproSdk\SimproSdk;

it('builds the correct endpoint for list jobs', function () {
    $request = new ListJobs(companyId: 0);

    expect($request->resolveEndpoint())->toBe('/api/v1.0/companies/0/jobs');
});

it('sends authenticated requests via the connector', function () {
    $mockClient = new MockClient([
        ListJobs::class => MockResponse::make(['data' => []], 200),
    ]);

    $sdk = new SimproSdk(
        baseUrl: 'https://example.simprosuite.com',
        accessToken: 'test-token',
    );
    $sdk->withMockClient($mockClient);

    $response = $sdk->send(new ListJobs(companyId: 0));

    expect($response->status())->toBe(200);
    $mockClient->assertSent(ListJobs::class);
});

it('exposes resource accessors on the connector', function () {
    $sdk = new SimproSdk(baseUrl: 'https://example.simprosuite.com');

    expect($sdk->jobs())->toBeInstanceOf(Jobs::class);
});
