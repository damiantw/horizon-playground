<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Laravel\Horizon\Horizon;

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

            return true;

            //return collect($ipWhitelist)
        });

        Horizon::routeSmsNotificationsTo('15185068208');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
