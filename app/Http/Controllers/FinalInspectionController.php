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
use Carbon\Carbon;
// use LhpFinalInspRaw;

class FinalInspectionController extends Controller
{
    public function Dashboard(UsableController $useable)
    {
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "Final Inspection Overview";
        $nama_part = Part::get();
        
        $start_date = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        $end_date = Carbon::createFromFormat('Y-m-d', $date)->endOfDay();
        
        $lhpToday = LhpFinalInspection::whereBetween('created_at', [$start_date, $end_date])->get();
        $totalProduksi = 0;
        $totalOk = 0;
        $totalReject = 0;
        // dd( $lhpToday);
       foreach ( $lhpToday->all() as $key ) {
        $totalProduksi =  $totalProduksi + $key->total_check;
        $totalOk =  $totalOk + $key->total_ok;
        $totalReject =  $totalReject + $key->total_ng;
        // dd($key->part);
       }

        return view('menu.production.finalInspection.finalInspection', compact('title', 'shift', 'date', 'nama_part','totalProduksi','totalOk','totalReject','lhpToday'));
    }

    public function rejectionFins(UsableController $useable)
    {
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "Rejection Final Inspection Overview";
        $nama_part = Part::get();

        return view('menu.production.finalInspection.rejectionFins', compact('title', 'shift', 'date', 'nama_part'));
    }

    public function rejectionDetail(UsableController $useable)
    {
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "Rejection Final Inspection Overview";
        $nama_part = Part::get();

        return view('menu.production.finalInspection.rejectionDetail', compact('title', 'shift', 'date', 'nama_part'));
    }

    //
    public function Prep_final_inspection(UsableController $useable){
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "Final Inspection";
        $mesin = "Final Inspection";
        $nrp = 0;
        $id = 0;
        // $nama_part = Part::get();
        // $nama_part = Part::where('material', 'like', '_______F%' )->get();
        $nama_part = Part::where('nama_part', 'like', '%(FG)%' )->get();

        // dd($nama_part);
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
       
        return redirect("/lhp-final-inspection/$lhp->id")->with('berhasilditambahkan', 'berhasilditambahkan');

    }

    public function apinadif($id)
    {
        $data = LhpFinalInspection::find($id);
        return $data;
    }

     // untuk undo box 
     public function undoBox(UsableController $useable, $id, $box){
        $date = $useable->date();
        $shift = $useable->Shift();
        $title = "LHP Final Inspection";
        $mesin = "Final Inspection";

        // for undo
        $lhp= LhpFinalInspection::where('id', $id)->first();
        $dataOld =  $lhp->total_check;
        $lhp->update([
        'total_check' => $dataOld - $box
        ]);
        // batas akhir

        $nrp = $lhp->nrp;
        $box = $lhp->part->std_packaging;
        if ($box == null)
            {
                $box = 0;
            }
        else {
            // do nothing
        }
        $reject = collect($useable->RejectFinalInspectionWithStrip());
        $rejectforView = collect($useable->RejectFinalInspectionWithoutStrip());
        $namaPart = $lhp->part->nama_part;
        $jumlahReject = $reject->count();
       
        return view('lhp.lhp-final-inspection', compact('title','shift', 'mesin','nrp','id', 'lhp','dataOld','namaPart', 'box','reject', 'rejectforView', 'jumlahReject'));

        // return redirect("/lhp-final-inspection/$lhp->id")->with('berhasilditambahkan', 'berhasilditambahkan');

    }

    // untuk undo reject 
    public function undoReject($id_lhp){
        $undo = LhpFinalInspectionRaw::where('id_lhp', $id_lhp)->get();
      
        // dd( $undo->last());
        $undo->last()->delete();

        $id = $id_lhp;
        $lhp = LhpFinalInspection::where('id', $id)->first();
        $totalCheck = $lhp->total_check;
        $totalOk = $lhp->total_ok;
        $totalReject = $lhp->total_ng;
        $lhp->update([
            // 'total_check' =>  $totalCheck - 1,
            'total_ok' =>  $totalOk + 1,
            'total_ng' =>  $totalReject - 1,
        ]);


        return redirect()->back();
        // return redirect("/lhp-final-inspection/$lhp->id")->with('berhasilditambahkan', 'berhasilditambahkan');

    }

    public function totalReject(Usablecontroller $usable, $id_lhp)
    {
        $reject = LhpFinalInspectionRaw::where('id_lhp', $id_lhp);
        $total_reject = $reject->selectRaw('COUNT(id_ng) as total_reject')->get();
        
        $data = array();
        $data[] = $total_reject[0]->total_reject;
        $rejectList = collect($usable->RejectFinalInspectionWithoutStrip());

        foreach ($rejectList as $key ) {
            $wadah[] = RejectNG::where('jenis_reject', $key)->pluck('id') ;
            $wadahTest[] = RejectNG::where('jenis_reject', $key)->pluck('jenis_reject') ;
        }

        for ($i = 1; $i <= $rejectList->count(); $i++) {
            $data[$i] =  LhpFinalInspectionRaw::where('id_lhp', $id_lhp)
                ->whereBetween('id_ng', [$wadah[$i-1]->first(), $wadah[$i-1]->last()])
                ->count();
        }
        // dd($data);
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

