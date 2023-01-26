<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MesinCastingResource;
use Illuminate\Http\Request;
use App\Models\MesinCasting;

class MesinCastingController extends Controller
{
    public function index()
    {
        $player = MesinCasting::get();
        return MesinCastingResource::collection($player);
    }
    public function show(MesinCasting $molten)
    {
        $sql =  MesinCasting::where('mc', '=', $molten->mc)->first();

        return new MesinCastingResource($sql);
    }

    public function update(Request $request, MesinCasting $molten)
    {
        $molten->update($request->only(['capacity']));

        $show =  MesinCasting::where('mc', '=', $molten->mc)->get();
        if ($show) {
            return MesinCastingResource::collection($show, 'Success');
        } else {
            return  MesinCastingResource::createApi(400, 'Failed');
        }
    }
}
