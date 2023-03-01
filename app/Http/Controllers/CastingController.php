<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\MesinCasting;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use Clockwork\Support\Lumen\Controller;
use App\Http\Controllers\UsableController;
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
            'urgent' => 1,
            'aktual' => 4009,
            // 'aktual' => $range_hitung->total_part,
            'mcfordata' => $mcfordata,
            // 'aktual2'=> 400///
            'target' => 0,
            'persen' => 94,
            'preparation' => 1,
            'prep' => 4,
            'running' => 1,
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

        //{{  Untuk Menyyeleksi Henkaten}}  //
        $mp = null;
        $met = 1;
        $mc = null;
        $mat = null;

        $array = [
            'satu' => $mp,
            'dua' => $met,
            'tiga' => $mc,
            'empat' => $mat,
        ];
        $filtered = collect(Arr::where($array, function ($value, $key) {
            return ($value != null);
        }));

        $hitung = $filtered->count();

        if ($mp  != null) {
            $array['satu']  = "Man Power";
        } elseif ($met != null) {
            $array['dua']  = "Method";
        } elseif ($mc  != null) {
            $array['tiga']  = "Machine";
        } elseif ($mat  != null) {
            $array['empat']  = "Material";
        } else {
        }

        // dd($array['dua']);

        $input = DB::table('lhp_casting')->get();
        return view('menu.production.casting.tvCasting2', compact('input'), [
            'id1' => $id1,
            'id2' => $id2,
            'kaline' => "NM.FR.AH091",
            'kapart' => "PIPE SUB-ASSY WATER BY-PASS 60U020 (FG)",
            'urgent' => 1,
            'urgent2' => 0,
            'aktual' => 4009,
            'aktual2' => 400,
            'target1' => 0,
            'target2' => 0,
            'persen' => 90,
            'persen2' => 94,
            'preparation' => 1,
            'preparation2' => 1,
            'prep' => 4,
            'prep2' => 3,
            'running' => 0,
            'downtime' => 'INSTROCKER ERROR',
            'running2' => 1,
            'downtime2' => 'INSTROCKER ERROR',
            'henkaten' => $hitung,
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
}
