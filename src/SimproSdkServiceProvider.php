<?php

namespace StevenGrant\SimproSdk;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use StevenGrant\SimproSdk\Commands\SimproSdkCommand;

class SimproSdkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-simpro-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_simpro_sdk_table')
            ->hasCommand(SimproSdkCommand::class);
    }
}
