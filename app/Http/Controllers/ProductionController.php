<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function index()
    {

        return  view('menu.production', [
            "title" => 'Production Overview',
        ]);
    }

    public function melting()
    {
        return  view('menu.production.melting', [
            "page_before" => 'Production Overview',
            "title" => 'Melting Overview',
        ]);
    }
    //
}
