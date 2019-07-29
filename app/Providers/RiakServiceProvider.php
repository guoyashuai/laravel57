<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //用于启动服务
        DB::listen(function ($query){
            //echo 'sql'.$query->sql;
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //用于注册服务
    }
}
