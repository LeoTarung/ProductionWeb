<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatatableQualityModel extends Model
{
    use HasFactory;
    protected $table = 'datatable_quality';
    protected $guarded = [];
}
