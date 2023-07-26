

<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\PlottypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Models\Site;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard',  [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');


    Route::group(['prefix' => 'user-management'], function () {

        Route::group(['prefix' => 'user'], function () {
            Route::get('/', [UserController::class, 'index'])->name('user.list');
            Route::get('/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/save', [UserController::class, 'store'])->name('user.store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::post('/update', [UserController::class, 'update'])->name('user.update');
            Route::get('/lock', [UserController::class, 'lock'])->name('user.lock');
        });

        Route::group(['prefix' => 'role'], function () {
            Route::get('/', [RoleController::class, 'index'])->name('role.list');
            Route::get('/create', [RoleController::class, 'create'])->name('role.create');
            Route::post('/store', [RoleController::class, 'store'])->name('role.store');
            Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
            Route::post('/update', [RoleController::class, 'update'])->name('role.update');
            Route::post('/lock', [RoleController::class, 'lock'])->name('role.lock');
        });
    });
    Route::group(['prefix' => 'property-management'], function () {

        Route::group(['prefix' => 'site'], function () {
            Route::get('/', [SiteController::class, 'index'])->name('site.list');
            Route::get('/create', [SiteController::class, 'create'])->name('site.create');
            Route::post('/save', [SiteController::class, 'store'])->name('site.store');
            Route::get('/edit', [SiteController::class, 'edit'])->name('site.edit');
            Route::post('/update', [SiteController::class, 'update'])->name('site.update');
            // Route::get('/lock', [SiteController::class, 'lock'])->name('site.lock');
        });

        Route::group(['prefix' => 'farmer'], function () {
            Route::get('/', [FarmerController::class, 'index'])->name('farmer.list');
            Route::get('/create', [FarmerController::class, 'create'])->name('farmer.create');
            Route::post('/save', [FarmerController::class, 'store'])->name('farmer.store');
            Route::get('/edit/{id}', [FarmerController::class, 'edit'])->name('farmer.edit');
            Route::post('/update', [FarmerController::class, 'update'])->name('farmer.update');
            Route::get('/lock', [FarmerController::class, 'lock'])->name('farmer.lock');
        });
        Route::group(['prefix' => 'land'], function () {
            Route::get('/', [LandController::class, 'index'])->name('land.list');
            Route::get('/create', [LandController::class, 'create'])->name('land.create');
            Route::post('/save', [LandController::class, 'store'])->name('land.store');
            Route::get('/edit/{id}', [LandController::class, 'edit'])->name('land.edit');
            Route::post('/update', [LandController::class, 'update'])->name('land.update');
            Route::get('/lock', [LandController::class, 'lock'])->name('land.lock');
        });

        Route::group(['prefix' => 'ptype'], function () {
            Route::get('/', [PlottypeController::class, 'index'])->name('plottype.list');
            Route::get('/create', [PlottypeController::class, 'create'])->name('plottype.create');
            Route::post('/save', [PlottypeController::class, 'store'])->name('plottype.store');
            Route::get('/edit/{id}', [PlottypeController::class, 'edit'])->name('plottype.edit');
            Route::post('/update', [PlottypeController::class, 'update'])->name('plottype.update');
            // Route::get('/lock', [SiteController::class, 'lock'])->name('site.lock');
        });

        Route::group(['prefix' => 'plot'], function () {
            Route::get('/', [PlotController::class, 'index'])->name('plot.list');
            Route::get('/create', [PlotController::class, 'create'])->name('plot.create');
            Route::post('/store', [PlotController::class, 'store'])->name('plot.store');
            Route::get('/edit/{id}', [PlotController::class, 'edit'])->name('plot.edit');
            Route::post('/update', [PlotController::class, 'update'])->name('plot.update');
            // Route::post('/lock', [PlotController::class, 'lock'])->name('plot.lock');
        });
    });
});
