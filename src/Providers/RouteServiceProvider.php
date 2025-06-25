<?php

namespace Innoboxrr\LaravelConnect\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    public function map()
    {
        $this->mapApiRoutes();   
        $this->mapPlatformRoutes();   
    }

    protected function mapApiRoutes()
    {

        foreach (glob(__DIR__ . '/../../routes/api/models/*.php') as $file) {

            $name = basename($file, '.php');

            Route::middleware('api')
                ->prefix('api/innoboxrr/laravelconnect/' . $name)
                ->as('api.innoboxrr.laravelconnect.' . $name . '.')
                ->namespace('Innoboxrr\LaravelConnect\Http\Controllers')
                ->group($file);

        }

    }

    protected function mapPlatformRoutes()
    {
        foreach (glob(__DIR__ . '/../Services/Platform/*/routes.php') as $file) {
            $name = basename(dirname($file));
            Route::prefix('platform-connect/' . $name)
                ->as('platform-connect.' . $name . '.')
                ->namespace('Innoboxrr\LaravelConnect\Http\Controllers')
                ->group($file);

        }
    }

}
