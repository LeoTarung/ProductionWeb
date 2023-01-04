<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UsableController;
use App\Models\LhpMeltingRAW;
use App\Models\LhpMelting;
use Illuminate\Http\Request;

class MeltingController extends Controller
{
    public function Dashboard()
    {
        return  view('menu.production.melting', [
            "title" => 'Melting Overview',
        ]);
    }

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
                    'gas_awal' => $gas->gas_akhir,
                    'stok_molten' => $gas->stok_molten
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



            if ($jenis == 'gas_akhir' || $jenis == 'dross' || $jenis == 'fluxing') {
                $stok_molten = $ntah->stok_molten;
            } else if ($jenis == 'tapping') {
                $stok_molten = $ntah->stok_molten - $value;
            } else {
                $stok_molten = $ntah->stok_molten + $value; // H - ( N + Q ) 
            }



            $total_loss = $ntah->dross - $ntah->alm_treat; // ( Q - E )
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

            return redirect("/lhp-melting/$mesin/$id");
        } else {
            return redirect('/lhp-melting')->with('preulang', 'preulang');
        }
    }

    public function prep_forklift()
    {
        # code... 
        $shift = $this->Shift();
        $date = $this->date();
        $title = "LHP Forklift";
        $nrp = 0;
        $mesin = "FORKLIFT";
        return view('lhp.prepare-forklift', compact('title', 'nrp', 'mesin', 'shift'));
    }

    public function lhp_forklift()
    {
        # code... 
        $shift = $this->Shift();
        $date = $this->date();
        $title = "LHP Forklift";
        $nrp = 0;
        $mesin = "FORKLIFT";
        return view('lhp.lhp-forklift', compact('title', 'nrp', 'mesin', 'shift'));
    }
}
