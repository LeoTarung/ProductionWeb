<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinalInspectionController extends Controller
{
    //
    public function FinalInspection(UsableController $useable){
        $title = "Final Inspection";
        return view('lhp.lhp-final-inspection', compact('title'));
    }

    public function Prep_final_inspection(UsableController $useable){
        $title = "Final Inspection";
        return view('lhp.prep-final-inspection', compact('title'));
    }
}

