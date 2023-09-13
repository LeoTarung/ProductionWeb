<?php

namespace App\Http\Controllers;

use App\Models\LhpCastingRaw;
use App\Models\LHPMeltingRaw;
use App\Models\MesinCasting;
use App\Models\User;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function dtkyrwall()
    {
        $user = User::get()->all();
        if ($user != null) {
            $exuser = $user;
        } else {
            $exuser = ["NULLAH"];
        }
        return $exuser;
    }

    public function dtkyrw($nrp)
    {
        $user = User::where('nrp', '=', $nrp)->get()->all();
        if ($user != null) {
            $exuser = $user;
        } else {
            $exuser = ["NULLAH"];
        }
        return $exuser;
    }

    public function hourly_lhpmelting($id)
    {
        $hourly = LHPMeltingRaw::where('id_lhp', '=', $id)->get()->all();
        if ($hourly != null) {
            $exhourly = $hourly;
        } else {
            $exhourly = ["NULLAH"];
        }
        
        return $exhourly;
    }

    public function hourly_edit($id)
    {
        $hourly = LHPMeltingRaw::where('id', '=', $id)->get();
        if ($hourly != null) {
            $exhourly = $hourly;
        } else {
            $exhourly = ["NULLAH"];
        }
        return $exhourly;
    }

    public function showmc($mc)
    {
        $nama_part = MesinCasting::where('mc', '=', $mc)->get()->all();
        if ($nama_part != null) {
            $exuser = $nama_part;
        } else {
            $nama_part = ["NULLAH"];
        }
        return $nama_part;
    }

    // public function totalReject(Usablecontroller $usable, $id_lhp)
    // {
    //     $reject = LhpCastingRaw::where('id_lhp', $id_lhp);
    //     $total_reject = $reject->selectRaw('COUNT(id_ng) as total_reject')->get();
    //     $data = array();
    //     $data[] = $total_reject[0]->total_reject;
    //     $rejectList = collect($usable->RejectCastingWithoutStrip());


    //     $floor = 1;
    //     $ceiling = 72;
    //     for ($i = 1; $i <= $rejectList->count(); $i++) {
    //         $data[$i] =  LhpCastingRaw::where('id_lhp', $id_lhp)
    //             ->whereBetween('id_ng', [$floor, $ceiling])
    //             ->count();
    //         $floor = $floor + 72;
    //         $ceiling =  $ceiling + 72;
    //     }
    //     // dd($data);
    //     return response()->json($data);
    // }
}
