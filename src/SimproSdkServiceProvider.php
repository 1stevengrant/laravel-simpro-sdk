<?php

namespace StevenGrant\SimproSdk;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimproSdkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-simpro-sdk')
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(SimproSdk::class, function () {
            return new SimproSdk(
                baseUrl: (string) config('simpro-sdk.base_url'),
                accessToken: config('simpro-sdk.access_token'),
                apiKey: config('simpro-sdk.api_key'),
            );
        });
    }
}
