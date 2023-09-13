<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LhpCastingHours extends Model
{
    use HasFactory;

    protected $table = "lhp_casting_hours";
    protected $guarded = [];

    public function lhpCasting()
    {
        return $this->belongsTo(LhpCasting::class, 'id_lhp', 'id'); //One to one
    }

    public function reject()
    {
        return $this->belongsTo(RejectNG::class, 'id_ng', 'id'); //One to one
    }

    public function downtime()
    {
        return $this->belongsTo(Downtime::class, 'id_dt', 'id'); //One to one
    }
}
