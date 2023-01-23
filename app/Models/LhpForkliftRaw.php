<?php

namespace App\Models;

use App\Models\PreForklift;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LhpForkliftRaw extends Model
{
    use HasFactory;
    protected $table = 'lhp_forklift_raw';
    protected $guarded = [];    

    public function Preforklift()
    {
        return $this->belongsTo(PreForklift::class, 'id_lhp', 'id'); //One To Many (Inverse) / Belongs To
    }

    public function LevelMolten()
    {
        return $this->belongsTo(LevelMolten::class, 'no_mc', ''); //One To Many (Inverse) / Belongs To
    }
}
