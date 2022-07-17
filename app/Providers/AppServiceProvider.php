<?php

namespace App\Providers;

use App\Models\City;
use App\Models\Slider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('sliders', Slider::all());
        view()->share('cities', City::all());
        Paginator::useBootstrap();
    }
}
