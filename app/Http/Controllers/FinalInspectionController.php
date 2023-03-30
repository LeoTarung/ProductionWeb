<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use LhpFinalInspTable;
use App\Models\LhpFinalInspection;
use App\Models\Part;
use App\Http\Requests\LhpFinalInspRequest;
use App\Models\RejectNG;

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
        $nama_part = Part::get();


        return view('lhp.prep-final-inspection', compact('title','shift', 'mesin','nrp','id','nama_part'));
    }

    public function Prep_final_inspection_simpan(UsableController $useable, LhpFinalInspRequest $request){
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "Final Inspection";
        $mesin = "Final Inspection";
        // $gate = 0;
       $get_part = Part::where('nama_part',$request->nama_part )->select('id');
       $id_part = $get_part->pluck('id')->first();
    //    $id_part = array_map('intval', $array_part);

        LhpFinalInspection::create([
            'tanggal' => $date,
            'shift' => $shift,
            'nrp' => $request->nrp,
            'gate' => $request->gate,
            // 'no_lhp' => $request->no_lhp,
            'id_part' =>$id_part,
            ]);

        $id =  LhpFinalInspection::where([['tanggal', '=', $date],['shift', '=', $shift],['id_part', '=' ,$id_part]])->orderBy('id', 'DESC')->first();

        return redirect("/lhp-final-inspection/$id->id")->with('berhasilditambahkan', 'berhasilditambahkan');
    
    }

    public function Lhp_final_inspection(UsableController $useable,$id){
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "LHP Final Inspection";
        $mesin = "Final Inspection";

        $lhp = LhpFinalInspection::where('id', $id)->first();
        // dd( $test);
        $nrp = $lhp->nrp;
        // $id = 0;
        $reject = collect($useable->RejectFinalInspectionWithStrip());

        // dd($reject);
        // $rejectforView = collect($useable->RejectFinalInspectionWithoutStrip());
        // $namaPart = $lhp->mesincasting->nama_part;

        return view('lhp.lhp-final-inspection', compact('title','shift', 'mesin','nrp','id', 'lhp'));
    }
}

