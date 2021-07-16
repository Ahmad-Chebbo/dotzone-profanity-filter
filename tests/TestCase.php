<?php

namespace AhmadChebbo\DotzoneProfanityFilter\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use AhmadChebbo\DotzoneProfanityFilter\DotzoneProfanityFilterServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'AhmadChebbo\\DotzoneProfanityFilter\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DotzoneProfanityFilterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_dotzone-profanity-filter_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
