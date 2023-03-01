<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Lhp;
use App\Models\henkaten\tb_man;
use App\Models\henkaten\tb_metode;
use App\Models\henkaten\tb_mesin;
use App\Models\henkaten\tb_material;




class HenkatenController extends Controller
{

    // man/
    public function tampilan()
    {
        $sql = tb_man::all();
        $page = "man";
        return view('henkaten/MAN', compact('sql', 'page'), []);
    }

    public function man_edit($No)
    {
        $page = tb_man::find($No);
        return view('henkaten/man_edit', compact(['page']));
        return redirect('/tampilan');
    }

    public function submit_man(Request $request)
    {
        tb_man::create($request->except(['No', 'timestamp']));
        return redirect('/tampilan');
    }

    public function man_update($No, Request $request)
    {
        $page = tb_man::find($No);
        $page->update($request->except(['No', 'timestamp']));
        return redirect('/tampilan');
    }

    public function delete($No)
    {
        $page = tb_man::find($No);
        $page->delete();
        return redirect('/tampilan');
    }
    // man/

    // method

    public function metode()
    {
        $sql = tb_metode::all();
        $page = "metode";
        return view('henkaten/method', compact('sql', 'page'));
    }
    public function method_edit($No)
    {
        $page = tb_metode::find($No);
        return view('henkaten/method_edit', compact(['page']));
        return redirect('/metode');
    }

    public function method_submit(Request $request)
    {
        tb_metode::create($request->except(['No', 'timestamp']));
        return redirect('/metode');
    }

    public function method_update($No, Request $request)
    {
        $page = tb_metode::find($No);
        $page->update($request->except(['No', 'timestamp']));
        return redirect('/metode');
    }

    public function method_delete($No)
    {
        $page = tb_metode::find($No);
        $page->delete();
        return redirect('/metode');
    }
    // method/

    // machine/
    public function mesin()
    {
        $sql = tb_mesin::all();
        $page = "mesin";
        return view('henkaten/machine', compact('sql', 'page'));
    }

    public function mesin_edit($No)
    {
        $page = tb_mesin::find($No);
        
        return view('henkaten/machine_edit', compact(['page']));
        return redirect('/mesin');
    }

    public function mesin_submit(Request $request)
    {
        tb_mesin::create($request->except(['No', 'timestamp']));
        return redirect('/mesin');
    }

    public function mesin_update($No, Request $request)
    {
        $page = tb_mesin::find($No);
        $page->update($request->except(['No', 'timestamp']));
        return redirect('/mesin');
    }

    public function mesin_delete($No)
    {
        $page = tb_mesin::find($No);
        $page->delete();
        return redirect('/mesin');
    }
    // machine/

    // material/
    public function material()
    {
        $sql = tb_material::all();
        $page = "material";
        return view('henkaten/material', compact('sql','page'));
    }

    public function edit($No)
    {
        $page = tb_material::find($No);
        
        return view('henkaten/material_edit', compact(['page']));
        return redirect('/material');
    }

    public function submit(Request $request)
    {
        tb_material::create($request->except(['No', 'timestamp']));
        return redirect('/material');
    }

    public function update($No, Request $request)
    {
        $page = tb_material::find($No);
        $page->update($request->except(['No', 'timestamp']));
        return redirect('/material');
    }

    public function material_delete($No)
    {
        $page = tb_material::find($No);
        $page->delete();
        return redirect('/material');
    }    
    // material/
}
