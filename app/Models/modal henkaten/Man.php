<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Man extends Model
{
    use HasFactory;

    protected $fillable = ['Deskripsi', 'Problem', 'Countermeasure', 'Status', 'Plan', 'Safety', 'Kakotora', 'Job_Setup', 'WI_Proses']; 
    protected $table = 'men';
    protected $primaryKey = 'No';
    public $timestamps = false;
}
