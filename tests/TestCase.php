<?php

namespace StevenGrant\SimproSdk\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use StevenGrant\SimproSdk\SimproSdkServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            SimproSdkServiceProvider::class,
        ];
    }
}
