<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LHPMeltingRaw extends Model
{

    use HasFactory;
    protected $table = "lhp_melting_raw";
    protected $guarded = [];

    public function LhpMelting()
    {
        return $this->belongsTo(LHPMelting::class, 'id_lhp', 'id'); //One To Many (Inverse) / Belongs To
        // return $this->belongsTo(LHPMelting::class, 'id'); //One To Many (Inverse) / Belongs To
    }
}
