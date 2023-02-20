<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\MesinCasting;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use Clockwork\Support\Lumen\Controller;
use App\Http\Controllers\UsableController;

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

     public function tvCasting(UsableController $useable)
    {

        //{{  Untuk Menyyeleksi Henkaten}}  //
        $mp = null;
        $met = 1;
        $mc = null;
        $mat = null;

        $array = ['satu' => $mp ,
                    'dua' => $met ,
                    'tiga' => $mc ,
                    'empat' => $mat ,
        ];
        $filtered = collect(Arr::where($array, function ( $value, $key) {
            return ($value != null);
        }));

        $hitung = $filtered->count();

        if($mp  != null) {
            $array['satu' ]  = "Man Power";
        }
        elseif($met != null){
            $array['dua']  = "Method";
        }
        elseif($mc  != null){
            $array['tiga']  = "Machine";
        }
        elseif($mat  != null){
            $array['empat']  = "Material";
        }
        else {

        }
      
// dd($array['dua']);

        return view('menu.production.casting.tvCasting',[
            'urgent' => 1,
            'aktual' => 49,
            'target' => 5,
            'persen' => 98,
            'preparation'=> 1,
            'prep' => 1,
            // 'warna' => '1b',
            // 'keterangan'=> 0,
            'running' => 1,
            'downtime' => 'INSTROCKER ERROR',
            'henkaten' => $hitung,
            'isi' => "MATERIAL",
            'isi2a' => "MAN POWER",
            'isi2b' => "METHOD",
            'isi3a' => "MAN POWER",
            'isi3b' => "METHOD",
            'isi3c' => "MATERIAL",
            'isi4a' => "MAN POWER",
            'isi4b' => "METHOD",
            'isi4c' => "MACHINE",
            'isi4d' => "MATERIAL"
        ]);
    }

}
