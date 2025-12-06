<?php

namespace {{namespace}}\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use {{namespace}}\Providers\PackageServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [PackageServiceProvider::class];
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->artisan('migrate', ['--database' => 'testing']);
    }
}
