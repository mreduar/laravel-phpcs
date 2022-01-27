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
                __DIR__.'/../resources/stubs/phpcs.xml.stub' => base_path('phpcs.xml'),
            ], 'ruleset');

            $this->publishes([
                __DIR__.'/../resources/stubs/pre-commit-hook.stub' => base_path('.git/hooks/pre-commit'),
            ], 'hook');
        }
    }
}
