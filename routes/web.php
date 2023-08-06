<?php

use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
    Route::post('/login', [AuthenticateController::class, 'doLogin'])->name('login');

    Route::get('/get-otp', [AuthenticateController::class, 'getOtp'])->name('getOtp');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'users'], function () {
    include __DIR__ . '/user.php';
});

Route::fallback(function () {
    return redirect()->route('login');
});
