<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lhpMeltingModel;
use App\Models\prepMeltingModel;

class ProductionLHPController extends Controller
{
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

    function date()
    {
        $date = date('Y-m-d');
        return $date;
    }

    function hour()
    {
        $hour = date('H:i');
        return $hour;
    }


    // ============================= // FUNCTION YANG BISA DIGUNAKAN // ================================= //

    // public function layout()
    // {
    //     return view('layout.layoutlhp');
    // }
    // public function index()
    // {
    //     $shift = $this->Shift();
    //     $date = date('Y-m-d H:i:s');
    //     $cek = "Sekarang adalah jam = " . "$date" . " dan sekarang adalah shift = " . "$shift";
    //     dd($cek);
    //     // return view('welcome');
    // }

    // ============================= // FUNCTION MELTING // ================================= //

    public function prep_melting()
    {
        $shift = $this->Shift();
        $date = $this->date();
        $title = "LHP Melting";
        $lhp = prepMeltingModel::orderBy('id', 'DESC')->first();
        $id_striko1 = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-1'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko2 = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-2'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko3 = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-3'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_Swift_Asia = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', 'Swift_Asia'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();

        return view('lhp.prepare', compact('title', 'lhp', 'shift', 'id_striko1', 'id_striko2', 'id_striko3', 'id_Swift_Asia'));
    }

    public function prep_melting_simpan(Request $request)
    {
        $shift = $this->Shift();
        $date = $this->date();
        // dd($request);
        if ($request->nrp != "" && $request->nama != "" && $request->material != "" && $request->mesin != "") {
            prepMeltingModel::create([
                // 'nama kolom' => 'name di html'
                'tanggal' => $date,
                'nrp' => $request->nrp,
                'nama' => $request->nama,
                'shift' => $shift,
                'mesin' => $request->mesin,
                'material' => $request->material
            ]);
            $id = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', $request->mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
            return redirect("/melting/$request->mesin/$id->id");
        } else {
            return redirect('/melting')->with('calladmin', 'calladmin');
        }
    }

    public function lhp_jam($mesin, $id)
    {
        $shift = $this->Shift();
        $date = $this->date();
        $title = "LHP Melting";
        $ntah = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', $mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        if ($ntah != null) {
            return view('lhp.lhpMelting', compact('title', 'mesin', 'id', 'shift'));
        } else {
            return redirect('/melting')->with('preulang', 'preulang');
        }
    }

    public function lhp_jam_simpan(Request $request, $mesin, $id)
    {
        $shift = $this->Shift();
        $date = $this->date();
        $hour = $this->hour();
        $jenis = $request->item;
        $value = $request->berat;
        $ntaha = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', $mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        if ($ntaha != null) {
            // dd($request->item,  $mesin, $id);
            lhpMeltingModel::create([
                'id_lhp' => $id,
                'tanggal' => $date,
                'jam' => $hour,
                'shift' => $shift,
                $request->item => $request->berat
            ]);
            $beratA = $ntaha->$jenis;
            $total = $beratA + $value;
            // update data
            prepMeltingModel::where([['id', '=', $id]])->update([$jenis => $total]);

            $ntah = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', $mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
            $Totalreturn = $ntah->basemetal + $ntah->exgate + $ntah->reject_parts + $ntah->alm_treat;
            $TotalCharging = $Totalreturn + $ntah->ingot;
            $Totalloses = $ntah->dross - $ntah->alm_treat;
            $gas_use = $ntah->gas_akhir - $ntah->gas_awal;
            if ($TotalCharging == 0) {
                $persen_ingot = 100;
            } else {
                $persen_ingot = $ntah->ingot / $TotalCharging * 100;
            }
            if ($TotalCharging == 0) {
                $gas_komsum = $gas_use;
            } else {
                $gas_komsum = $gas_use / $TotalCharging * 100;
            }
            //$gas_komsum adalah brpa pemakaian gas per kilo dan brpa % penggunaannya.
            prepMeltingModel::where([['id', '=', $id]])->update([
                'total_return' =>  $Totalreturn,
                'total_charging' => $TotalCharging,
                'persen_ingot' => $persen_ingot,
                'total_losses' => $Totalloses,
                'gas_used' => $gas_use,
                'gas_konsum' => $gas_komsum
            ]);

            return redirect("/melting/$mesin/$id");
        } else {
            return redirect('/melting')->with('preulang', 'preulang');
        }
    }

    // ============================= // END FUNCTION MELTING // ================================= //
}