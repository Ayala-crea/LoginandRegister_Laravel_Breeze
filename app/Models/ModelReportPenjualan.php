<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelReportPenjualan extends Model
{
    use HasFactory;
    protected $table = "report_penjualan";

    protected $fillable = [
        "jumlah_terjual",
        "harga_jual",
        "produk_barang",
        "produk_minuman"  // Jangan lupa tambahkan kunci produk_barang ke fillable jika belum ada
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_barang', 'id');
    }
    public function minuman()
    {
        return $this->belongsTo(M_minuman_produk::class, 'produk_minuman', 'id');
    }
}
