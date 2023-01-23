<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesinCasting extends Model
{
    use HasFactory;

    protected $table = "mesin_casting";
    protected $primaryKey = 'mc';
}
