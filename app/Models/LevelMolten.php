<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelMolten extends Model
{
    use HasFactory;

    protected $table = "level_molten";
    protected $primaryKey = 'mc';
    
}
