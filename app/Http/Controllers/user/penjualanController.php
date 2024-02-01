<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ModelReportPenjualan;
use App\Models\produk;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    public function index()
    {
        return view('user/awal');
    }
    public function catalog()
    {
        $DataProduk = produk::all();
        return view('user/index', compact('DataProduk'));
    }
    public function bookCart()
    {
        return view('user.keranjang');
    }
    public function addBooktoCart($id)
    {
        $DataProduk = Produk::findOrFail($id);
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
                'produk_barang' => $id,
            ]);
        }
        // Setelah data disimpan, hapus keranjang
        session()->forget('cart');

        return redirect()->route('bayar.barang.makanan')->with('success', 'Checkout successful. Thank you for your purchase!');
    }
    public function invoice()
    {
        $dataCheckout = ModelReportPenjualan::latest('created_at')->first();

        return view('user/invoice', compact('dataCheckout'));
    }
    public function bayar()
    {
        return view('user/pembayaran');
    }
    public function ourTeam()
    {
        return view('user/datapenjual');
    }
    public function updateCartProductMakanan($id, Request $request)
    {
        $cart = session()->get('cart');

        if ($cart && isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->input('quantity');
            session()->put('cart', $cart);
        }

        return response()->json(['success' => true]);
    }
}
