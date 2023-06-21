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
use App\Models\LhpCastingHours;
use App\Models\RejectNG;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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

    public function castingTV(UsableController $useable)
    {
        $date = $useable->date();
        $shift = $useable->Shift();
        $mesin = MesinCasting::get()->all();
        $title = "Casting Overview";
        $produksi = 1;
        $urgent = 0;
        $runing = 0;
        $downtime = "TROUBLE CNC";

        return view('menu.production.casting.castingTV', compact('title', 'shift', 'date', 'mesin','produksi','urgent', 'runing', 'downtime'));
   
        // $production = 2;
        // $preparation = 1;
        // $mecin = "MC 057";
        // $namaPart = "PIPE SUB-ASSY WATER BY-PASS 60U020 (FG)";
        // $urgent = 0;
        // $aktual = 0;

        // $range_hitung = MesinCasting::where('mc', '<=', $id)->get();
        // $mcfordata = $range_hitung->count();

        // $target = 0;
        // $persen = 90;
        // $henkaten = 0;
        // $henka = 4;
        // $downtime = 'INSTROCKER ERROR';


        // return view('menu.production.casting.tvCasting', 
        // compact('production','preparation','mecin','namaPart','urgent','aktual','range_hitung','mcfordata','target','persen','shift'));
    }

    public function tvCasting(UsableController $useable, $id)
    {
        $production = 2;
        $preparation = 1;
        $mecin = "MC 057";
        $namaPart = "PIPE SUB-ASSY WATER BY-PASS 60U020 (FG)";
        $urgent = 0;
        $aktual = 0;

        $range_hitung = MesinCasting::where('mc', '<=', $id)->get();
        $mcfordata = $range_hitung->count();

        $target = 0;
        $persen = 90;
        $henkaten = 0;
        $henka = 4;
        $downtime = 'INSTROCKER ERROR';
        $isi = 'MATERIAL';
        $isi2a = 'MAN POWER';
        $isi2b = 'METHOD';
        $isi3a = 'MAN POWER';
        $isi3b = 'METHOD';           
        $isi3c = 'MATERIAL';
        $isi4a = 'MAN POWER';
        $isi4b = 'METHOD';            
        $isi4c = 'MACHINE';
        $isi4d = 'MATERIAL';
        $shift = 2;

        return view('menu.production.casting.tvCasting', 
        compact('production','preparation','mecin','namaPart','urgent','aktual','range_hitung','mcfordata','target','persen',
            'henkaten','henka','downtime','isi','isi2a','isi2b','isi3a','isi3b','isi3c','isi4a','isi4b','isi4c','isi4d','shift'));
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
        // $test =  $useable->RejectFinalInspectionWithStrip();
        // dd($test);
        $mesin = "CASTING";
        $title = "LHP Casting";
        $datamc = MesinCasting::where('mc', $mc)->first();
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
        // dd($reject);
        foreach ($listIdDt as $row) {
            // $waktu_dt[] =  collect(DB::select('SELECT SUM(waktu_dt) AS Total_waktu FROM lhp_casting_raw WHERE id_lhp = ? AND id_dt = ?', [$id, $row]))->first()->Total_waktu;
            $listWaktu_dt[] =  LhpCastingHours::where('id_lhp', $id)->where('id_dt', $row)->select('td_0', 'td_1', 'td_2', 'td_3', 'td_4', 'td_5', 'td_6', 'td_7', 'td_8', 'td_9', 'td_10', 'td_11', 'td_12', 'td_13', 'td_14', 'td_15', 'td_16', 'td_17', 'td_18', 'td_19', 'td_20', 'td_21', 'td_22', 'td_23')
                ->orderBy('updated_at', 'desc')
                ->first();
        }

        for ($i = 0; $i < count($listWaktu_dt); $i++) {
            ${'bucket' . $i} = 0;
            for ($j = 0; $j < 24; $j++) {
                // dd($listWaktu_dt[$i]->{'td_' . $j});
                // $tambah = $usable->convertNullToZero($tambah);
                if ($listWaktu_dt[$i] != null) {
                    $tambah = $listWaktu_dt[$i]->{'td_' . $j};
                    $tambah = $tambah ?? 0;
                    ${'bucket' . $i} = ${'bucket' . $i} + $listWaktu_dt[$i]->{'td_' . $j};
                    ${'ket' . $i} = 'ya that not nulll';
                } else {
                    ${'bucket' . $i} = 0;
                }
            }
        }
        $test = 0;
        for ($t = 0; $t < count($listWaktu_dt); $t++) {
            $waktu_dt[] = ${'bucket' . $t};
        }


        $waktu_dt = $useable->convertArrayStringToNumber($waktu_dt);

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
        // dd($datamc);
        return view(
            'lhp.lhp-casting',
            compact('idCasting', 'title', 'shift', 'date', 'mesin', 'id', 'datamc', 'mc', 'nrp', 'nrp1', 'nrp2', 'nrp3', 'nrp4', 'nrp5', 'nrp6', 'mcfordata', 'namaPart', 'reject', 'rejectforView', 'jumlahReject', 'downtime', 'waktu_dt', 'countDtMat', 'countDtMsn', 'countDtDies', 'countDtPro', 'countDtPlan', 'countdt', 'sumDtMat', 'sumDtMsn', 'sumDtPro', 'sumDtDies', 'sumDtPlan')
        );
    }

    public function getTarget($id)
    {
        $idlhp = LhpCasting::where('id', $id)->get();
        $data =  $idlhp->pluck('target');
        // dd($idlhp);
        return response()->json($data);
    }

    public function setTarget($id)
    {
        $idlhp = LhpCasting::where('id', $id)->first();
        $target = $idlhp->target;
        // dd($target);
        $idlhp->update([
            'target' => $target + 1
        ]);
    }

    public function updateTotalProduksi(Usablecontroller $usable, $id)
    {
        $idlhp = LhpCasting::where('id', $id)->first();
        $date = $usable->date();

        $mc = MesinCasting::where('mc', $idlhp->id_mesincasting)->first();
        // dd($mc->total_produksi);

        //---- Notes skalian update total OK  ----//
        $idlhp->update([
            'total_produksi' => $mc->total_produksi,
            'total_ok' => $mc->total_produksi - $idlhp->total_ng
        ]);

        $start_date = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        $end_date = Carbon::createFromFormat('Y-m-d', $date)->endOfDay();


        $idlhpHours = LhpCastingHours::where('id_lhp', $id)
            ->whereBetween('created_at', [$start_date, $end_date])
            ->where('id_ng', null)
            ->where('id_dt', null)
            ->first();


        if ($idlhpHours == null) {
            LhpCastingHours::create([
                'id_lhp' => $id,
            ]);
        } else {
        }
        // dd($idlhpHours);
        switch ($currentTime = date("H:i")) {
                // SHIFT 1
            case $currentTime >= "00:00" && $currentTime < "01:00":
                $idlhpHours->update([
                    'tp_0' => $mc->total_produksi
                ]);
                break;
            case $currentTime >= "01:00" && $currentTime < "02:00":
                $idlhpHours->update([
                    'tp_1' => $mc->total_produksi - $idlhpHours->tp_0
                ]);
                break;
            case $currentTime >= "02:00" && $currentTime < "03:00":
                $idlhpHours->update([
                    'tp_2' => $mc->total_produksi - ($idlhpHours->tp_0 + $idlhpHours->tp_1)
                ]);
                break;
            case $currentTime >= "03:00" && $currentTime < "04:00":
                $idlhpHours->update([
                    'tp_3' => $mc->total_produksi - ($idlhpHours->tp_0 + $idlhpHours->tp_1 + $idlhpHours->tp_2)
                ]);
                break;
            case $currentTime >= "04:00" && $currentTime < "05:00":
                $idlhpHours->update([
                    'tp_4' => $mc->total_produksi - ($idlhpHours->tp_0 + $idlhpHours->tp_1 + $idlhpHours->tp_2 + $idlhpHours->tp_3)
                ]);
                break;
            case $currentTime >= "05:00" && $currentTime < "06:00":
                $idlhpHours->update([
                    'tp_5' => $mc->total_produksi - ($idlhpHours->tp_0 + $idlhpHours->tp_1 + $idlhpHours->tp_2 + $idlhpHours->tp_3 + $idlhpHours->tp_4)
                ]);
                break;
            case $currentTime >= "06:00" && $currentTime < "07:09":
                $idlhpHours->update([
                    'tp_6' => $mc->total_produksi - ($idlhpHours->tp_0 + $idlhpHours->tp_1 + $idlhpHours->tp_2 + $idlhpHours->tp_3 + $idlhpHours->tp_4 + $idlhpHours->tp_5)
                ]);
                break;

                // ---- SHIFT 2 ----//
            case $currentTime >= "07:10" && $currentTime < "08:00":
                $idlhpHours->update([
                    'tp_7' => $mc->total_produksi
                ]);
                break;
            case $currentTime >= "08:00" && $currentTime < "09:00":
                $idlhpHours->update([
                    'tp_8' => $mc->total_produksi - $idlhpHours->tp_7
                ]);
                break;
            case $currentTime >= "09:00" && $currentTime < "10:00":
                $idlhpHours->update([
                    'tp_9' => $mc->total_produksi - ($idlhpHours->tp_7 + $idlhpHours->tp_8)
                ]);
                break;
            case $currentTime >= "10:00" && $currentTime < "11:00":
                $idlhpHours->update([
                    'tp_10' => $mc->total_produksi - ($idlhpHours->tp_7 + $idlhpHours->tp_8 + $idlhpHours->tp_9)
                ]);
                break;
            case $currentTime >= "11:00" && $currentTime < "12:00":
                $idlhpHours->update([
                    'tp_11' => $mc->total_produksi - ($idlhpHours->tp_7 + $idlhpHours->tp_8 + $idlhpHours->tp_9 + $idlhpHours->tp_10)
                ]);
                break;
            case $currentTime >= "12:00" && $currentTime < "13:00":
                $idlhpHours->update([
                    'tp_12' => $mc->total_produksi - ($idlhpHours->tp_7 + $idlhpHours->tp_8 + $idlhpHours->tp_9 + $idlhpHours->tp_10 + $idlhpHours->tp_11)
                ]);
                break;
            case $currentTime >= "13:00" && $currentTime < "14:00":
                $idlhpHours->update([
                    'tp_13' => $mc->total_produksi - ($idlhpHours->tp_7 + $idlhpHours->tp_8 + $idlhpHours->tp_9 + $idlhpHours->tp_10 + $idlhpHours->tp_11 + $idlhpHours->tp_12)
                ]);
                break;
            case $currentTime >= "14:00" && $currentTime < "15:00":
                $idlhpHours->update([
                    'tp_14' => $mc->total_produksi - ($idlhpHours->tp_7 + $idlhpHours->tp_8 + $idlhpHours->tp_9 + $idlhpHours->tp_10 + $idlhpHours->tp_11 + $idlhpHours->tp_12 + $idlhpHours->tp_13)
                ]);
                break;
            case $currentTime >= "15:00" && $currentTime < "16:00":
                $idlhpHours->update([
                    'tp_15' => $mc->total_produksi - ($idlhpHours->tp_7 + $idlhpHours->tp_8 + $idlhpHours->tp_9 + $idlhpHours->tp_10 + $idlhpHours->tp_11 + $idlhpHours->tp_12 + $idlhpHours->tp_13 + $idlhpHours->tp_14)
                ]);
                break;

                // ---- SHIFT 3 ----//
            case $currentTime >= "16:00" && $currentTime < "17:00":
                $idlhpHours->update([
                    'tp_16' => $mc->total_produksi
                ]);
                break;
            case $currentTime >= "17:00" && $currentTime < "18:00":
                $idlhpHours->update([
                    'tp_17' => $mc->total_produksi - $idlhpHours->tp_16
                ]);
                break;
            case $currentTime >= "18:00" && $currentTime < "19:00":
                $idlhpHours->update([
                    'tp_18' => $mc->total_produksi - ($idlhpHours->tp_16 + $idlhpHours->tp_17)
                ]);
                break;
            case $currentTime >= "19:00" && $currentTime < "20:00":
                $idlhpHours->update([
                    'tp_19' => $mc->total_produksi - ($idlhpHours->tp_16 + $idlhpHours->tp_17 + $idlhpHours->tp_18)
                ]);
                break;
            case $currentTime >= "20:00" && $currentTime < "21:00":
                $idlhpHours->update([
                    'tp_20' => $mc->total_produksi - ($idlhpHours->tp_16 + $idlhpHours->tp_17 + $idlhpHours->tp_18 + $idlhpHours->tp_19)
                ]);
                break;
            case $currentTime >= "21:00" && $currentTime < "22:00":
                $idlhpHours->update([
                    'tp_21' => $mc->total_produksi - ($idlhpHours->tp_16 + $idlhpHours->tp_17 + $idlhpHours->tp_18 + $idlhpHours->tp_19 + $idlhpHours->tp_20)
                ]);
                break;
            case $currentTime >= "22:00" && $currentTime < "23:00":
                $idlhpHours->update([
                    'tp_22' => $mc->total_produksi - ($idlhpHours->tp_16 + $idlhpHours->tp_17 + $idlhpHours->tp_18 + $idlhpHours->tp_19 + $idlhpHours->tp_20 + $idlhpHours->tp_21)
                ]);
                break;
            case $currentTime >= "23:00" && $currentTime < "00:00":
                $idlhpHours->update([
                    'tp_23' => $mc->total_produksi - ($idlhpHours->tp_16 + $idlhpHours->tp_17 + $idlhpHours->tp_18 + $idlhpHours->tp_19 + $idlhpHours->tp_20 + $idlhpHours->tp_21 + $idlhpHours->tp_22)
                ]);
                break;
        }
    }


    public function totalReject(Usablecontroller $usable, $id_lhp)
    {
        // $reject = LhpCastingHours::where('id_lhp', $id_lhp)->get();
        // dd($reject->count());
        $reject = LhpCastingHours::where('id_lhp', $id_lhp);
        $total_reject = $reject->selectRaw('sum(tn_0 + tn_1 + tn_2 + tn_3 + tn_4 + tn_5 + tn_6 + tn_7 + tn_8 + tn_9 + tn_10 + tn_11 + tn_12 + tn_13 + tn_14 + tn_15 + tn_16 + tn_17 + tn_18 + tn_19 + tn_20 + tn_21 + tn_22 + tn_23) as total_reject')->first();
        $total_reject_value = intval($total_reject->total_reject);

        $data = array();
        $data[] =   $total_reject_value;
        $rejectList = collect($usable->RejectCastingWithoutStrip());


        $floor = 1;
        $ceiling = 72;
        for ($i = 1; $i <= $rejectList->count(); $i++) {
            ${'forData' . $i} =  LhpCastingHours::where('id_lhp', $id_lhp)
                ->whereBetween('id_ng', [$floor, $ceiling]);
            ${'getReject' . $i} =  ${'forData' . $i}->selectRaw('sum(tn_0 + tn_1 + tn_2 + tn_3 + tn_4 + tn_5 + tn_6 + tn_7 + tn_8 + tn_9 + tn_10 + tn_11 + tn_12 + tn_13 + tn_14 + tn_15 + tn_16 + tn_17 + tn_18 + tn_19 + tn_20 + tn_21 + tn_22 + tn_23) as ng')->first();
            $data[$i] =    intval(${'getReject' . $i}->ng);

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
            $listWaktu_dt[] =  LhpCastingHours::where('id_lhp', $id_lhp)->where('id_dt', $row)->select('td_0', 'td_1', 'td_2', 'td_3', 'td_4', 'td_5', 'td_6', 'td_7', 'td_8', 'td_9', 'td_10', 'td_11', 'td_12', 'td_13', 'td_14', 'td_15', 'td_16', 'td_17', 'td_18', 'td_19', 'td_20', 'td_21', 'td_22', 'td_23')->orderBy('updated_at', 'desc')->first();
        }

        for ($i = 0; $i < count($listWaktu_dt); $i++) {
            ${'bucket' . $i} = 0;
            for ($j = 0; $j < 24; $j++) {
                // dd($listWaktu_dt[$i]->{'td_' . $j});
                // $tambah = $usable->convertNullToZero($tambah);
                if ($listWaktu_dt[$i] != null) {
                    $tambah = $listWaktu_dt[$i]->{'td_' . $j};
                    $tambah = $tambah ?? 0;
                    ${'bucket' . $i} = ${'bucket' . $i} + $listWaktu_dt[$i]->{'td_' . $j};
                    ${'ket' . $i} = 'ya that not nulll';
                } else {
                    ${'bucket' . $i} = 0;
                }
            }
        }

        for ($t = 0; $t < count($listWaktu_dt); $t++) {
            $waktu_dt[] = ${'bucket' . $t};
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

        $data = $usable->convertArrayStringToNumber($data);
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
        // $currentTime = date("H:i");

        $date = $useable->date();
        $start_date = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        $end_date = Carbon::createFromFormat('Y-m-d', $date)->endOfDay();
        $old =  LhpCastingHours::where('id_lhp', $id_lhp)
            ->where('id_dt', $dt)
            ->whereBetween('created_at', [$start_date, $end_date])
            // ->whereBetween('created_at', [$currentTime >= "15:00", $currentTime < "16:00"])
            ->get();
        // $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
        // dd($oldIntime);

        switch ($currentTime = date("H:i")) {
            case $currentTime >= "00:00" && $currentTime < "01:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '00:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '01:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_0' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_0' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_0' => $minute
                    ]);
                }
                break;
            case $currentTime >= "01:00" && $currentTime < "02:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '01:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '02:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_1' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_1' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_1' => $minute
                    ]);
                }
                break;
            case $currentTime >= "02:00" && $currentTime < "03:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '02:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '03:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_2' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_2' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_2' => $minute
                    ]);
                }
                break;
            case $currentTime >= "03:00" && $currentTime < "04:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '03:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '04:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_3' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_3' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_3' => $minute
                    ]);
                }
                break;
            case $currentTime >= "04:00" && $currentTime < "05:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '04:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '05:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_4' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_4' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_4' => $minute
                    ]);
                }
                break;
            case $currentTime >= "05:00" && $currentTime < "06:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '05:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '06:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_5' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_5' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_5' => $minute
                    ]);
                }
                break;
            case $currentTime >= "06:00" && $currentTime < "07:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '06:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '07:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_6' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_6' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_6' => $minute
                    ]);
                }
                break;
            case $currentTime >= "07:00" && $currentTime < "08:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '07:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '08:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_7' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_7' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_7' => $minute
                    ]);
                }
                break;
            case $currentTime >= "08:00" && $currentTime < "09:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '08:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '09:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_8' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_8' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_8' => $minute
                    ]);
                }
                break;
            case $currentTime >= "09:00" && $currentTime < "10:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '09:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '10:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_9' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_9' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_9' => $minute
                    ]);
                }
                break;
            case $currentTime >= "10:00" && $currentTime < "11:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '10:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '11:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_10' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_10' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_10' => $minute
                    ]);
                }
                break;
            case $currentTime >= "11:00" && $currentTime < "12:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '11:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '12:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_11' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_11' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_11' => $minute
                    ]);
                }
                break;
            case $currentTime >= "12:00" && $currentTime < "13:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '12:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '13:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_12' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_12' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_12' => $minute
                    ]);
                }
                break;
            case $currentTime >= "13:00" && $currentTime < "14:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '13:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '14:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_13' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_13' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_13' => $minute
                    ]);
                }
                break;
            case $currentTime >= "14:00" && $currentTime < "15:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '14:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '15:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_14' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_14' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_14' => $minute
                    ]);
                }
                // dd($oldIntime);
                break;
            case $currentTime >= "15:00" && $currentTime < "16:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '15:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '16:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_15' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_15' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_15' => $minute
                    ]);
                }
                // dd($oldIntime);
                break;
            case $currentTime >= "16:00" && $currentTime < "17:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '16:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '17:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_16' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_16' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_16' => $minute
                    ]);
                }
                break;
            case $currentTime >= "17:00" && $currentTime < "18:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '17:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '18:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_17' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_17' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_17' => $minute
                    ]);
                }
                break;
            case $currentTime >= "18:00" && $currentTime < "19:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '18:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '19:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_18' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_18' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_18' => $minute
                    ]);
                }
                break;
            case $currentTime >= "19:00" && $currentTime < "20:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '19:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '20:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_19' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_19' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_19' => $minute
                    ]);
                }
                break;
            case $currentTime >= "20:00" && $currentTime < "21:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '20:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '21:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_20' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_20' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_20' => $minute
                    ]);
                }
                break;
            case $currentTime >= "21:00" && $currentTime < "22:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '21:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '22:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_21' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_21' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_21' => $minute
                    ]);
                }
                break;
            case $currentTime >= "22:00" && $currentTime < "23:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '22:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '23:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_22' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_22' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        'id_dt' => $dt,
                        'td_22' => $minute
                    ]);
                }
                break;
            case $currentTime >= "23:00" && $currentTime < "00:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '23:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '00:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $id_lhp,
                            'id_dt' => $dt,
                            'td_23' => $minute
                        ]);
                    } else {
                        $oldIntime->update([
                            'td_23' => $minute
                        ]);
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $id_lhp,
                        '$id_dt' => $dt,
                        'td_23' => $minute
                    ]);
                }
                break;
        }

        $idCasting = LhpCasting::where('id', $id)->first();
        // dd($idCasting->id_mesincasting);
        return redirect("/lhp-casting/$idCasting->id_mesincasting/$idCasting->id")->with('behasilditambahkan', 'behasilditambahkan');
    }

    public function saveReject(UsableController $useable, $id, $reject, $posisi)
    {
        $date = $useable->date();
        $rejectnew = str_replace("-", " ", $reject);
        $ng = RejectNG::where('jenis_reject', $rejectnew)
            ->where('posisi', $posisi)
            ->pluck('id');
        // dd(RejectNG::where('jenis_reject', $rejectnew)->get());
        $integerNG =  (int) $ng->first();;
        $integerId =  intval($id);
        // dd($integerNG);
        $idCasting = LhpCasting::where('id', $integerId)->first();
        $mc =  $idCasting->id_mesincasting;
        // LhpCastingHours::create([
        //     'id_lhp' => $integerId,
        //     'id_ng' => $integerNG,
        // ]);
        $start_date = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
        $end_date = Carbon::createFromFormat('Y-m-d', $date)->endOfDay();

        $old =  LhpCastingHours::where('id_lhp', $integerId)
            ->where('id_ng', $integerNG)
            ->whereBetween('created_at', [$start_date, $end_date])
            ->get();

        // dd($old);
        switch ($currentTime = date("H:i")) {
            case $currentTime >= "00:00" && $currentTime < "01:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '00:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '01:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_0' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_0');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_0' => 1
                    ]);
                }
                break;
            case $currentTime >= "01:00" && $currentTime < "02:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '01:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '02:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_1' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_1');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_1' => 1
                    ]);
                }
                break;
            case $currentTime >= "02:00" && $currentTime < "03:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '02:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '03:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_2' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_2');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_2' => 1
                    ]);
                }
                break;
            case $currentTime >= "03:00" && $currentTime < "04:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '03:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '04:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_3' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_3');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_3' => 1
                    ]);
                }
                break;
            case $currentTime >= "04:00" && $currentTime < "05:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '04:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '05:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_4' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_4');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_4' => 1
                    ]);
                }
                break;
            case $currentTime >= "05:00" && $currentTime < "06:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '05:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '06:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_5' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_5');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_5' => 1
                    ]);
                }
                break;
            case $currentTime >= "06:00" && $currentTime < "07:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '06:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '07:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_6' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_6');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_6' => 1
                    ]);
                }
                break;
            case $currentTime >= "07:00" && $currentTime < "08:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '07:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '08:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_7' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_7');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_7' => 1
                    ]);
                }
                break;
            case $currentTime >= "08:00" && $currentTime < "09:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '08:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '09:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_8' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_8');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_8' => 1
                    ]);
                }
                break;
            case $currentTime >= "09:00" && $currentTime < "10:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '09:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '10:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_9' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_9');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_9' => 1
                    ]);
                }
                // dd($old->whereBetween('created_at', [$start_time, $end_time])->first()); 
                break;
            case $currentTime >= "10:00" && $currentTime < "11:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '10:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '11:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_10' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_10');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_10' => 1
                    ]);
                }
                break;
            case $currentTime >= "11:00" && $currentTime < "12:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '11:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '12:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_11' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_11');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_11' => 1
                    ]);
                }
                break;
            case $currentTime >= "12:00" && $currentTime < "13:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '12:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '13:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_12' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_12');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_12' => 1
                    ]);
                }
                break;
            case $currentTime >= "13:00" && $currentTime < "14:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '13:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '14:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_13' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_13');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_13' => 1
                    ]);
                }
                break;
            case $currentTime >= "14:00" && $currentTime < "15:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '15:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '16:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_14' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_14');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_14' => 1
                    ]);
                }
                break;
            case $currentTime >= "15:00" && $currentTime < "16:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '15:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '16:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_15' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_15');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_15' => 1
                    ]);
                }
                break;
            case $currentTime >= "16:00" && $currentTime < "17:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '16:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '17:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_16' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_16');
                    }
                    // dd($oldIntime->tn_16);
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_16' => 1
                    ]);
                }
                break;
            case $currentTime >= "17:00" && $currentTime < "18:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '17:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '18:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_17' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_17');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_17' => 1
                    ]);
                }
                break;
            case $currentTime >= "18:00" && $currentTime < "19:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '18:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '19:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_18' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_18');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_18' => 1
                    ]);
                }
                break;
            case $currentTime >= "19:00" && $currentTime < "20:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '19:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '20:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_19' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_19');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_19' => 1
                    ]);
                }
                break;
            case $currentTime >= "20:00" && $currentTime < "21:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '20:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '21:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_20' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_20');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_20' => 1
                    ]);
                }
                break;
            case $currentTime >= "21:00" && $currentTime < "22:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '21:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '22:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_21' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_21');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_21' => 1
                    ]);
                }
                break;
            case $currentTime >= "22:00" && $currentTime < "23:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '22:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '23:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_22' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_22');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_22' => 1
                    ]);
                }
                break;
            case $currentTime >= "23:00" && $currentTime < "00:00":
                if ($old != null) {
                    $start_time = Carbon::createFromFormat('H:i:s', '23:00:00');
                    $end_time = Carbon::createFromFormat('H:i:s', '00:00:00');
                    $oldIntime = $old->whereBetween('created_at', [$start_time, $end_time])->first();
                    if ($oldIntime  == null) {
                        LhpCastingHours::create([
                            'id_lhp' =>  $integerId,
                            'id_ng' => $integerNG,
                            'tn_23' => 1
                        ]);
                    } else {
                        $oldIntime->increment('tn_23');
                    }
                } else {
                    LhpCastingHours::create([
                        'id_lhp' =>  $integerId,
                        'id_ng' => $integerNG,
                        'tn_23' => 1
                    ]);
                }
                break;
        }

        //Update Total NG
        $total_ng = $idCasting->total_ng;

        LhpCasting::where('id', $integerId)->update([
            'total_ng' =>  $total_ng + 1
        ]);

        return redirect("/lhp-casting/$mc/$id")->with('behasilditambahkan', 'behasilditambahkan');
    }

    public function test(UsableController $usable)
    {
        // $reject = $usable->RejectFinalInspectionWithStrip();



        return view('lhp.test');
    }
}
