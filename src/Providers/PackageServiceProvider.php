<?php

namespace {{namespace}}\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->loadFactoriesFrom(__DIR__.'/../../database/factories');
        }
    }
}
