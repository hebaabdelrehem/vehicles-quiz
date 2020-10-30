<?php

namespace App\Repositories\Vehicle;


use Illuminate\Support\ServiceProvider;


class VehicleRepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Vehicle\VehicleInterface', 'App\Repositories\Vehicle\VehicleRepository');
    }
}
