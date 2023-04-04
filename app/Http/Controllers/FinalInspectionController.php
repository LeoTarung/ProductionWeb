<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use LhpFinalInspTable;
use App\Models\LhpFinalInspection;
use App\Models\LhpFinalInspectionRaw;
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
        $nrp = $lhp->nrp;
        // $id = 0;
        $reject = collect($useable->RejectFinalInspectionWithStrip());
        $rejectforView = collect($useable->RejectFinalInspectionWithoutStrip());
        // dd($reject,  $rejectforView/)
        // $rejectforView = collect($useable->RejectFinalInspectionWithoutStrip());
        $namaPart = $lhp->part->nama_part;

        $jumlahReject = $reject->count();

        return view('lhp.lhp-final-inspection', compact('title','shift', 'mesin','nrp','id', 'lhp','namaPart', 'reject', 'rejectforView', 'jumlahReject'));
    }


    public function totalReject(Usablecontroller $usable, $id_lhp)
    {
        $reject = LhpFinalInspectionRaw::where('id_lhp', $id_lhp);
        $total_reject = $reject->selectRaw('COUNT(id_ng) as total_reject')->get();
        $data = array();
        $data[] = $total_reject[0]->total_reject;
        $rejectList = collect($usable->RejectFinalInspectionWithoutStrip());


        $floor = 1;
        $ceiling = 72;
        for ($i = 1; $i <= $rejectList->count(); $i++) {
            $data[$i] =  LhpFinalInspectionRaw::where('id_lhp', $id_lhp)
                ->whereBetween('id_ng', [$floor, $ceiling])
                ->count();
            $floor = $floor + 72;
            $ceiling =  $ceiling + 72;
        }
        // dd($data);
        return response()->json($data);
    }
}

