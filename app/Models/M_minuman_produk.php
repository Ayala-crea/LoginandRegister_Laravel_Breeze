<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_minuman_produk extends Model
{
    use HasFactory;
    protected $table = "minuman_produk";
    protected $fillable = [
        "nama_produk",
        "image",
        "qty",
        "harga",
        "deskripsi"
    ];

    public function reportPenjualan()
    {
        return $this->hasOne(ModelReportPenjualan::class, 'produk_minuman', 'id');
    }
}
