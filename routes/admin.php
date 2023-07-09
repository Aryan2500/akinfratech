

<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard',  [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');


    Route::group(['prefix' => 'user-management'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.list');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/save', [UserController::class, 'store'])->name('user.store');
        Route::get('/edit', [UserController::class, 'update'])->name('user.update');
        Route::get('/locked', [UserController::class, 'lock'])->name('user.locked');
    });
});
