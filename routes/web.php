<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HcgaController;
use App\Http\Controllers\UsableController;
use App\Http\Controllers\CastingController;
use App\Http\Controllers\MeltingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HenkatenController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\MeltingTestController;
use App\Http\Controllers\FinalInspectionController;

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

Route::get('/modal-sementara', function () {
    return view('lhp.modal-casting-sementara');
});

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
Route::get('/partial/modal-casting/{id}/{reject}', [UsableController::class, 'gambarPart'])->name('showPicture');
Route::post('/partial/modal-casting/{id}/{reject}/{posisi}', [UsableController::class, 'saveReject'])->name('saveReject');
// Route::get('/partial/modal-casting-dt/{id}', [UsableController::class, 'DowntimeCasting'])->name('DowntimeCasting');


//====================== API FOR SHARE ======================//
Route::get('/dtkyrw/all', [ApiController::class, 'dtkyrwall']);
Route::get('/dtkyrw/{nrp}', [ApiController::class, 'dtkyrw']);
Route::get('/dthourlymltng/{id}', [ApiController::class, 'hourly_lhpmelting']);
Route::get('/dthourlymltngraw/{id}', [ApiController::class, 'hourly_edit']);
Route::get('/dthourlymltngraw/{id}', [ApiController::class, 'hourly_edit']);
Route::get('/dtmccasting/{mc}', [ApiController::class, 'showmc']);



//====================== SETTINGS ======================//
Route::get('/settings', [SettingController::class, 'index'])->name('MainSettings');
Route::get('/settings/mesincasting/{id}', [SettingController::class, 'showMolten'])->name('MCSettings'); // Mes in Casting
Route::put('/settings/mesincasting/{id}/simpan', [SettingController::class, 'UpdateMolten'])->name('mesincasting.update');; // 


//====================== AREA MELTING ======================//
Route::get('/production/melting', [MeltingController::class, 'Dashboard']);
Route::get('/production/melting/level-molten', [MeltingController::class, 'levelMolten']);
Route::get('/production/melting/{mesin}', [MeltingController::class, 'Details_dashboard']);
Route::post('/production/melting/{mesin}', [MeltingController::class, 'Details_dashboard']);
Route::get('/production/melting/{mesin}/{mulai}/{selesai}', [MeltingController::class, 'export_LHPMelting']);
Route::post('/production/melting/{mesin}/edit', [MeltingController::class, 'lhp_melting_raw_edit']);
Route::get('/lhp-melting', [MeltingController::class, 'prep_melting'])->name('preparationMelting');
Route::post('/lhp-melting/simpan', [MeltingController::class, 'prep_melting_simpan']);
Route::get('/lhp-melting/{mesin}/{id}', [MeltingController::class, 'lhp_melting_raw'])->name('LHPMelting');
Route::post('/lhp-melting/{mesin}/{id}/simpan', [MeltingController::class, 'lhp_melting_raw_simpan']);
Route::get('/tv/melting', [MeltingController::class, 'Dashboard_tv']);
Route::get('/tv', [MeltingController::class, 'testing']);


//====================== FORKLIFT AREA MELTING ======================//
Route::get('/lhpforklift', [MeltingController::class, 'prep_forklift'])->name('preparationSupply');
Route::post('/lhpforklift/simpan', [MeltingController::class, 'prep_forklift_simpan']);
Route::get('/forklift/{mesin}/{id}', [MeltingController::class, 'lhp_forklift'])->name('LHPSupply');
Route::post('/forklift/{mesin}/{id}/simpan', [MeltingController::class, 'lhp_forklift_raw_simpan']);

//====================== AREA CASTING ======================//
Route::get('/production/casting', [CastingController::class, 'Dashboard']);
Route::get('/tvCasting/{id}', [CastingController::class, 'tvCasting']);
Route::get('/tvCasting2/{id1}/{id2}', [CastingController::class, 'tvCasting2']);
Route::get('/lhp-casting', [CastingController::class, 'prep_casting'])->name('preparationCasting');
Route::post('/lhp-casting/simpan', [CastingController::class, 'prep_casting_simpan']);
Route::get('/lhp-casting/{mc}/{id}', [CastingController::class, 'lhp_casting'])->name('LHPCasting'); //link sementara, nanti diganti ketika preparation sudah selesai
Route::post('/lhp-casting/{id}/{dtName}/{minute}', [CastingController::class, 'saveDowntimeCasting'])->name('saveDowntime');
Route::get('/dtRjtcasting/{id_lhp}', [CastingController::class, 'totalReject'])->name('totalReject');
Route::get('/dtDowntime/{id_lhp}', [CastingController::class, 'jsonDowntime'])->name('jsonDowntime');


//====================== LHP FINAL INSPECTION ================//
Route::get('/lhp-final-inspection', [FinalInspectionController::class, 'FinalInspection']);
Route::get('/prep-final-inspection', [FinalInspectionController::class, 'Prep_final_inspection']);
Route::post('/lhp-final-inspection/simpan', [FinalInspectionController::class, 'Prep_final_inspection_simpan']);


//====================== HC & GA ======================//
Route::get('/hrd/karyawan', [HcgaController::class, 'karyawan']);
Route::post('/hrd/karyawan/update', [HcgaController::class, 'update_karyawan']);


//====================== Only Testing ======================//
Route::get('/test', [MeltingTestController::class, 'index']);
Route::get('/table', [MeltingTestController::class, 'table']);
Route::get('/final', [MeltingTestController::class, 'final_inspection']);


//====================== henkaten ======================//

// man
Route::get('/tampilan', [HenkatenController::class, 'tampilan']);
Route::post('/submit_man', [HenkatenController::class, 'submit_man']);
Route::get('/man_edit/{No}', [HenkatenController::class, 'man_edit']);
Route::post('/man_update/{No}', [HenkatenController::class, 'man_update']);
Route::get('/delete/{No}', [HenkatenController::class, 'delete']);

// method
Route::get('/metode', [HenkatenController::class, 'metode']);
Route::post('/method_submit', [HenkatenController::class, 'method_submit']);
Route::get('/method_edit/{No}', [HenkatenController::class, 'method_edit']);
Route::post('/method_update/{No}', [HenkatenController::class, 'method_update']);
Route::get('/method_delete/{No}', [HenkatenController::class, 'method_delete']);

// machine
Route::get('/mesin', [HenkatenController::class, 'mesin']);
Route::post('/mesin_submit', [HenkatenController::class, 'mesin_submit']);
Route::get('/mesin_edit/{No}', [HenkatenController::class, 'mesin_edit']);
Route::post('/mesin_update/{No}', [HenkatenController::class, 'mesin_update']);
Route::get('/mesin_delete/{No}', [HenkatenController::class, 'mesin_delete']);

// material
Route::get('/material', [HenkatenController::class, 'material']);
Route::post('/submit', [HenkatenController::class, 'submit']);
Route::get('/edit/{No}', [HenkatenController::class, 'edit']);
Route::post('/update/{No}', [HenkatenController::class, 'update']);
Route::get('/material_delete/{No}', [HenkatenController::class, 'material_delete']);

Route::get('/include', [HenkatenController::class, 'include']);
