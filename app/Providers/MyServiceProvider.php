<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //example $data toke data from database
        $data =array();
        $data['a']=10;
        $data['b']=20;
        $data['c']=30;
        view()->share('number',$data);
    }
}
