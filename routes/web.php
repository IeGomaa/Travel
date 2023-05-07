<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminCountryController;
use App\Http\Controllers\Admin\AdminCustomerController;
use App\Http\Controllers\Admin\AdminEmployeeController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminTourController;
use App\Http\Controllers\Admin\AdminTravelTypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EndUser\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AdminAuthController::class)->group(function () {
    Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => 'check-auth'], function () {
        Route::get('/', 'login_page')->name('index');
        Route::post('/login', 'login')->name('login');
    });
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::controller(AdminAuthController::class)->group(function () {
        Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
            Route::get('/logout', 'logout')->name('logout');
        });
    });

    Route::controller(AdminHomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(UserController::class)->group(function () {
        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

    Route::controller(AdminCountryController::class)->group(function () {
        Route::group(['prefix' => 'country', 'as' => 'country.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

    Route::controller(AdminSliderController::class)->group(function () {
        Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

    Route::controller(AdminProductController::class)->group(function () {
        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

    Route::controller(AdminCustomerController::class)->group(function () {
        Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
            Route::get('/', 'index')->name('index');
            Route::delete('/delete', 'delete')->name('delete');
        });
    });

    Route::controller(AdminFaqController::class)->group(function () {
        Route::group(['prefix' => 'faq', 'as' => 'faq.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

    Route::controller(AdminContactController::class)->group(function () {
        Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
            Route::get('/', 'index')->name('index');
            Route::delete('/delete', 'delete')->name('delete');
        });
    });

    Route::controller(AdminEmployeeController::class)->group(function () {
        Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

    Route::controller(AdminTravelTypeController::class)->group(function () {
        Route::group(['prefix' => 'travel', 'as' => 'travel.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

    Route::controller(AdminTourController::class)->group(function () {
        Route::group(['prefix' => 'tour', 'as' => 'tour.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

    Route::controller(AdminTestimonialController::class)->group(function () {
        Route::group(['prefix' => 'testimonial', 'as' => 'testimonial.'], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
    });

});

Route::group(['as' => 'endUser.'], function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
});


