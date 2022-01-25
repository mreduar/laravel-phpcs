<?php

namespace Mreduar\LaravelPhpcs;

use Illuminate\Support\ServiceProvider;

class LaravelPhpcsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../phpcs.xml.stub' => base_path('phpcs.xml'),
            ], 'ruleset');
        }
    }
}
