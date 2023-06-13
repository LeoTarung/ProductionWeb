<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partstoModel extends Model
{
    use HasFactory;

    public function a()
    {
        return $this->belongsTo(mpstoModel::class, 'counter_id', 'id'); //One to one
    } 

    public function b()
    {
        return $this->belongsTo(mpstoModel::class, 'verificator_id', 'id'); //One to one
    } 
}
