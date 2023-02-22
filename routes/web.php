<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HcgaController;
use App\Http\Controllers\UsableController;
use App\Http\Controllers\CastingController;
use App\Http\Controllers\MeltingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\MeltingTestController;

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
Route::get('/', [ProductionController::class, 'index']);
Route::get('/production', [ProductionController::class, 'index']);
Route::get('/lhp', function () {
    return view('pages_lhp.lhpMelting', [
        "title" => 'LHP Melting'
    ]);
});
//====================== PARTIAL ======================//
Route::get('/partial/instruksi', [UsableController::class, 'Intruksi']);
Route::get('/partial/resume-melting/{mesin}/{id}', [UsableController::class, 'resume_melting']);
Route::get('/partial/resume-forklift/{mesin}/{id}', [UsableController::class, 'resume_supply']);

//====================== API FOR SHARE ======================//
Route::get('/dtkyrw/all', [ApiController::class, 'dtkyrwall']);
Route::get('/dtkyrw/{nrp}', [ApiController::class, 'dtkyrw']);
Route::get('/dthourlymltng/{id}', [ApiController::class, 'hourly_lhpmelting']);
Route::get('/dthourlymltngraw/{id}', [ApiController::class, 'hourly_edit']);
Route::get('/dthourlymltngraw/{id}', [ApiController::class, 'hourly_edit']);
Route::get('/dtmccasting/{id}', [ApiController::class, 'showmc']);

//====================== SETTINGS ======================//
Route::get('/settings', [SettingController::class, 'index']);
Route::get('/settings/mesincasting/{id}', [SettingController::class, 'showMolten']); // Mes in Casting
Route::put('/settings/mesincasting/{id}/simpan', [SettingController::class, 'UpdateMolten'])->name('mesincasting.update');; // 



//====================== AREA MELTING ======================//
Route::get('/production/melting', [MeltingController::class, 'Dashboard']);
Route::get('/production/melting/{mesin}', [MeltingController::class, 'Details_dashboard']);
Route::post('/production/melting/{mesin}', [MeltingController::class, 'Details_dashboard']);
Route::get('/production/melting/{mesin}/{mulai}/{selesai}', [MeltingController::class, 'export_LHPMelting']);
Route::post('/production/melting/{mesin}/edit', [MeltingController::class, 'lhp_melting_raw_edit']);
Route::get('/lhp-melting', [MeltingController::class, 'prep_melting']);
Route::post('/lhp-melting/simpan', [MeltingController::class, 'prep_melting_simpan']);
Route::get('/lhp-melting/{mesin}/{id}', [MeltingController::class, 'lhp_melting_raw']);
Route::post('/lhp-melting/{mesin}/{id}/simpan', [MeltingController::class, 'lhp_melting_raw_simpan']);
Route::get('/tv/melting/{mesin}', [MeltingController::class, 'Dashboard_tv']);
Route::get('/tv', [MeltingController::class, 'testing']);

//====================== FORKLIFT AREA MELTING ======================//
Route::get('/lhpforklift', [MeltingController::class, 'prep_forklift']);
Route::post('/lhpforklift/simpan', [MeltingController::class, 'prep_forklift_simpan']);
Route::get('/forklift/{mesin}/{id}', [MeltingController::class, 'lhp_forklift']);
Route::post('/forklift/{mesin}/{id}/simpan', [MeltingController::class, 'lhp_forklift_raw_simpan']);

//====================== AREA CASTING ======================//
Route::get('/production/casting', [CastingController::class, 'Dashboard']);
Route::get('/tvCasting', [CastingController::class, 'tvCasting']);

//====================== HC & GA ======================//
Route::get('/hrd/karyawan', [HcgaController::class, 'karyawan']);
Route::post('/hrd/karyawan/update', [HcgaController::class, 'update_karyawan']);


//====================== Only Testing ======================//
Route::get('/test', [MeltingTestController::class, 'index']);
Route::get('/table', [MeltingTestController::class, 'table']);
Route::get('/final', [MeltingTestController::class, 'final_inspection']);
