<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UsableController;
use App\Models\LhpMeltingRAW;
use App\Models\LhpMelting;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    // ============================= // CONTROLLER WEB UMUM // ================================= //

    public function index()
    {
        return  view('menu.production', [
            "title" => 'Production Overview',
        ]);
    }

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
}
