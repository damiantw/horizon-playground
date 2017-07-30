<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        \Laravel\Horizon\Horizon::auth(function (Request $request) {

            $ipWhitelist = [
                '127.0.0.1',
                '10.0.2.2',
            ];

            //return collect($ipWhitelist)
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
