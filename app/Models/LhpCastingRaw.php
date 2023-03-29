<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LhpCastingRaw extends Model
{
    use HasFactory;

    protected $table = "lhp_casting_raw";
    protected $guarded = [];

    public function lhpCasting()
    {
        return $this->belongsTo(LhpCasting::class, 'id_lhp', 'id'); //One to one
    }

    public function reject()
    {
        return $this->belongsTo(RejectNG::class, 'id_ng', 'id'); //One to one
    }
}
