<?php

use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login', [AuthenticateController::class, 'doLogin'])->name('login');
