<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\UsableController;

use Illuminate\Http\Request;

class HcgaController extends Controller
{
    public function dashboard()
    {
        # code...
    }

    public function karyawan()
    {
        return  view('menu.hcga.karyawan', [
            "title" => 'HC-GA',
            "users" => User::get()->all(),
        ]);
    }

    public function update_karyawan(Request $request)
    {
        User::where('nrp', $request->nrp)->update([
            'name' =>  $request->name,
            'seksi' =>  $request->seksi,
            'departemen' =>  $request->departemen,
            'divisi' =>  $request->divisi,
            'email' =>  $request->email,
            'status' =>  $request->status,
        ]);
        return redirect('/hrd/karyawan')->with('behasiledit', 'behasiledit');
    }
}
