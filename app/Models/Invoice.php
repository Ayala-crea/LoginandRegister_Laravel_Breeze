<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    protected $fillable = [
        "nama_produk",
        "quantity",
        "harga_jual"
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'nama_produk', 'id');
    }
}
