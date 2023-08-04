

<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\PlotregistryController;
use App\Http\Controllers\PlottypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Plotregistry;
use App\Models\Site;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', AdminMiddleware::class]], function () {
    Route::get('dashboard',  [DashboardController::class, 'index'])->name('dashboard');
    
    include __DIR__ . '/user.php';
    include __DIR__ . '/property.php';
    include __DIR__ . '/booking.php';
});
