<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\Api\MesinCastingController;
use App\Http\Controllers\Api\LhpMeltingApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['prefix' => 'v1'], function () {
//     Route::apiResource('melt', MeltingTestController::class);
// });

Route::group(['prefix' => 'MesinCasting'], function () {
    Route::apiResource('molten', MesinCastingController::class);
});

Route::get('/lhpChargingStriko1', [LhpMeltingApiController::class, 'striko1']);
Route::get('/lhpChargingStriko2', [LhpMeltingApiController::class, 'striko2']);
Route::get('/lhpChargingStriko3', [LhpMeltingApiController::class, 'striko3']);
Route::get('/lhpChargingSwiftAsia', [LhpMeltingApiController::class, 'swiftAsia']);
