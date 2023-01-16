<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UsableController;
use App\Models\LhpMeltingRAW;
use App\Models\LhpMelting;
use Illuminate\Http\Request;

class MeltingController extends Controller
{
    //==============================[' DASHBOARD PRODUCTION ']==============================//
    public function Dashboard(UsableController $useable)
    {
        $date = $useable->date();
        $data_lhp = LhpMelting::where([['tanggal', '=', $date]])->first();;
        return  view('menu.production.melting.melting', [
            "title" => 'Melting Overview',
            "lhp" => $data_lhp
        ]);
    }

    public function Details_dashboard(UsableController $useable, Request $request, $mesin)
    {
        $title = "Report " . $mesin;
        $date = $useable->date();
        if ($request->start == NULL && $request->end == NULL) {
            $sql = LhpMelting::whereDate('tanggal', '>=',  $date)->whereDate('tanggal', '<=',  $date)->where('mesin', '=', $mesin)->get();
            $mulai =  $date;
            $selesai =  $date;
        } else {
            $mulai = $request->start;
            $selesai = $request->end;
            $sql = LhpMelting::whereDate('tanggal', '>=', $request->start)->whereDate('tanggal', '<=', $request->end)->where('mesin', '=', $mesin)->get();
        }
        return  view('menu.production.melting.details-melting', compact(
            'title',
            'mesin',
            'mulai',
            'selesai',
            'sql',
        ));
    }

