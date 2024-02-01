<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\M_minuman_produk;
use App\Models\ModelReportPenjualan;
use Illuminate\Http\Request;

class controllerMenuMinuman extends Controller
{
    public function index()
    {
        $dataProduk = M_minuman_produk::all();
        return view('user/catalog-minuman', compact('dataProduk'));
    }
public function bookCart()
{
    return view('user.keranjang-minuman');
}
public function addBooktoCart($id)
{
    $DataProduk = M_minuman_produk::findOrFail($id);
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $DataProduk->nama_produk,
            "quantity" => 1,
            "price" => $DataProduk->harga,
            "image" => $DataProduk->image
        ];
    }
    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Book has been added to cart!');
}
public function deleteProduct(Request $request)
{
    if ($request->id) {
        $cart = session()->get('cart');
        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Book successfully deleted.');
    }
}
public function checkout()
{
    $cart = session()->get('cart', []);

    // Loop melalui setiap item dalam keranjang
    foreach ($cart as $id => $details) {
        // Simpan data ke dalam tabel _report_penjualan
        ModelReportPenjualan::create([
            'jumlah_terjual' => $details['quantity'],
            'harga_jual' => $details['price'],
            'produk_minuman' => $id,
        ]);
    }



    // Setelah data disimpan, hapus keranjang
    session()->forget('cart');

    return redirect()->route('bayar.barang.minuman')->with('success', 'Checkout successful. Thank you for your purchase!');
}
public function bayar()
{
    return view('user/pembayaran');
}
public function ourteam()
{
    return view('user/datapenjual');
}
    
}
