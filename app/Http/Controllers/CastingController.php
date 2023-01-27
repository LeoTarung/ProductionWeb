<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MesinCasting;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\UsableController;


class CastingController extends Controller
{
    public function Dashboard(UsableController $useable)
    {
        $date = $useable->date();
        $shift = $useable->Shift();
        $mesin = MesinCasting::get()->all();
        $title = "Casting Overview";

        return view('menu.production.casting.casting', compact('title', 'shift', 'date', 'mesin'));
    }
}
