<?php

use App\Helpers\LocationHelper;
use App\Http\Controllers\DashboardApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('states', function (Request $r) {
    return response()->json(['states' =>   LocationHelper::getStates($r->cId)]);
})->name('getStates');

Route::get('cities', function (Request $r) {
    return response()->json(['cities' =>   LocationHelper::getCities($r->sId)]);
})->name('getCities');


Route::get('dashboard-info', [DashboardApiController::class, 'dashboardInfo'])->name('dashboardInfo');
