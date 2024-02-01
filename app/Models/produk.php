<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = "produk";

    protected $fillable = [
        "nama_produk",
        "image",
        "qty",
        "harga",
        "deskripsi",
    ];

    public function reportPenjualan()
    {
        return $this->hasOne(ModelReportPenjualan::class, 'produk_barang', 'id');
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'nama_produk', 'id');
    } 
}
