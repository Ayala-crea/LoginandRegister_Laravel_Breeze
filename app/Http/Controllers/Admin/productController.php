<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\produk;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function TambahData()
    {
        return view('admin/product/form-product');
    }
    public function SimpanData(Request $request)
    {
        $request->validate([
            "nama_produk" => 'required',
            "image" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // validasi untuk file gambar
            "qty" => 'required',
            "harga" => 'required',
            "deskripsi" => 'required',
        ]);

        // Menggunakan metode store untuk menyimpan gambar di dalam folder public/images
        $imagePath = $request->file('image')->store('images', 'public');

        $dataproduk = [
            'nama_produk' => $request->nama_produk,
            'image' => $imagePath, // Menyimpan path atau nama file gambar
            'qty' => $request->qty,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ];

        produk::create($dataproduk);
        return redirect()->route('halaman.utama.user');
    }
}
