<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\ProductionLHPController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.manufacturingOverview');
// });

Route::get('/manufacturing', [ManufactureController::class, 'index']);
Route::get('/', [ManufactureController::class, 'index']);
Route::get('/production', [ProductionController::class, 'index']);
Route::get('/production/melting', [ProductionController::class, 'melting']);



// ============================= // LHP // ================================= //
Route::get('/lhp', function () {
    return view('pages_lhp.lhpMelting', [
        "title" => 'LHP Melting'
    ]);
});
Route::get('/melting', [ProductionLHPController::class, 'prep_melting']);
Route::post('/melting/simpan', [ProductionLHPController::class, 'prep_melting_simpan']);
Route::get('/melting/{mesin}/{id}', [ProductionLHPController::class, 'lhp_jam']);
Route::post('/melting/{mesin}/{id}/simpan', [ProductionLHPController::class, 'lhp_jam_simpan']);
