<?php

namespace App\Http\Controllers;

use App\Http\Requests\LhpFinalInspRequest;
use Illuminate\Http\Request;
use LhpFinalInspTable;

class FinalInspectionController extends Controller
{
    //
    public function Prep_final_inspection(UsableController $useable){
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "Final Inspection";
        $mesin = "Final Inspection";
        $nrp = 0;
        $id = 0;

        return view('lhp.prep-final-inspection', compact('title','shift', 'mesin','nrp','id'));
    }

    public function Prep_final_inspection_simpan(UsableController $useable, LhpFinalInspRequest $request){
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "Final Inspection";
        $mesin = "Final Inspection";
        // $nrp = 0;
        // $id = 0;
        // $gate =

        return view('lhp.lhp-final-inspection', compact('title','shift', 'mesin','nrp','id'));
    }



    public function FinalInspection(UsableController $useable){
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "Final Inspection";
        $mesin = "Final Inspection";
        $nrp = 0;
        $id = 0;
        return view('lhp.lhp-final-inspection', compact('title','shift', 'mesin','nrp','id'));
    }
}

