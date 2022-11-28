<?php

namespace App\Http\Controllers;

use App\Models\lhpMeltingModel;
use App\Models\prepMeltingModel;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function index()
    {

        return  view('pages.production', [
            "title" => 'Production Overview',
        ]);
    }

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
        $lhp = prepMeltingModel::orderBy('id', 'DESC')->first();
        $id_striko1 = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-1'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko2 = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-2'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko3 = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-3'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_Swift_Asia = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', 'Swift_Asia'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();

        return view('pages_lhp.prepare', compact('lhp', 'shift', 'id_striko1', 'id_striko2', 'id_striko3', 'id_Swift_Asia',), [
            'title' => "LHP Melting"
        ]);
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
        $ntah = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', $mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        if ($ntah != null) {
            return view('pages_lhp.lhpMelting', compact('mesin', 'id',), ['title' => "LHP Melting"]);
        } else {
            return redirect('/melting')->with('preulang', 'preulang');
        }
    }

    public function lhp_jam_simpan(Request $request, $mesin, $id)
    {
        $shift = $this->Shift();
        $date = $this->date();
        $hour = $this->hour();
        $ntah = prepMeltingModel::where([['tanggal', '=', $date], ['mesin', '=', $mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        if ($ntah != null) {
            // dd($request->item,  $mesin, $id);
            lhpMeltingModel::create([
                'id_lhp' => $id,
                'tanggal' => $date,
                'jam' => $hour,
                'shift' => $shift,
                $request->item => $request->berat
            ]);
            return redirect("/melting/$mesin/$id");
        } else {
            return redirect('/melting')->with('preulang', 'preulang');
        }
    }

    // ============================= // END FUNCTION MELTING // ================================= //
}
