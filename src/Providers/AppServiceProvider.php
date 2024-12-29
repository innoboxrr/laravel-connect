<?php

namespace Innoboxrr\LaravelConnect\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        
        // $this->mergeConfigFrom(__DIR__ . '/../../config/laravel-connect.php', 'laravel-connect');

    }

    public function boot()
    {
        
        // $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laravel-connect');

        if ($this->app->runningInConsole()) {
            
            // $this->publishes([__DIR__.'/../../resources/views' => resource_path('views/vendor/laravel-connect'),], 'views');

            // $this->publishes([__DIR__.'/../../config/laravel-connect.php' => config_path('laravel-connect.php')], 'config');

        }

    }
    
}