<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_absen extends Model
{
    use HasFactory;
    protected $table = "_data__absen";
    protected $fillable = [
        'nama_staff',
        'tanggal_masuk',
        'shift'
    ];
}
