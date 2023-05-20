<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use LhpFinalInspTable;
use App\Models\LhpFinalInspection;
use App\Models\LhpFinalInspectionRaw;
use App\Models\Part;
use App\Http\Requests\LhpFinalInspRequest;
use App\Models\RejectNG;
use Illuminate\Support\Facades\DB;
// use LhpFinalInspRaw;

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

        $get_part = Part::where('nama_part',$request->nama_part )->select('id');
        $id_part = $get_part->pluck('id')->first();

        $oldprep = LhpFinalInspection::where('nrp', $request->nrp)
            ->where('id_part', $id_part)
            ->where('tanggal', $date)
            ->where('shift', $shift)
        ->first();
// dd($request);
        // dd($oldprep, $shift,$date,$id_part,$request->nrp);
        if ($oldprep == null) {
           
            LhpFinalInspection::create([
                'tanggal' => $date,
                'shift' => $shift,
                'nrp' => $request->nrp,
                'gate' => $request->gate,
                // 'no_lhp' => $request->no_lhp,
                'id_part' =>$id_part,
                ]);
                // $id =  LhpFinalInspection::where([['tanggal', '=', $date],['shift', '=', $shift],['id_part', '=' ,$id_part]])->orderBy('id', 'DESC')->first();
                // // dd($oldprep);
                // return redirect("/lhp-final-inspection/$id->id")->with('berhasilditambahkan', 'berhasilditambahkan');

            $id =  LhpFinalInspection::where([['tanggal', '=', $date],['shift', '=', $shift],['id_part', '=' ,$id_part]])->orderBy('id', 'DESC')->first();

            return redirect("/lhp-final-inspection/$id->id")->with('berhasilditambahkan', 'berhasilditambahkan');
           
        } else {
            $id =  LhpFinalInspection::where([['tanggal', '=', $date],['shift', '=', $shift],['nrp', '=', $request->nrp],['id_part', '=' ,$id_part]])->orderBy('id', 'DESC')->first();

            return redirect("/lhp-final-inspection/$id->id")->with('berhasilditambahkan', 'berhasilditambahkan');

        }
        
    }

    public function Lhp_final_inspection(UsableController $useable,$id){
        // dd($useable->RejectCastingWithoutStrip());
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "LHP Final Inspection";
        $mesin = "Final Inspection";
        $lhp = LhpFinalInspection::where('id', $id)->first();
        $nrp = $lhp->nrp;
        $box = $lhp->part->std_packaging;
        if ($box == null)
            {
                $box = 0;
            }
        else {
            // do nothing
        }
            // $box = DB::table('part')
            // ->where('id', $lhp->part)
            // ->value(DB::raw('IFNULL(std_packaging,0)'));
        // dd($box);
        // $id = 0;
        $reject = collect($useable->RejectFinalInspectionWithStrip());
        $rejectforView = collect($useable->RejectFinalInspectionWithoutStrip());

        $namaPart = $lhp->part->nama_part;

        $jumlahReject = $reject->count();

        return view('lhp.lhp-final-inspection', compact('title','shift', 'mesin','nrp','id', 'lhp','namaPart', 'box','reject', 'rejectforView', 'jumlahReject'));
    }

    public function totalCheck(UsableController $usable, $id, $hitung)
    {
        $lhp= LhpFinalInspection::where('id', $id)->first();
        $lhp->update([
        'total_check' => $hitung
        ]);
        // $hitung = $lhp->selectRaw('COUNT(total_check) as hitung')->get();
        return redirect("/lhp-final-inspection/$lhp->id")->with('berhasilditambahkan', 'berhasilditambahkan');
        // return response()->json($hitung);
    }

    public function apinadif($id)
    {
        $data = LhpFinalInspection::find($id);
        return $data;
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
        // dd( LhpFinalInspectionRaw::where('id_lhp', $id_lhp)
        // ->whereBetween('id_ng', [1,72])->get());
// $id_ng = 1 ;
//         $posts = LhpFinalInspectionRaw::with(['reject' => function($query) {
//             $query->select('id', 'jenis_reject');
//         }])->whereHas('reject', function($query) use ($id_ng) {
//             $query->where('id', $id_ng);
//         })->count();

//         dd($posts);
        return response()->json($data);
    }

    public function totalOk(UsableController $usable, $id, $total)
    {
        $lhp= LhpFinalInspection::where('id', $id)->first();
        $lhp->update([
        'total_ok' => $total
        ]);
        // $hitung = $lhp->selectRaw('COUNT(total_check) as hitung')->get();
        return redirect("/lhp-final-inspection/$lhp->id")->with('berhasilditambahkan', 'berhasilditambahkan');
        // return response()->json($hitung);
    }
    

}
