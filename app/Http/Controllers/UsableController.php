<?php

namespace App\Http\Controllers;

use App\Models\LhpCasting;
use App\Models\LhpCastingHours;
use App\Models\LhpFinalInspection;
use App\Models\LhpFinalInspectionRaw;
use App\Models\LhpMeltingRAW;
use App\Models\LhpSupplyRAW;
use App\Models\MesinCasting;
use App\Models\LhpSupply;
use App\Models\LhpMelting;
use Illuminate\Http\Request;
use App\Models\RejectNG;
use LhpCastingHoursTable;
use Illuminate\Support\FacadesDB;
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


    // ============================= // PARTIAL SUPPLY // ================================= //

    public function resume_supply(UsableController $useable, $mesin, $id)
    {
        $shift = $useable->Shift();
        $date = $useable->date();

        $sql1 = LhpSupplyRAW::groupBy(LhpSupplyRAW::raw('no_mc'))->groupBy(LhpSupplyRAW::raw('hour(jam)'))->where([['tanggal', '=', $date], ['forklift', '=', $mesin]])->selectRaw("tanggal, jam, furnace, no_mc as Mesin_Casting, jumlah_tapping, COUNT(jumlah_tapping) as frekuensi, SUM(jumlah_tapping) as total_tapping")->get();
        // dd($sql1);
        return view('lhp.resume-forklift', compact('sql1', 'mesin', 'id'));
    }

    // ============================= //REJECT // ================================= //
    // =================== //REJECT CASTING // ============================ //

    function RejectCastingWithStrip()
    {

        $sum = 0;
        for ($i = 1; $i <= RejectNG::count() / 72; $i++) {
            $sum = $sum + 72;
            ${'idReject_' . $i} = RejectNG::where('casting', 1)
                ->where('id', $sum)->first();

            if (!is_null(${'idReject_' . $i})) {
                $reject[] = ${'idReject_' . $i}->jenis_reject;
            }
        }
        $reject = array_map(function ($value) {
            return str_replace(' ', '-', $value);
        }, $reject);

        return $reject;
    }

    function RejectCastingWithoutStrip()
    {

        $sum = 0;
        for ($i = 1; $i <= RejectNG::count() / 72; $i++) {
            $sum = $sum + 72;
            ${'idReject_' . $i} = RejectNG::where('casting', 1)
                ->where('id', $sum)->first();

            if (!is_null(${'idReject_' . $i})) {
                $reject[] = ${'idReject_' . $i}->jenis_reject;
            }
        }

        return $reject;

    }


    // =================== //REJECT FINAL INSPECTION // ============================ //

    function RejectFinalInspectionWithStrip()
    {


        $sum = 0;
        for ($i = 1; $i <= RejectNG::count() / 72; $i++) {
            $sum = $sum + 72;
            ${'idReject_' . $i} = RejectNG::where('final_inspection', 1)
                ->where('id', $sum)->first();

            if (!is_null(${'idReject_' . $i})) {
                $reject[] = ${'idReject_' . $i}->jenis_reject;
            }
        }
        $reject = array_map(function ($value) {
            return str_replace(' ', '-', $value);
        }, $reject);
   
        return $reject;
    }

    function RejectFinalInspectionWithoutStrip()
    {
        $sum = 0;
        // $getReject = RejectNG::where('final_inspection', 1)->get();
        for ($i = 1; $i <= RejectNG::count() / 72; $i++) {
            $sum = $sum + 72;
            ${'idReject_' . $i} = RejectNG::where('final_inspection', 1)
                ->where('id', $sum)->first();

            if (!is_null(${'idReject_' . $i})) {
                $reject[] = ${'idReject_' . $i}->jenis_reject;
            }
        }

      

        return $reject;
    }

    // ============================= //PARTIAL GAMBAR PART  CASTING// ================================= //
    public function gambarPart(UsableController $useable, $id, $reject)
    {
        $shift = $useable->Shift();
        $date = $useable->date();


        $idCasting = LhpCasting::where('id', $id)->first();
        $ng = $reject;

        return view('lhp.modal-casting-sementara', compact('idCasting', 'ng'));
    }

    


    public function DowntimeCasting(UsableController $useable, $id)
    {
        $shift = $useable->Shift();
        $date = $useable->date();

        $idCasting = LhpCasting::where('id', $id)->first();
        // $ng = $reject;

        return view('lhp.modal-casting-downtime', compact('idCasting'));
    }

    // ============================= //PARTIAL GAMBAR PART FINAL INSPECTION// ================================= //
    public function gambarPartFinal(UsableController $useable, $id, $reject)
    {
        $shift = $useable->Shift();
        $date = $useable->date();

        $lhp = LhpFinalInspection::where('id', $id)->first();
        $ng = $reject;

        return view('lhp.modal-final-inspection', compact('lhp', 'ng'));
    }

    public function saveRejectFinal(UsableController $useable, $id, $reject, $posisi)
    {
        $rejectnew = str_replace("-", " ", $reject);
        $ng = RejectNG::where('jenis_reject', $rejectnew)
            ->where('posisi', $posisi)
            ->pluck('id');
            // dd($ng);
        // dd(RejectNG::where('jenis_reject', $rejectnew)->get());
        $integerNG =  (int) $ng->first();
        $integerId =  intval($id);
    
        $lhp = LhpFinalInspection::where('id', $integerId)->first();
        
        LhpFinalInspectionRaw::create([
            'id_lhp' => $integerId,
            'id_ng' => $integerNG,
        ]);

        //Update Total 
        $total_ng = $lhp->total_ng;

        LhpFinalInspection::where('id', $integerId)->update([
            'total_ng' =>  $total_ng + 1
        ]);

        return redirect("/lhp-final-inspection/$id")->with('behasilditambahkan', 'behasilditambahkan');
    }


}