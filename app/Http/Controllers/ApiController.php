<?php

namespace App\Http\Controllers;

use App\Models\LHPMeltingRaw;

use App\Models\User;

use Illuminate\Http\Request;

class ApiController extends Controller
{

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
}
