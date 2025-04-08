<?php

declare(strict_types=1);

namespace Automica\LaravelEtsyApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use automica\LaravelEtsyApi\Commands\LaravelEtsyApiCommand;

class LaravelEtsyApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-etsy-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_etsy_api_table')
            ->hasCommand(LaravelEtsyApiCommand::class);
    }
}
