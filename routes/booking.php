
<?php

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
});
