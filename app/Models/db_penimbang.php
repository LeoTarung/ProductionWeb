<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db_penimbang extends Model
{
    use HasFactory;

    protected $table = 'db_penimbang';
    protected $fillable = ['nama', 'nrp', 'initial'];
}
