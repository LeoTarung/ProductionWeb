<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LhpFinalInspectionRaw extends Model
{
    use HasFactory;

    protected $table = "lhp_final_insp_raw";
    protected $guarded = [];

    public function lhpFinalInspection()
    {
        return $this->belongsTo(LhpFinalInspection::class, 'id_lhp', 'id'); //One to one
    }

    public function reject()
    {
        return $this->belongsTo(RejectNG::class, 'id_ng', 'id'); //One to one
    }
}
