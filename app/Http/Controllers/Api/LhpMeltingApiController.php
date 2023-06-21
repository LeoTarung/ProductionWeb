<?php

namespace App\Http\Controllers\Api;

use App\Models\LhpMeltingRaw;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\UsableController;

class LhpMeltingApiController extends Controller
{
    public function striko1(UsableController $useable)
    {
        $shift = $useable->Shift();
        $date = $useable->date();


        $data = LhpMeltingRAW::where([['tanggal', '=', $date], ['mesin', '=', 'STRIKO-1']])->selectRaw("tanggal, jam, shift, SUM(ingot) as ingots, SUM(dross) as drosss, SUM(tapping) as tappings, SUM(exgate) as exgates, SUM(reject_parts) as reject_partss, SUM(alm_treat) as alm_treats, SUM(oil_scrap) as oil_scraps, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap) as total_return_rs, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) as total_charging_rs")->get();
        // dd(1 + null);
        return response()->json($data);
    }

    public function striko2(UsableController $useable)
    {
        $shift = $useable->Shift();
        $date = $useable->date();

        $data = LhpMeltingRAW::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-2']])->selectRaw("tanggal, jam, shift, SUM(ingot) as ingots, SUM(dross) as drosss, SUM(tapping) as tappings, SUM(exgate) as exgates, SUM(reject_parts) as reject_partss, SUM(alm_treat) as alm_treats, SUM(oil_scrap) as oil_scraps, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap) as total_return_rs, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) as total_charging_rs")->get();

        return response()->json($data);
    }
    public function striko3(UsableController $useable)
    {
        $shift = $useable->Shift();
        $date = $useable->date();

        $data = LhpMeltingRAW::where([['tanggal', '=', $date], ['mesin', '=', 'STRIKO-3']])->selectRaw("tanggal, jam, shift, SUM(ingot) as ingots, SUM(dross) as drosss, SUM(tapping) as tappings, SUM(exgate) as exgates, SUM(reject_parts) as reject_partss, SUM(alm_treat) as alm_treats, SUM(oil_scrap) as oil_scraps, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap) as total_return_rs, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) as total_charging_rs")->get();

        return response()->json($data);
    }
    public function swiftAsia(UsableController $useable)
    {
        $shift = $useable->Shift();
        $date = $useable->date();
        $data = LhpMeltingRAW::where([['tanggal', '=', $date], ['mesin', '=', 'Swift_Asia']])->selectRaw("tanggal, jam, shift, SUM(ingot) as ingots, SUM(dross) as drosss, SUM(tapping) as tappings, SUM(exgate) as exgates, SUM(reject_parts) as reject_partss, SUM(alm_treat) as alm_treats, SUM(oil_scrap) as oil_scraps, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap) as total_return_rs, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) as total_charging_rs")->get();

        return response()->json($data);
    }
}
