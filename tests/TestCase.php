<?php

namespace Blastedcode\NovaAstrotomicTranslatable\Tests;

use Blastedcode\NovaAstrotomicTranslatable\NovaAstrotomicTranslatableServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Blastedcode\\NovaAstrotomicTranslatable\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            NovaAstrotomicTranslatableServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_nova-astrotomic-translatable_table.php';
        $migration->up();
        */
    }
}
