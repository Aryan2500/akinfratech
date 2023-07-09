<?php

use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
    Route::post('/login', [AuthenticateController::class, 'doLogin'])->name('login');
});


Route::fallback(function () {
    return redirect()->route('login');
});
