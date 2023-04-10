<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db_material extends Model
{
    use HasFactory;

    protected $table = 'db_material';
    protected $fillable = ['N0', 'material_sap', 'initial', 'kode_sap', 'kebutuhan_nrp', 'kebutuhan_daily', 'min_stock', 'max_stock', 'actual_stock '];
}
