

<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard',  [DashboardController::class, 'index'])->name('dashboard');


    Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');
});
