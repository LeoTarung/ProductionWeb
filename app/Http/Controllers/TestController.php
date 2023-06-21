<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestModel;

class TestController extends Controller
{
    public function index(UsableController $useable,$id)
    {
        
       TestModel::where('id', $id)->update([
'test' => 1+2
       ]);
        // return  view('settings.mainSettings', compact('shift', 'date', 'mesin', 'title', 'id', 'nrp', 'forklift', 'mc'));
    }

}
