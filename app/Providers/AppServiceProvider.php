<?php

namespace App\Providers;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    

    public function boot()
    {
        if(env('APP_ENV') !== 'local')
        {
            $url->forceSchema('http');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    // Force SSL in production
    // if ($this->app->environment() == 'production') {
    //     URL::forceScheme('https');
    // }
}
