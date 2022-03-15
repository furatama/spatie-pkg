<?php

namespace Furatama\SpatiePkg;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Furatama\SpatiePkg\Commands\SpatiePkgCommand;

class SpatiePkgServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('spatie-pkg')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_spatie-pkg_table')
            ->hasCommand(SpatiePkgCommand::class);
    }
}
