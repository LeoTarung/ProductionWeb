<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\MesinCasting;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use Clockwork\Support\Lumen\Controller;
use App\Http\Controllers\UsableController;
use App\Http\Requests\LhpCastingRequest;
use App\Models\Downtime;
use App\Models\LhpCasting;
use App\Models\LhpCastingRaw;
use App\Models\RejectNG;
use Illuminate\Support\Facades\DB;


use function PHPSTORM_META\elementType;

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

    public function tvCasting(UsableController $useable, $id)
    {

        //{{  Untuk Menyyeleksi Henkaten}}  //
        // $mp = null;
        // $met = null;
        // $mc = null;
        // $mat = null;

        // $array = ['satu' => $mp ,
        //             'dua' => $met ,
        //             'tiga' => $mc ,
        //             'empat' => $mat ,
        // ];
        // $filtered = collect(Arr::where($array, function ( $value, $key) {
        //     return ($value != null);
        // }));

        // $hitung = $filtered->count();

        // if($mp  != null) {
        //     $array['satu' ]  = "Man Power";
        // }
        // elseif($met != null){
        //     $array['dua']  = "Method";
        // }
        // elseif($mc  != null){
        //     $array['tiga']  = "Machine";
        // }
        // elseif($mat  != null){
        //     $array['empat']  = "Material";
        // }
        // else {

        // }

        // dd($array['dua']);

        $range_hitung = MesinCasting::where('mc', '<=', $id)->get();
        $mcfordata = $range_hitung->count();

        return view('menu.production.casting.tvCasting', [
            'line' => "NM.FR.AH091",
            'part' => "PIPE SUB-ASSY WATER BY-PASS 60U020 (FG)",
            'urgent' => 0,
            'aktual' => 4009,
            // 'aktual' => $range_hitung->total_part,
            'mcfordata' => $mcfordata,
            // 'aktual2'=> 400///
            'target' => 0,
            'persen' => 94,
            'preparation' => 1,
            'prep' => 4,
            'running' => 0,
            'downtime' => 'INSTROCKER ERROR',
            // 'henkaten' => $hitung,
            'isi' => "MATERIAL",
            'isi2a' => "MAN POWER",
            'isi2b' => "METHOD",
            'isi3a' => "MAN POWER",
            'isi3b' => "METHOD",
            'isi3c' => "MATERIAL",
            'isi4a' => "MAN POWER",
            'isi4b' => "METHOD",
            'isi4c' => "MACHINE",
            'isi4d' => "MATERIAL",
            'shift' => 2,

        ]);
    }

    public function tvCasting2(UsableController $useable, $id1, $id2)
    {

        $range_hitung1 = MesinCasting::where('mc', '<=', $id1)->get();
        $mcfordata1 = $range_hitung1->count();

        $range_hitung2 = MesinCasting::where('mc', '<=', $id2)->get();
        $mcfordata2 = $range_hitung2->count();

        return view('menu.production.casting.tvCasting2', [
            'id1' => $id1,
            'id2' => $id2,
            'kaline' => "NM.FR.AH091",
            'kapart' => "PIPE SUB-ASSY WATER BY-PASS 60U020 (FG)",
            'urgent' => 1,
            'urgent2' => 0,
            'aktual' => 4009,
            'aktual2' => 400,
            'mcfordata1' => $mcfordata1,
            'mcfordata2' => $mcfordata2,
            'target1' => 0,
            'target2' => 0,
            'persen' => 90,
            'persen2' => 94,
            'preparation' => 1,
            'preparation2' => 1,
            'prep' => 3,
            'prep2' => 4,
            'running' => 0,
            'downtime' => 'INSTROCKER ERROR',
            'running2' => 1,
            'downtime2' => 'INSTROCKER ERROR',
            // 'henkaten' => $hitung,
            'isi' => "MATERIAL",
            'isi2a' => "MAN POWER",
            'isi2b' => "METHOD",
            'isi3a' => "MAN POWER",
            'isi3b' => "METHOD",
            'isi3c' => "MACHINE",
            'isi4a' => "MAN POWER",
            'isi4b' => "METHOD",
            'isi4c' => "MACHINE",
            'isi4d' => "MATERIAL",

            'isi5' => "MACHINE",
            'isi6a' => "MAN POWER",
            'isi6b' => "MACHINE",
            'isi7a' => "MAN POWER",
            'isi7b' => "METHOD",
            'isi7c' => "MATERIAL",
            'isi8a' => "MAN POWER",
            'isi8b' => "METHOD",
            'isi8c' => "MACHINE",
            'isi8d' => "MATERIAL",

            'shift' => 3
        ]);
    }


    //==============================[' LHP CASTING ']==============================//

    public function prep_casting(UsableController $useable)
    {
        $date = $useable->date();
        $shift = $useable->Shift();
        $mesin = "CASTING";
        $title = "LHP Casting";
        $nrp = 0;
        $id = 0;

        $line1 = MesinCasting::where('line', 1)->get();
        $line2 = MesinCasting::where('line', 2)->get();
        $line3 = MesinCasting::where('line', 3)->get();

        return view('lhp.prepare-casting', compact('title', 'shift', 'date', 'mesin', 'nrp', 'id', 'line1', 'line2', 'line3'));
    }

    public function prep_casting_simpan(UsableController $useable, LhpCastingRequest $request)
    {
        $date = $useable->date();
        $shift = $useable->Shift();
        $mesin = "CASTING";
        $title = "LHP Casting";

        $line1 = MesinCasting::where('line', 1)->get();
        $line2 = MesinCasting::where('line', 2)->get();
        $line3 = MesinCasting::where('line', 3)->get();

        $oldPreparation = LhpCasting::where('nrp1', $request->nrp1)
            ->where('nama_part', $request->nama_part)
            ->where('id_mesincasting', $request->mc)
            ->where('tanggal', $date)
            ->where('shift', $shift)
            ->first();
        // dd($oldPreparation->id);

        if ($oldPreparation != null) {

            LhpCasting::where('id', $oldPreparation->id)->update([
                // 'id_mesincasting' => $request->mc,
                // 'nrp1' => $request->nrp1,
                'nrp2' => $request->nrp2,
                'nrp3' => $request->nrp3,
                'nrp4' => $request->nrp4,
                'nrp5' => $request->nrp5,
                'nrp6' => $request->nrp6
            ]);

            // dd($request);
        } else {
            LhpCasting::create([
                'id_mesincasting' => $request->mc,
                'nrp1' => $request->nrp1,
                'nrp2' => $request->nrp2,
                'nrp3' => $request->nrp3,
                'nrp4' => $request->nrp5,
                'nrp5' => $request->nrp5,
                'nrp6' => $request->nrp6,
                'tanggal' => $date,
                'shift' => $shift,
                'nomor_dies' =>  $request->dies,
                'nama_part' => $request->nama_part,
                'cavity' => $request->cavity,
            ]);
        }
        $id = LhpCasting::where([['tanggal', '=', $date], ['id_mesincasting', '=', $request->mc], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();

        return redirect("/lhp-casting/$request->mc/$id->id")->with('behasilditambahkan', 'behasilditambahkan');


        // return view('lhp.prepare-casting', compact('title', 'shift', 'date', 'mesin', 'nrp', 'line1', 'line2', 'line3'))->with('behasilditambahkan', 'behasilditambahkan');;
    }


    public function lhp_casting(UsableController $useable, $mc, $id)
    {
        $date = $useable->date();
        $shift = $useable->Shift();
        $mesin = "CASTING";
        $title = "LHP Casting";
        $idCasting = LhpCasting::where('id', $id)->first();
        $reject = collect($useable->RejectCastingWithStrip());
        $rejectforView = collect($useable->RejectCastingWithoutStrip());
        $reject = collect($useable->RejectCastingWithStrip());
        $downtime = Downtime::where('casting', 1)->get();
        $arrayDt =  DB::table('downtime')->select('id')->orderByRaw("CASE
        WHEN Kategori = 'Material' THEN 1
        WHEN Kategori = 'Mesin' THEN 2
        WHEN Kategori = 'Proses' THEN 3
        WHEN Kategori = 'Dies' THEN 4
        WHEN Kategori = 'Terplanning' THEN 5
            END")->get();

        foreach ($arrayDt as $row) {
            $listIdDt[] = $row->id;
        }
        // dd($listDt);
        foreach ($listIdDt as $row) {
            // $waktu_dt[] =  collect(DB::select('SELECT SUM(waktu_dt) AS Total_waktu FROM lhp_casting_raw WHERE id_lhp = ? AND id_dt = ?', [$id, $row]))->first()->Total_waktu;
            $listWaktu_dt[] =  LhpCastingRaw::where('id_lhp', $id)->where('id_dt', $row)->select('waktu_dt')->orderBy('updated_at', 'desc')->first();
        }

        // $waktu_dt =

        foreach ($listWaktu_dt as $row) {
            if ($row == null) {
                $waktu_dt[] = 0;
            } else {
                $waktu_dt[] = $row->waktu_dt;
            }
        }
        // dd($waktu_dt);
        $waktu_dt = $useable->convertStringToNumber($waktu_dt);

        $countDtMat  = $downtime->where('kategori', 'material')->count();
        $countDtMsn  = $downtime->where('kategori', 'mesin')->count();
        $countDtPro  = $downtime->where('kategori', 'proses')->count();
        $countDtDies = $downtime->where('kategori', 'dies')->count();
        $countDtPlan = $downtime->where('kategori', 'terplanning')->count();
        $countdt = $countDtMat + $countDtMsn + $countDtPro + $countDtDies + $countDtPlan;
        // dd($countdt);
        $sumDtMat = 0;
        for ($i = 0; $i <=  $countDtMat - 1; $i++) {
            $sumDtMat += $waktu_dt[$i];
        }

        $sumDtMsn = 0;
        for ($i = $countDtMat; $i <=  ($countDtMat +  $countDtMsn) - 1; $i++) {
            $sumDtMsn += $waktu_dt[$i];
        }

        $sumDtPro = 0;
        for ($i = $countDtMat +  $countDtMsn; $i <=  ($countDtMat +  $countDtMsn + $countDtPro) - 1; $i++) {
            $sumDtPro += $waktu_dt[$i];
        }

        $sumDtDies = 0;
        for ($i = $countDtMat +  $countDtMsn + $countDtPro; $i <=  ($countDtMat +  $countDtMsn + $countDtPro + $countDtDies) - 1; $i++) {
            $sumDtDies += $waktu_dt[$i];
        }

        $sumDtPlan = 0;
        for ($i = $countDtMat +  $countDtMsn + $countDtPro + $countDtDies; $i <=  ($countDtMat +  $countDtMsn + $countDtPro + $countDtDies + $countDtPlan) - 1; $i++) {
            $sumDtPlan += $waktu_dt[$i];
        }

        $nrp1 = $idCasting->nrp1 . ' |';
        $nrp2 = $idCasting->nrp2 . ' |';
        $nrp3 = $idCasting->nrp3 . ' |';
        $nrp4 = $idCasting->nrp4 . ' |';
        $nrp5 = $idCasting->nrp5 . ' |';
        $nrp6 = $idCasting->nrp6 . ' |';

        $nrp = $nrp1;

        $namaPart = $idCasting->mesincasting->nama_part;

        //Define Mesin Casting untuk penggunaan Ajax
        $range_hitung = MesinCasting::where('mc', '<=',  $idCasting->id_mesincasting)->get();
        $mcfordata = $range_hitung->count();
        $jumlahReject = $reject->count();
        // dd($jumlahReject);
        return view(
            'lhp.lhp-casting',
            compact('idCasting', 'title', 'shift', 'date', 'mesin', 'id', 'mc', 'nrp', 'nrp1', 'nrp2', 'nrp3', 'nrp4', 'nrp5', 'nrp6', 'mcfordata', 'namaPart', 'reject', 'rejectforView', 'jumlahReject', 'downtime', 'waktu_dt', 'countDtMat', 'countDtMsn', 'countDtDies', 'countDtPro', 'countDtPlan', 'countdt', 'sumDtMat', 'sumDtMsn', 'sumDtPro', 'sumDtDies', 'sumDtPlan')
        );
    }

    public function totalReject(Usablecontroller $usable, $id_lhp)
    {
        $reject = LhpCastingRaw::where('id_lhp', $id_lhp);
        $total_reject = $reject->selectRaw('COUNT(id_ng) as total_reject')->get();
        $data = array();
        $data[] = $total_reject[0]->total_reject;
        $rejectList = collect($usable->RejectCastingWithoutStrip());


        $floor = 1;
        $ceiling = 72;
        for ($i = 1; $i <= $rejectList->count(); $i++) {
            $data[$i] =  LhpCastingRaw::where('id_lhp', $id_lhp)
                ->whereBetween('id_ng', [$floor, $ceiling])
                ->count();
            $floor = $floor + 72;
            $ceiling =  $ceiling + 72;
        }
        // $header = [1, 2, 4, 5];
        // dd($data);
        return response()->json($data);
    }



    public function jsonDowntime(Usablecontroller $usable, $id_lhp)
    {
        $downtime = Downtime::where('casting', 1)->get();
        $arrayDt =  DB::table('downtime')->select('id')->orderByRaw("CASE
        WHEN Kategori = 'Material' THEN 1
        WHEN Kategori = 'Mesin' THEN 2
        WHEN Kategori = 'Dies' THEN 3
        WHEN Kategori = 'Proses' THEN 4
        WHEN Kategori = 'Terplanning' THEN 5
            END")->get();
        // dd($arrayDt);
        foreach ($arrayDt as $row) {
            $listIdDt[] = $row->id;
        }
        // dd($listDt);
        foreach ($listIdDt as $row) {
            // $waktu_dt[] =  collect(DB::select('SELECT SUM(waktu_dt) AS Total_waktu FROM lhp_casting_raw WHERE id_lhp = ? AND id_dt = ?', [$id, $row]))->first()->Total_waktu;
            $listWaktu_dt[] =  LhpCastingRaw::where('id_lhp', $id_lhp)->where('id_dt', $row)->select('waktu_dt')->orderBy('updated_at', 'desc')->first();
        }

        // $waktu_dt =

        foreach ($listWaktu_dt as $row) {
            if ($row == null) {
                $waktu_dt[] = 0;
            } else {
                $waktu_dt[] = $row->waktu_dt;
            }
        }

        $countDtMat =  $downtime->where('kategori', 'material')->count();
        $countDtMsn = $downtime->where('kategori', 'mesin')->count();
        $countDtPro = $downtime->where('kategori', 'proses')->count();
        $countDtDies = $downtime->where('kategori', 'dies')->count();
        $countDtPlan = $downtime->where('kategori', 'terplanning')->count();

        $sumDtMat = 0;
        for ($i = 0; $i <=  $countDtMat - 1; $i++) {
            $sumDtMat += $waktu_dt[$i];
        }

        $sumDtMsn = 0;
        for ($i = $countDtMat; $i <=  ($countDtMat +  $countDtMsn) - 1; $i++) {
            $sumDtMsn += $waktu_dt[$i];
        }

        $sumDtPro = 0;
        for ($i = $countDtMat +  $countDtMsn; $i <=  ($countDtMat +  $countDtMsn + $countDtPro) - 1; $i++) {
            $sumDtPro += $waktu_dt[$i];
        }

        $sumDtDies = 0;
        for ($i = $countDtMat +  $countDtMsn + $countDtPro; $i <=  ($countDtMat +  $countDtMsn + $countDtPro + $countDtDies) - 1; $i++) {
            $sumDtDies += $waktu_dt[$i];
        }

        $sumDtPlan = 0;
        for ($i = $countDtMat +  $countDtMsn + $countDtPro + $countDtDies; $i <=  ($countDtMat +  $countDtMsn + $countDtPro + $countDtDies + $countDtPlan) - 1; $i++) {
            $sumDtPlan += $waktu_dt[$i];
        }

        $data[] = $sumDtMat;
        $data[] = $sumDtMsn;
        $data[] = $sumDtPro;
        $data[] = $sumDtDies;
        $data[] = $sumDtPlan;
        foreach ($waktu_dt as $row) {
            $data[] = $row;
        }

        $data = $usable->convertNullToZero($data);

        $data = $usable->convertStringToNumber($data);
        // {{ Notes }} // 
        //-- Untuk baris 0 - 4 pada variabel data berisi : //
        // [0] = Total downtime Material    // 
        // [1] = Total downtime Mesin       //
        // [2] = Total downtime Proses      //
        // [3] = Total downtime Dies        //
        // [4] = Total downtime Terplanning //
        //-- Untuk baris 5- seterusnya pada variabel data berisi waktu downtime per jenis downtime --//

        // dd($data);
        return response()->json($data, 200);
    }

    public function saveDowntimeCasting(UsableController $useable, $id, $dtName, $minute)
    {
        $newDtName = str_replace('-', ' ', $dtName);
        $downtime = Downtime::where('nama_downtime', $newDtName)->pluck('id');

        $dt = (int)$downtime->first();
        $id_lhp = intval($id);

        LhpCastingRaw::create([
            'id_lhp' =>  $id_lhp,
            'id_dt' => $dt,
            'waktu_dt' => $minute
        ]);
        $idCasting = LhpCasting::where('id', $id)->first();
        // dd($idCasting->id_mesincasting);
        return redirect("/lhp-casting/$idCasting->id_mesincasting/$idCasting->id")->with('behasilditambahkan', 'behasilditambahkan');
    }
}
