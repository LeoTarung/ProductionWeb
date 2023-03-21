<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\MesinCasting;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use Clockwork\Support\Lumen\Controller;
use App\Http\Controllers\UsableController;
use App\Http\Requests\LhpCastingRequest;
use App\Models\LhpCasting;
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

        $sum = 0;
        for ($i = 1; $i <= RejectNG::count() / 72; $i++) {
            $sum = $sum + 72;
            ${'idReject_' . $i} = RejectNG::where('id', $sum)->first();
            $reject[] = ${'idReject_' . $i}->jenis_reject;
        }

        $reject = array_map(function ($value) {
            return str_replace(' ', '-', $value);
        }, $reject);
        // dd($reject);



        $nrp1 = $idCasting->nrp1 . ' |';
        $nrp2 = $idCasting->nrp2 . ' |';
        $nrp3 = $idCasting->nrp3 . ' |';
        $nrp4 = $idCasting->nrp4 . ' |';
        $nrp5 = $idCasting->nrp5 . ' |';
        $nrp6 = $idCasting->nrp6 . ' |';

        $nrp = $nrp1;

        $namaPart = $idCasting->mesincasting->nama_part;
        // dd($namaPart);
        //Define Mesin Casting untuk penggunaan Ajax
        $range_hitung = MesinCasting::where('mc', '<=',  $idCasting->id_mesincasting)->get();
        $mcfordata = $range_hitung->count();
        return view('lhp.lhp-casting', compact('idCasting', 'title', 'shift', 'date', 'mesin', 'id', 'mc', 'nrp', 'nrp1', 'nrp2', 'nrp3', 'nrp4', 'nrp5', 'nrp6', 'mcfordata', 'namaPart', 'reject'));
    }
}
