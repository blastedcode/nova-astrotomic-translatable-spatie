<?php

namespace Blastedcode\NovaAstrotomicTranslatable;

use Blastedcode\NovaAstrotomicTranslatable\Commands\NovaAstrotomicTranslatableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NovaAstrotomicTranslatableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('nova-astrotomic-translatable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_nova-astrotomic-translatable_table')
            ->hasCommand(NovaAstrotomicTranslatableCommand::class);
    }
}
