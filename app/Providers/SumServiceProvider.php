<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SumServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //for binding facades
        app()->bind('sum',function(){
            return new \App\Repositories\sum;
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
