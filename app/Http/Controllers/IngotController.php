<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ingot;

class IngotController extends Controller
{
    public function Ingot(){
        $stock = '';
        return view('Ingot',compact('stock'),[
        ]) ;
    }
}
?>