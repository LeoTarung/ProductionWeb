<?php

namespace App\Http\Controllers;

use App\Models\TestModel;

use App\Models\LHPMelting;

use Illuminate\Http\Request;
use App\Models\LHPMeltingRaw;
use App\Models\LHPMeltingRawModel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UsableController;
use App\Http\Resources\Api\TestApiResource;

class MeltingTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index(UsableController $useable)
    {
        $sql = LHPMeltingRaw::all();
        $shift = $useable->Shift();
        $date = $useable->date();
        $title = "LHP Melting";
        $lhp = LhpMelting::orderBy('id', 'DESC')->first();
        $id_striko1 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-1'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko2 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-2'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko3 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-3'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_Swift_Asia = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Swift_Asia'], ['shift', '=', $shift]])->first();
        $nrp = 0;
        $mesin = "MELTING";
        // $shift = 'test';
        // return view('lhp.test', [
        //     "title" => 'Test',
        //     "molt" => $sql,
        //     'shift', 'date', 'nrp'
        // ]);

        return view('lhp.test', compact('title', 'nrp', 'mesin', 'lhp', 'shift', 'id_striko1', 'id_striko2', 'id_striko3', 'id_Swift_Asia'), ["molt" => $sql]);
    }

    public function table(UsableController $useable)
    {
        // $sql = TestModel::all();

        // $www = $sql->mapWithKeys(function ($item, $key) {
        //     return [
        //         $item->tanggal => $item->ingot, $item->loss, $item->total_charging
        //     ];
        // });
        // dd($www);

        $title = "LHP Melting";
        $ingot = ['2023-01-01' => 30, '2023-01-02' => 25, '2023-01-03' => 27, '2023-01-04' => 29, '2023-01-05' => 27];
        $loss = ['2023-01-01' => 15, '2023-01-02' => 5, '2023-01-03' => 20, '2023-01-04' => 13, '2023-01-05' => 30];
        $total_charging = ['2023-01-01' => 150, '2023-01-02' => 500, '2023-01-03' => 200, '2023-01-04' => 130, '2023-01-05' => 300];
        // dd($ingot, $loss, $total_charging);
        return view('menu.production.table', compact('ingot', 'loss', 'total_charging', 'title'));

        // return view('menu.production.table', compact('title', 'nrp', 'mesin', 'lhp', 'shift', 'id_striko1', 'id_striko2', 'id_striko3', 'id_Swift_Asia'), ["molt" => $sql]);
    }

    public function final_inspection(UsableController $useable)
    {
        $sql = LHPMeltingRaw::all();
        $shift = $useable->Shift();
        $date = $useable->date();
        $title = "LHP Melting";
        $forklift = "BLOK";
        $lhp = LhpMelting::orderBy('id', 'DESC')->first();
        $id_striko1 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-1'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko2 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-2'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko3 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-3'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_Swift_Asia = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Swift_Asia'], ['shift', '=', $shift]])->first();
        $nrp = 0;
        $mesin = "FINAL INS.";
        // $shift = 'test';
        // return view('lhp.test', [
        //     "title" => 'Test',
        //     "molt" => $sql,
        //     'shift', 'date', 'nrp'
        // ]);

        return view('lhp.final', compact('title', 'forklift', 'nrp', 'mesin', 'lhp', 'shift', 'id_striko1', 'id_striko2', 'id_striko3', 'id_Swift_Asia'), [
            "molt" => $sql,
            "id" => 1
        ],);
    }
}