    //==============================[' LAPORAN HARIAN PRODUKSI MELTING']==============================//
    public function prep_melting(UsableController $useable)
    {
        $shift = $useable->Shift();
        $date = $useable->date();
        $title = "LHP Melting";
        $lhp = LhpMelting::orderBy('id', 'DESC')->first();
        $id_striko1 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-1'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko2 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-2'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_striko3 = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Striko-3'], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $id_Swift_Asia = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', 'Swift_Asia'], ['shift', '=', $shift]])->first();
        $nrp = 0;
        $mesin = "MELTING";
        return view('lhp.prepare-melting', compact('title', 'nrp', 'mesin', 'lhp', 'shift', 'id_striko1', 'id_striko2', 'id_striko3', 'id_Swift_Asia'));
    }

    public function prep_melting_simpan(UsableController $useable, Request $request)
    {
        $shift = $useable->Shift();
        $date = $useable->date();
        $jam_kerja = $useable->Jam_kerja();
        // dd($request);
        if ($request->nrp != "" && $request->nama != "" && $request->material != "" && $request->mesin != "") {
            $gas = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', $request->mesin]])->orderBy('id', 'DESC')->first();
            if ($gas != null) {
                LhpMelting::create([
                    // 'nama kolom' => 'name di html'
                    'tanggal' => $date,
                    'nrp' => $request->nrp,
                    'nama' => $request->nama,
                    'shift' => $shift,
                    'jam_kerja' => $jam_kerja,
                    'mesin' => $request->mesin,
                    'material' => $request->material,
                    // 'gas_awal' => $gas->gas_akhir,
                    // 'stok_molten' => $gas->stok_molten
                ]);
            } else if ($request->mesin != "") {
                $gas = LhpMelting::where([['mesin', '=', $request->mesin]])->orderBy('id', 'DESC')->first();
                LhpMelting::create([
                    // 'nama kolom' => 'name di html'
                    'tanggal' => $date,
                    'nrp' => $request->nrp,
                    'nama' => $request->nama,
                    'shift' => $shift,
                    'jam_kerja' => $jam_kerja,
                    'mesin' => $request->mesin,
                    'material' => $request->material,
                    // 'gas_awal' => $gas->gas_akhir,
                    // 'stok_molten' => $gas->stok_molten
                ]);
            } else {
                LhpMelting::create([
                    // 'nama kolom' => 'name di html'
                    'tanggal' => $date,
                    'nrp' => $request->nrp,
                    'nama' => $request->nama,
                    'shift' => $shift,
                    'jam_kerja' => $jam_kerja,
                    'mesin' => $request->mesin,
                    'material' => $request->material,
                    'gas_awal' => 0,
                    'stok_molten' => 0
                ]);
            }
            $id = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', $request->mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
            return redirect("/lhp-melting/$request->mesin/$id->id");
        } else {
            return redirect('/lhp-melting')->with('calladmin', 'calladmin');
        }
    }

    public function lhp_melting_raw(UsableController $useable, $mesin, $id)
    {
        $shift = $useable->Shift();
        $date = $useable->date();
        $title = "LHP Melting";
        $ntah = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', $mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();
        $test = LhpMeltingRAW::groupBy(LhpMeltingRAW::raw('hour(jam)'))->where([['tanggal', '=', $date], ['shift', '=', $shift], ['id_lhp', '=', $id],])->selectRaw("tanggal, jam, shift, SUM(ingot) as ingots ,SUM(tapping) as tappings, SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap) as Return_scraps")->get();
        // dd($test);
        if ($ntah != null) {
            $nrp = $ntah->nrp;
            return view('lhp.lhp-Melting', compact('title', 'shift', 'nrp', 'mesin', 'id', 'ntah'));
        } else {
            return redirect('/lhp-melting')->with('preulang', 'preulang');
        }
    }

    public function lhp_melting_raw_simpan(UsableController $useable, Request $request, $mesin, $id)
    {
        $shift = $useable->Shift();
        $date = $useable->date();
        $hour = $useable->hour();
        $jenis = $request->item;
        $value = $request->berat;

        $ntaha = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', $mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();

        if ($ntaha != null) {
            LhpMeltingRAW::create([
                'id_lhp' => $id,
                'tanggal' => $date,
                'jam' => $hour,
                'shift' => $shift,
                'mesin' => $mesin,
                $request->item => $request->berat
            ]);
            $beratA = $ntaha->$jenis;
            $total = $beratA + $value;

            // update data
            LhpMelting::where([['id', '=', $id]])->update([$jenis => $total]);

            $ntah = LhpMelting::where([['tanggal', '=', $date], ['mesin', '=', $mesin], ['shift', '=', $shift]])->orderBy('id', 'DESC')->first();

            // LOGIC PENJUMLAHAN VIA BACKEND IN HERE (mengacu diExcel Program)
            $total_return_rs = $ntah->exgate + $ntah->reject_parts + $ntah->alm_treat + $ntah->basemetal + $ntah->oil_scrap; // C+ D + E + F + F1
            $total_charging_rs = $ntah->ingot + $total_return_rs; // B + G
            $total_charging = $total_charging_rs + $ntah->fluxing; // H + I
            if ($total_charging_rs == 0) {
                $persen_fluxing = 100;
            } else {
                $persen_fluxing = ($ntah->fluxing / $total_charging_rs) * 100; // ( I / H ) x 100%
            }
            if ($total_charging_rs == 0) {
                $persen_ingot = 100;
            } else {
                $persen_ingot = ($ntah->ingot /  $total_charging_rs) * 100; // (B / H ) x 100%
            }
            if ($total_charging_rs == 0) {
                $persen_rs = 100;
            } else {
                $persen_rs = ($total_return_rs /  $total_charging_rs) * 100; // (G / H ) x 100%
            }



            if ($jenis == 'gas_akhir' ||  $jenis == 'fluxing') {
                $stok_molten = $ntah->stok_molten;
            } else if ($jenis == 'tapping') {
                $stok_molten = $ntah->stok_molten - $value;
            } else if ($jenis == 'dross') {
                $stok_molten = $ntah->stok_molten - $value;
            } else {
                $stok_molten = $ntah->stok_molten + $value; // H - ( N + Q ) 
            }



            // $total_loss = $ntah->dross - $ntah->alm_treat; // ( Q - E )
            $total_loss = $ntah->dross; // UPDATED PER 2023
            if ($total_charging == 0) {
                $persen_losdros_material = 100;
            } else {
                $persen_losdros_material = ($ntah->dross / $total_charging) * 100;  //( Q / J ) x 100%
            }
            if ($ntah->dross == 0) {
                $persen_alm_treat = 100;
            } else {
                $persen_alm_treat = ($ntah->alm_treat / $ntah->dross) * 100; // ( E / Q ) x 100%
            }
            if ($total_charging_rs == 0) {
                $machine_performance = 0.00;
            } else {
                $machine_performance = ($ntah->tapping / $total_charging_rs) * 100; // N / H x 100%
            }
            $machine_utilization = ($total_charging_rs / $ntah->supply_capacity) * 100; // ( H / A ) x 100%
            if ($total_charging == 0) {
                $gas_consum = 0.00;
            } else {
                $gas_consum = ($ntah->gas_akhir / $total_charging) * 100; //( W / J ) x 100% 
            }
            $melting_rate = $total_charging_rs / $ntah->jam_kerja; // H / X1 
            LhpMelting::where([['id', '=', $id]])->update([
                'total_return_rs' =>  $total_return_rs,
                'total_charging_rs' =>  $total_charging_rs,
                'total_charging' => $total_charging,
                'persen_fluxing' =>  $persen_fluxing,
                'persen_ingot' =>  $persen_ingot,
                'persen_rs' =>  $persen_rs,
                'stok_molten' =>  $stok_molten,
                'total_loss' =>  $total_loss,
                'persen_losdros_material' =>  $persen_losdros_material,
                'persen_alm_treat' =>  $persen_alm_treat,
                'machine_performance' =>  $machine_performance,
                'machine_utilization' =>  $machine_utilization,
                'gas_consum' =>  $gas_consum,
                'melting_rate' =>  $melting_rate,
            ]);

            return redirect("/lhp-melting")->with('behasilditambahkan', 'behasilditambahkan');
        } else {
            return redirect('/lhp-melting')->with('preulang', 'preulang');
        }
    }

    public function lhp_melting_raw_edit(Request $request, $mesin)
    {
        if ($request->id_raw != null && $request->ingot != null && $request->exgate != null && $request->reject_parts != null && $request->tapping != null && $request->alm_treat != null && $request->fluxing != null && $request->dross != null) {

            // UNTUK UPDATE DARI EDIT
            LhpMeltingRAW::where('id', '=', $request->id_raw)
                ->update([
                    'ingot' => $request->ingot,
                    'exgate' => $request->exgate,
                    'reject_parts' => $request->reject_parts,
                    'tapping' => $request->tapping,
                    'alm_treat' => $request->alm_treat,
                    'fluxing' => $request->fluxing,
                    'dross' => $request->dross
                ]);

            //INI UNTUK AMBIL ID LHP dri LHPRAW
            $rawr = LhpMeltingRAW::where('id', '=', $request->id_raw)->get('id_lhp');

            //JUMLAHKAN SEMUA COLOUMS DI TABEL
            $update = LhpMeltingRAW::where('id_lhp', '=', $rawr[0]->id_lhp)
                ->selectRaw(
                    "id_lhp, 
                    SUM(ingot) as ingots, 
                    SUM(exgate) as exgates, 
                    SUM(reject_parts) as reject_partss, 
                    SUM(alm_treat) as alm_treats, 
                    SUM(basemetal) as basemetals, 
                    SUM(oil_scrap) as oil_scraps, 
                    SUM(fluxing) as fluxings, 
                    SUM(tapping) as tappings, 
                    SUM(dross) as drosss, 
                    SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap) as total_return_rs, 
                    SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) as total_charging_rs, 
                    SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing) as total_charging, 
                    IFNULL(SUM(fluxing) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 100) as persen_fluxing, 
                    IFNULL(SUM(ingot) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 100) as persen_ingot, 
                    IFNULL(SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 100) as persen_rs, 
                    IFNULL(SUM(dross) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing) * 100, 100) as persen_losdros_material, 
                    IFNULL(SUM(alm_treat) / SUM(dross) * 100, 100) as persen_alm_treat, 
                    IFNULL(SUM(tapping) / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) * 100, 100) as machine_performance, 
                    SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot) / 18250 * 100 as machine_utilization, 
                    IFNULL(gas_akhir / SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing) * 100, 100) as gas_consum, 
                    SUM(exgate + reject_parts + alm_treat + basemetal + oil_scrap + ingot + fluxing) - SUM(tapping) as stok_molten"
                )
                ->get();

            //LAKUKAN UPDATE SESUAI RUMUS DARI EXCEL
            LhpMelting::where([['id', '=', $rawr[0]->id_lhp]])->update([
                'ingot' => $update[0]->ingots,
                'exgate' => $update[0]->exgates,
                'reject_parts' => $update[0]->reject_partss,
                'alm_treat' => $update[0]->alm_treats,
                'basemetal' => $update[0]->basemetals,
                'oil_scrap' => $update[0]->oil_scraps,
                'fluxing' => $update[0]->fluxings,
                'tapping' => $update[0]->tappings,
                'dross' => $update[0]->drosss,
                'total_return_rs' => $update[0]->total_return_rs,
                'total_charging_rs' => $update[0]->total_charging_rs,
                'total_charging' => $update[0]->total_charging,
                'persen_fluxing' => $update[0]->persen_fluxing,
                'persen_ingot' => $update[0]->persen_ingot,
                'persen_rs' => $update[0]->persen_rs,
                'stok_molten' => $update[0]->stok_molten,
                'total_loss' => $update[0]->drosss,
                'persen_losdros_material' => $update[0]->persen_losdros_material,
                'persen_alm_treat' => $update[0]->persen_alm_treat,
                'machine_performance' => $update[0]->machine_performance,
                'machine_utilization' => $update[0]->machine_utilization,
                'gas_consum' => $update[0]->gas_consum,
                // 'melting_rate' => $update[0]->melting_rate
            ]);

            // GET LHP LAGI
            $nih = LhpMelting::find($rawr[0]->id_lhp);
            // HITUNG MELTING RATE
            $melting_rate =  $nih->total_charging_rs / $nih->jam_kerja; // H / X1 
            // UPDATE LAGI
            LhpMelting::where([['id', '=', $rawr[0]->id_lhp]])->update(['melting_rate' => $melting_rate]);
            return redirect("/production/melting/" . $mesin)->with('behasiledit', 'behasiledit');
        } else {
            return redirect("/production/melting/" . $mesin)->with('gagal', 'gagal');
        }
    }
    //==============================[' LAPORAN HARIAN PRODUKSI FORKLIFT']==============================//
    public function prep_forklift(UsableController $useable)
    {
        # code... 
        $shift = $useable->Shift();
        $date = $useable->date();
        $title = "LHP Forklift";
        $nrp = 0;
        $mesin = "FORKLIFT";
        // return view('lhp.prepare-forklift', compact('title', 'nrp', 'mesin', 'shift', 'id'));
        return view('lhp.prepare-forklift', compact('title', 'nrp', 'mesin', 'shift'), ["id" => 1]);
    }

    public function lhp_forklift(UsableController $useable)
    {
        # code... 
        $shift = $useable->Shift();
        $date = $useable->date();
        $title = "LHP Forklift";
        $nrp = 0;
        $mesin = "FORKLIFT";
        return view('lhp.lhp-forklift', compact('title', 'nrp', 'mesin', 'shift'), ["id" => 1]);
    }
}
