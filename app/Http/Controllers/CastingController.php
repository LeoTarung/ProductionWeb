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
        // $data_lhp = LhpMelting::where([['tanggal', '=', $date]])->first();;
        return  view('menu.production.casting.casting', [
            "title" => 'Melting Overview',
        ]);
    }
}
