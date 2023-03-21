<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LhpCastingRaw extends Model
{
    use HasFactory;

    protected $table = "lhp_casting_raw";
    protected $guarded = [];

    public function lhpCastingRaw()
    {
        return $this->belongsTo(LhpCasting::class, 'id_lhp', 'id'); //One to one
    }
}
