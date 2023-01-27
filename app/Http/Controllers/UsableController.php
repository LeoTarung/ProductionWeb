<?php

namespace App\Http\Controllers;

use App\Models\LhpMeltingRAW;
use App\Models\LhpSupplyRAW;
use App\Models\LhpMelting;
use Illuminate\Http\Request;

class UsableController extends Controller
{

    // ============================= // MENENTUKAN SHIFT // ================================= //
    function Shift()
    {
        $time = date('H:i:s');
        // $time = '00:00:00';
        if ($time >= '00:00:00' && $time < '07:10:00') {
            $shift = "SHIFT-1";
        } else if ($time >= '07:10:00' && $time < '16:00:00') {
            $shift = "SHIFT-2";
        } else if ($time >= '16:00:00' && $time <= '23:59:59') {
            $shift = "SHIFT-3";
        } else {
            $shift = "SHIFT TIDAK TERDEFINISI";
        }
        return $shift;
    }

    // ============================= // MENENTUKAN JAM KERJA // ================================= //
    function Jam_kerja()
    {
        $shift = $this->Shift();
        if ($shift == "SHIFT-1") {
            $jam_kerja = 7;
        } elseif ($shift == "SHIFT-2") {
            $jam_kerja = 9;
        } elseif ($shift == "SHIFT-3") {
            $jam_kerja = 8;
        } else {
            $jam_kerja = 1;
        }
        return $jam_kerja;
    }

    // ============================= // MENENTUKAN TANGGAL // ================================= //
    function date()
    {
        $date = date('Y-m-d');
        return $date;
    }

    // ============================= // MENENTUKAN JAM // ================================= //
    function hour()
    {
        $hour = date('H:i');
        return $hour;
    }

    // ============================= // PARTIAL MELTING // ================================= //
    public function Intruksi()
    {
        return  view('partial.instruksi', []);
    }

    public function resume_melting(UsableController $useable, $mesin, $id)
    {
        $shift = $useable->Shift();
        $date = $useable->date();
        $sql1 = LhpMeltingRAW::groupBy(LhpMeltingRAW::raw('hour(jam)'))->where([['tanggal', '=', $date], ['mesin', '=', $mesin]])->selectRaw("tanggal, jam, shift, SUM(ingot) as ingots, SUM(dross) as drosss, SUM(tapping) as tappings, SUM(exgate) as exgates, SUM(reject_parts) as reject_partss, SUM(alm_treat) as alm_treats, SUM(oil_scrap) as oil_scraps, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap) as total_return_rs, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) as total_charging_rs")->get();
        return view('lhp.resume-melting', compact('sql1'));
    }

    public function resume_supply(UsableController $useable, $mesin, $id)
    {
        $shift = $useable->Shift();
        $date = $useable->date();
        $sql1 = LhpSupplyRAW::groupBy(LhpMeltingRAW::raw('hour(jam)'))->where([['tanggal', '=', $date], ['mesin', '=', $mesin]])->selectRaw("tanggal, jam, shift, berat")->get();
        return view('lhp.resume-forklift', compact('sql1'));
    }
}
