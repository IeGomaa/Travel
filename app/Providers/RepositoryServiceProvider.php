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
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminProductInterface',
            'App\Http\Repositories\Admin\AdminProductRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminCustomerInterface',
            'App\Http\Repositories\Admin\AdminCustomerRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminFaqInterface',
            'App\Http\Repositories\Admin\AdminFaqRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminContactInterface',
            'App\Http\Repositories\Admin\AdminContactRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminAuthInterface',
            'App\Http\Repositories\Admin\AdminAuthRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminEmployeeInterface',
            'App\Http\Repositories\Admin\AdminEmployeeRepository'
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
