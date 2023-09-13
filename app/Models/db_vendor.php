<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db_vendor extends Model
{
    use HasFactory;

    protected $table = 'db_vendor';
    protected $fillable = ['N0', 'nama', 'kode', 'initial'];
}
