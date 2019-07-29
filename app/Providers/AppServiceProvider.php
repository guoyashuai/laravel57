<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //
        DB::listen(function ($query){
            //查看SQL语句
//            echo $query->sql;
            //查看错误码

//            var_dump($query->bindings);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(
            \App\Contracts\DBService::class,
            \App\Service\OracleService::class
        );
    }
}
