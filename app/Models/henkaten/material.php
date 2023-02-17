<?php

namespace App\Models\henkaten;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_material extends Model
{
    use HasFactory;

    protected $fillable = ['Deskripsi', 'Problem', 'Countermeasure', 'Status', 'Plan', 'Job_Setup', 'Trial_NS', 'CP_CPK', 'Trial_Proses']; 
    protected $table = 'materials';
    protected $primaryKey = 'No';
    public $timestamps = false;
}
