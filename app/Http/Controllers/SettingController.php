<?php

namespace App\Http\Controllers;

use App\Models\MesinCasting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\UsableController;
use App\Http\Requests\SettingMoltenRequest;

class SettingController extends Controller
{
    public function index(UsableController $useable)
    {
        $data = "SETTINGS";
        $title = $data;
        $mesin = $data;
        $id = null;
        $nrp = null;
        $forklift = null;
        $date = $useable->date();
        $shift = $useable->Shift();
        $mc = MesinCasting::all();

        return  view('settings.mainSettings', compact('shift', 'date', 'mesin', 'title', 'id', 'nrp', 'forklift', 'mc'));
    }

    public function showMolten(UsableController $useable, $id)
    {
        $data = "SETTINGS";
        $title = $data;
        $mesin = $data;
        // $id = null;
        $nrp = null;
        $forklift = null;
        $date = $useable->date();
        $shift = $useable->Shift();

        $molten = MesinCasting::where('mc', $id)->first();
        // if ($mc != null) {
        //     $editmc = $mc;
        // } else {
        //     $editmc = ["NULLAH"];
        // }
            
        $utama = $molten->material;
        $id = $molten->mc;
        $range_hitung = MesinCasting::where('mc', '<=',$id)->get();
        $mcfordata = $range_hitung->count();
        return  view('settings.moltenSetting', compact('shift', 'date', 'mesin', 'title', 'id', 'nrp', 'forklift', 'molten', 'mcfordata'));
        // return $editmc;
    }

    public function UpdateMolten(SettingMoltenRequest $request, $id)
    {

        $mc = MesinCasting::where('mc', $id)->get();
        // $id = $mc->mc;
        MesinCasting::where('mc', $id)->update([
            'material' => $request->material,
            'min_level_molten' => $request->max_level_molten,
            'max_level_molten' => $request->min_level_molten
        ]);
        // dd($mc);
        return redirect("/settings/mesincasting/$id")->with('behasilditambahkan', 'behasilditambahkan');
    }
}
