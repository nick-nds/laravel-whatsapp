<?php

namespace Bistrokeep\Whatsapp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bistrokeep\Whatsapp\Commands\WhatsappCommand;

class WhatsappServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-whatsapp')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_whatsapp_table')
            ->hasCommand(WhatsappCommand::class);
    }
}
