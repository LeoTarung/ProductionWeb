<?php

namespace App\Models\henkaten;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_man extends Model
{
    use HasFactory;

    protected $fillable = ['Deskripsi', 'Problem', 'Countermeasure', 'Status', 'Plan', 'Safety', 'Kakotora', 'Job_Setup', 'WI_Proses']; 
    protected $table = 'tb_man';
    protected $primaryKey = 'No';
    public $timestamps = false;
}
