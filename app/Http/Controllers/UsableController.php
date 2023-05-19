<?php

namespace App\Http\Controllers;

use App\Models\LhpFinalInspection;
use App\Models\LhpFinalInspectionRaw;
use App\Models\LhpCasting;
use App\Models\LhpCastingHours;
use App\Models\LhpMeltingRAW;
use App\Models\LhpSupplyRAW;
use App\Models\LhpSupply;
use App\Models\LhpMelting;
use App\Models\MesinCasting;
use Illuminate\Http\Request;
use App\Models\RejectNG;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

    // ============================= // PARTIAL CASTING // ================================= //

    public function resume_casting(UsableController $useable, $mesin, $id)
    {
        $shift = $useable->Shift();
        $date = $useable->date();

        $gettargetHours = MesinCasting::where('mc', $mesin)->selectRaw('CEILING(3600/cycle_time * 0.90) AS Target')->first();
        $targetHours = $gettargetHours->Target;
        // $sql1 = LhpCastingRaw::groupBy(LhpCastingRaw::raw('HOUR(created_at)'))->where(DB::raw('DATE(created_at)', $date))->where('id_lhp', $id)->selectRaw("created_at, COUNT(id_ng) AS reject, COUNT(id_dt) AS downtime")->get();
        // $sql1 = LhpCastingRaw::groupBy(LhpCastingRaw::raw('HOUR(created_at)'))->where('created_at', $date)->get();
        // dd($sql1);
        $start_date = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        $end_date = Carbon::createFromFormat('Y-m-d', $date)->endOfDay();
        // $start_time = Carbon::createFromFormat('H:i:s', '0' . 9 . ':00:00');
        // $end_time = Carbon::createFromFormat('H:i:s',  10 . ':00:00');
        $sql1 = LhpCastingHours::whereBetween('created_at', [$start_date, $end_date])->get();



        for ($i = 0; $i < 9; $i++) {
            $start_time = Carbon::createFromFormat('H:i:s', '0' . $i . ':00:00');
            $end_time = Carbon::createFromFormat('H:i:s', '0' . $i + 1 . ':00:00');
            $waktu =  '0' . $i . ':00';
            ${'getdata' . $i} = collect($sql1->whereBetween('created_at', [$start_time, $end_time])->all());
            if (${'getdata' . $i} != null) {
                $tp = ${'getdata' . $i}->sum('tp_' . $i);
                $tn = ${'getdata' . $i}->sum('tn_' . $i);
                $td = ${'getdata' . $i}->sum('td_' . $i);
                ${'forData' . $i}[] =  $waktu;
                // ${'forData' . $i}[] =${'getdata' . $i};
                ${'forData' . $i}[] = $tp;
                ${'forData' . $i}[] =  $tn;
                ${'forData' . $i}[] = $td;
            } else {
                ${'forData' . $i}[] = 0;
                // ${'forData' . $i}[] =${'getdata' . $i};
                ${'forData' . $i}[] = 0;
                ${'forData' . $i}[] =  0;
                ${'forData' . $i}[] = 0;
            }
        }

        $start_time = Carbon::createFromFormat('H:i:s', '0' . 9 . ':00:00');
        $end_time = Carbon::createFromFormat('H:i:s',  10 . ':00:00');
        $waktu =  '0' . 9 . ':00';
        ${'getdata' . 9} = collect($sql1->whereBetween('created_at', [$start_time, $end_time])->all());
        if (${'getdata' . 9} != null) {
            $tp = ${'getdata' . 9}->sum('tp_' . 9);
            $tn = ${'getdata' . 9}->sum('tn_' . 9);
            $td = ${'getdata' . 9}->sum('td_' . 9);
            ${'forData' . 9}[] =  $waktu;
            // ${'forData' . 9}[] =${'getdata' . 9};
            ${'forData' . 9}[] = $tp;
            ${'forData' . 9}[] =  $tn;
            ${'forData' . 9}[] = $td;
        } else {
            ${'forData' . 9}[] = 0;
            // ${'forData' . 9}[] =${'getdata' . 9};
            ${'forData' . 9}[] = 0;
            ${'forData' . 9}[] =  0;
            ${'forData' . 9}[] = 0;
        }
        // dd($sql1->whereBetween('created_at', [$start_time, $end_time])->dd());
        for ($i = 10; $i < 23; $i++) {
            $start_time = Carbon::createFromFormat('H:i:s',  $i . ':00:00');
            $end_time = Carbon::createFromFormat('H:i:s',  $i + 1 . ':00:00');
            $waktu =   $i . ':00';
            ${'getdata' . $i} = collect($sql1->whereBetween('created_at', [$start_time, $end_time])->all());
            if (${'getdata' . $i} != null) {
                $tp = ${'getdata' . $i}->sum('tp_' . $i);
                $tn = ${'getdata' . $i}->sum('tn_' . $i);
                $td = ${'getdata' . $i}->sum('td_' . $i);
                ${'forData' . $i}[] =  $waktu;
                // ${'forData' . $i}[] =${'getdata' . $i};
                ${'forData' . $i}[] = $tp;
                ${'forData' . $i}[] =  $tn;
                ${'forData' . $i}[] = $td;
            } else {
                ${'forData' . $i}[] = 0;
                // ${'forData' . $i}[] =${'getdata' . $i};
                ${'forData' . $i}[] = 0;
                ${'forData' . $i}[] =  0;
                ${'forData' . $i}[] = 0;
            }
        }

        $start_time = Carbon::createFromFormat('H:i:s', 23 . ':00:00');
        $end_time = Carbon::createFromFormat('H:i:s', 00 . ':00:00');
        $waktu =   23 . ':00';
        ${'getdata' . 23} = collect($sql1->whereBetween('created_at', [$start_time, $end_time])->all());
        if (${'getdata' . 23} != null) {
            $tp = ${'getdata' . 23}->sum('tp_' . 23);
            $tn = ${'getdata' . 23}->sum('tn_' . 23);
            $td = ${'getdata' . 23}->sum('td_' . 23);
            ${'forData' . 23}[] =  $waktu;
            // ${'forData' . 23}[] =${'getdata' . 23};
            ${'forData' . 23}[] = $tp;
            ${'forData' . 23}[] =  $tn;
            ${'forData' . 23}[] = $td;
        } else {
            ${'forData' . 23}[] = 0;
            // ${'forData' . 23}[] =${'getdata' . 23};
            ${'forData' . 23}[] = 0;
            ${'forData' . 23}[] =  0;
            ${'forData' . 23}[] = 0;
        }
        for ($x = 0; $x < 24; $x++) {
            $data[] = ${'forData' . $x};
        }

        // dd($data[9][1] - $data[9][2]);
        return view('lhp.resume-casting', compact('mesin', 'id', 'targetHours', 'data', 'date'));
    }


    // ============================= // Pengubah Null menjai 0 dalam array  // ================================= //
    public function convertNullToZero($array)
    {
        $array = array_map(function ($value) {
            return $value === null ? 0 : $value;
        }, $array);

        return $array;
    }

    // ============================= // Pengecek Datatype string // ================================= //
    function checkDataTypeInArray($array, $dataType)
    {
        foreach ($array as $key => $element) {
            if (gettype($element) == $dataType) {
                echo "Found a $dataType value: $element at index $key<br>";
                return true;
            }
        }
        echo "No $dataType values found in the array<br>";
        return false;
    }

    // ============================= // Pengubah string menjadi integer  // ================================= //
    function convertArrayStringToNumber($array)
    {
        foreach ($array as $key => $element) {
            if (is_string($element) && is_numeric($element)) {
                $array[$key] = $element + 0;
            }
        }
        return $array;
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
        dd(RejectNG::where('jenis_reject', $rejectnew)->get());
        $integerNG =  (int) $ng->first();
        $integerId =  intval($id);
        // dd($integerNG);
        $lhp = LhpFinalInspection::where('id', $integerId)->first();
        // $mc =  $lhp->id_mesincasting;
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
