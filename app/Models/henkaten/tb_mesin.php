<?php

namespace App\Models\henkaten;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_mesin extends Model
{
    use HasFactory;

    protected $fillable = ['Deskripsi', 'Problem', 'Countermeasure', 'Status', 'Plan', 'Safety', 'Kakotora', 'Trial_NS', 'CP_CPK']; 
    protected $table = 'tb_mesin';
    protected $primaryKey = 'No';
    public $timestamps = false;
}
