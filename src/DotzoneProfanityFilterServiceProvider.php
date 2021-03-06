<?php

namespace AhmadChebbo\DotzoneProfanityFilter;

use AhmadChebbo\DotzoneProfanityFilter\Commands\DotzoneProfanityFilterCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DotzoneProfanityFilterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dotzone-profanity-filter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dotzone-profanity-filter_table')
            ->hasCommand(DotzoneProfanityFilterCommand::class);
    }
}
