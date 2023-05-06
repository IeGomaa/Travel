<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminHomeInterface',
            'App\Http\Repositories\Admin\AdminHomeRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\UserInterface',
            'App\Http\Repositories\Admin\UserRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminCountryInterface',
            'App\Http\Repositories\Admin\AdminCountryRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminSliderInterface',
            'App\Http\Repositories\Admin\AdminSliderRepository'
        );
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
