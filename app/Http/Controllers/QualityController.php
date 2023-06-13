<?php

namespace App\Http\Controllers;

use App\Models\DatatableQualityModel;
use App\Models\MesinCasting;
use App\Models\Part;
use App\Models\StatusQualityModel;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index()
    {
        $title = "Quality";
        $mc = MesinCasting::all();
        $nama_part = Part::get();
        // dd($nama_part);
        foreach ($mc as $key) {
            $mesin[] = $key;
            $noMesin[] = $key->mc;
        }
        // dd(count($mesin));
        return view('menu.production.quality.index', compact('title', 'mesin', 'noMesin', 'nama_part'));
    }

    public function indexHistory()
    {
        $title = "Quality";
        $data = DatatableQualityModel::all();

        return view('menu.production.quality.historyQuality', compact('title', 'data'));
    }

    public function getWarna()
    {
        $title = "Quality";
        $status =StatusQualityModel::all();

        // dd(count($mesin));
        return response()->json( $status);
    }

    public function modalTable($id)
    {
        $noMesin = $id;
        $data = DatatableQualityModel::where('no_mesin', $id)->get();
        return view('menu.production.quality.modal', compact('noMesin', 'data'));
    }

    public function updateStatus($warna, $no)
    {
        $title = "Quality";
        $noMesin = StatusQualityModel::where('id', $no)->first();
        // dd($noMesin);
        if ($warna == 1) {
            $noMesin->update([
                'warna' => "red"
            ]);
        } elseif ($warna == 2) {
            $noMesin->update([
                'warna' => "green"
            ]);
        } elseif ($warna == 3) {
            $noMesin->update([
                'warna' => "yellow"
            ]);
        } elseif ($warna == 4) {
            $noMesin->update([
                'warna' => "blue"
            ]);
        } elseif ($warna == 5) {
            $noMesin->update([
                'warna' => "white"
            ]);
         } elseif ($warna == 6) {
            $noMesin->update([
                'warna' => "purple"
            ]);
        }
        return redirect()->back();
    }

    public function resetStatusToDefault($shift)
    {
        $data = StatusQualityModel::whereNotIn('warna', ['red'])->where('shift', $shift)->get();
        // $status = $data->get();
        // dd($data);
        foreach ($data as $key) {
            $key->update([
                'warna' => 'yellow'
            ]);
        }
        return redirect()->back();
    }



    public function inputProblem(Request $request)
    {
        DatatableQualityModel::create([
            'no_mesin' => $request->no,
            'nama_part' => $request->nama_part,
            'problem' => $request->problem,
            'aktivitas' => $request->aktivitas,
            'status' => $request->status
        ]);

        // return view('menu.production.quality.index', compact('title'));
        return redirect()->back();
    }
}
