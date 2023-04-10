<?php
namespace App\Http\Controllers;

use App\Models\db_material;
use App\Models\db_penimbang;
use App\Models\db_vendor;
use Illuminate\Http\Request;

use App\Models\ingot;

class IngotController extends Controller
{
    public function InputIngot(){
        $sql = '';
        $input = db_material::get();
        $vendor = db_vendor::get();
        return view('InputIngot',compact('sql','input', 'vendor'),[
        ]) ;
    }

    public function LihatIngot(){
        $sql = '';
        $input = db_material::get();
        return view('LihatIngot', compact('sql', 'input'));
    }

    public function PenimbangIngot(){
        $sql = '';
        $input = db_material::get();
        return view('PenimbangIngot', compact('sql', 'input'));
    }

    public function IsiOtomatis(){

        $nrp = db_penimbang::get('nrp');
        $query = db_penimbang::where('nrp', '=', $nrp)->get()->all();

    }
}

?>