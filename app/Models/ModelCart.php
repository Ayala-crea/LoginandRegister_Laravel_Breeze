<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCart extends Model
{
    use HasFactory;
    protected $table = 'report_cart';
    protected $fillable = [
        "produk_id",
        "quantity",
        "total_price"
    ];
}
