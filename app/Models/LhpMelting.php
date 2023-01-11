<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LHPMelting extends Model
{
    use HasFactory;
    protected $table = "lhp_melting";
    protected $guarded = [];
    // public function LhpMeltingRAW()
    // {
    //     return $this->hasMany(LhpMeltingRAW::class);
    // }

    public function LhpMeltingRAW()
    {
        return $this->hasMany(LhpMeltingRAW::class, 'id_lhp', 'id'); //Has to many
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_nrp'); //One to one
    }
}
