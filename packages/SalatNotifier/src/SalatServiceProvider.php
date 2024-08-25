<?php

namespace Solayman\SalatNotifier;

use Illuminate\Support\ServiceProvider;
use Solayman\SalatNotifier\Console\NotifySalatCommand;

class SalatServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Register command
        if ($this->app->runningInConsole()) {
            $this->commands([
                NotifySalatCommand::class,
            ]);
        }
    }

    public function register()
    {
        
    }
}
