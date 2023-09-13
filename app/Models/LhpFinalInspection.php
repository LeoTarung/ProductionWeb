<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LhpFinalInspection extends Model
{
    use HasFactory;
    protected $table = "lhp_final_insp";
    protected $guarded = [];


    public function part()
    {
        return $this->belongsTo(Part::class,'id_part', 'id'); //One to one
    }
}

