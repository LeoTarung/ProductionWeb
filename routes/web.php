<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ProductionController;
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


Route::get('/lhp', function () {
    return view('pages_lhp.lhpMelting', [
        "title" => 'LHP Melting'
    ]);
});

//====================== LHP MELTING ======================//
Route::get('/melting', [ProductionController::class, 'prep_melting']);
Route::post('/melting/simpan', [ProductionController::class, 'prep_melting_simpan']);
Route::get('/melting/{mesin}/{id}', [ProductionController::class, 'lhp_jam']);
Route::post('/melting/{mesin}/{id}/simpan', [ProductionController::class, 'lhp_jam_simpan']);
//====================== LHP FORKLIFT MELTING ======================//
// Route::get('/melting/forklift', [ProductionController::class, 'prep_forklift']);
Route::get('/melting/forklift/', [ProductionController::class, 'lhp_forklift']);
