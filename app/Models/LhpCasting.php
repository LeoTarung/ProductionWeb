<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LhpCasting extends Model
{
    use HasFactory;
    protected $table = "lhp_casting";
    protected $guarded = [];

    public function mesincasting()
    {
        return $this->belongsTo(MesinCasting::class, 'id_mesincasting', 'mc'); //One to one
    }

    public function downtime()
    {
        return $this->belongsTo(Downtime::class, 'status_dt', 'id'); //One to one
    }
}
