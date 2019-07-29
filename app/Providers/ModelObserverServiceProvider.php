<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\GoodsCategory;
use App\Observers\GoodsCategoryObserver;

class ModelObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //触发
        GoodsCategory::observe(GoodsCategoryObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
