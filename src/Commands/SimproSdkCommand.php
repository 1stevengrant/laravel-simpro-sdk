<?php

namespace StevenGrant\SimproSdk\Commands;

use Illuminate\Console\Command;

class SimproSdkCommand extends Command
{
    public $signature = 'laravel-simpro-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
