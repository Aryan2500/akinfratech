<?php

use App\Http\Controllers\DashboardController;
use App\Http\Middleware\SiteHeadMiddleware;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth'],], function () {
    Route::get('dashboard',  [DashboardController::class, 'siteHeadDashboard'])->middleware(SiteHeadMiddleware::class)->prefix('site-head')->name('sh.dashboard');

    include __DIR__ . '/user.php';
    include __DIR__ . '/property.php';
    include __DIR__ . '/booking.php';
});
