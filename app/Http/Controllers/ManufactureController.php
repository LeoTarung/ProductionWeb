<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function index()
    {
        return  view('menu.manufacturingOverview', [
            "title" => 'Manufacturing Overview',
        ]);
    }
}
