<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinalInspectionController extends Controller
{
    //
    public function FinalInspection(UsableController $useable){
        $shift = $useable->Shift();
        $title = "Final Inspection";
        $mesin = "Final Inspection";
        $nrp = 0;
        $id = 0;
        return view('lhp.lhp-final-inspection', compact('title','shift', 'mesin','nrp','id'));
    }

    public function Prep_final_inspection(UsableController $useable){
        $shift = $useable->Shift();
        $title = "Final Inspection";
        $mesin = "Final Inspection";
        $nrp = 0;
        $id = 0;
        return view('lhp.prep-final-inspection', compact('title','shift', 'mesin','nrp','id'));
    }
}

