<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\UsableController;
use App\Models\MesinCasting;

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

    public function showMolten(UsableController $useable)
    {
        $data = "SETTINGS";
        $title = $data;
        $mesin = $data;
        $id = null;
        $nrp = null;
        $forklift = null;
        $date = $useable->date();
        $shift = $useable->Shift();


        return  view('settings.moltenSetting', compact('shift', 'date', 'mesin', 'title', 'id', 'nrp', 'forklift'));
    }
}
