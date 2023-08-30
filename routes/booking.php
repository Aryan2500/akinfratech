
<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PlotregistryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'booking-management'], function () {
    Route::group(['prefix' => 'plot-registry'], function () {
        Route::get('/', [PlotregistryController::class, 'index'])->name('plot-registry.list');
        Route::get('/create', [PlotregistryController::class, 'create'])->name('plot-registry.create');
        Route::post('/save', [PlotregistryController::class, 'store'])->name('plot-registry.store');
        Route::get('/edit/{id}', [PlotregistryController::class, 'edit'])->name('plot-registry.edit');
        Route::post('/update', [PlotregistryController::class, 'update'])->name('plot-registry.update');
    });
    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customer.list');
        Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
        Route::post('/save', [CustomerController::class, 'store'])->name('customer.store');
        Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::post('/update', [CustomerController::class, 'update'])->name('customer.update');
    });
});
