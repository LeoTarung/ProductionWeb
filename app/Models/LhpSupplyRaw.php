<?php

namespace App\Models;

use App\Models\LhpSupply;
use App\Models\MesinCasting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LhpSupplyRaw extends Model
{
    use HasFactory;
    protected $table = 'lhp_supply_raw';
    protected $guarded = [];

    public function LhpSupply()
    {
        return $this->belongsTo(LhpSupply::class, 'id_lhp', 'id'); //One To Many (Inverse) / Belongs To
    }

    public function MesinCasting()
    {
        return $this->belongsTo(MesinCasting::class, 'no_mc', 'mc'); //One To Many (Inverse) / Belongs To
    }
}
