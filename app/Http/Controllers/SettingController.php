<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\UsableController;

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
        


        return  view('settings.mainSettings', compact('shift', 'date', 'mesin', 'title', 'id', 'nrp', 'forklift'));
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
