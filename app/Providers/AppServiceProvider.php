<?php

namespace App\Providers;
use Illuminate\Support\Facades\URL;

use Illuminate\Routing\UrlGenerator;
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
        //
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
