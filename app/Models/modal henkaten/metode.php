<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metode extends Model
{
    use HasFactory;

    protected $fillable = ['Deskripsi', 'Problem', 'Countermeasure', 'Status', 'Plan', 'Safety', 'Cycle_Time', 'Job_Setup', 'Verifikasi_Proses']; 
    protected $table = 'metodes';
    protected $primaryKey = 'No';
    public $timestamps = false;
}
