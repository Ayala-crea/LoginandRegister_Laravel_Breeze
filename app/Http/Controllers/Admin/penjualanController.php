<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelReportPenjualan;
use App\Models\produk;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    public function index()
    {
        // $Dataproduk = produk::find(1);
        // $DataPenjualan = $Dataproduk->produk;

        $DataPenjualan = ModelReportPenjualan::select('report_penjualan.*', 'produk.nama_produk')
            ->join('produk', 'produk.id', '=', 'report_penjualan.produk_barang')
            ->get();
        return view('Admin/penjualan', compact('DataPenjualan'));
    }
    public function AddData()
    {
        return view('Admin/penjualan/form-penjualan');
    }
    public function InputData(Request $request)
    {
        $request->validate([
            'produk_barang' => 'required|nullable', // Memastikan produk_barang adalah array dan memiliki setidaknya satu elemen
            'jumlah_terjual' => 'required',
            'harga_jual' => 'required',
            'produk_minuman' => 'nullable|array', // Memastikan produk_minuman adalah array (bisa kosong)
        ]);

        // Proses penyimpanan data hanya jika validasi berhasil
        $datapenjualan = [
            "produk_barang" => $request->produk_barang,
            "jumlah_terjual" => $request->jumlah_terjual,
            "harga_jual" => $request->harga_jual,
            "produk_minuman" => $request->produk_minuman,
        ];

        ModelReportPenjualan::create($datapenjualan);

        return redirect()->route('Admin.home')->with('success', 'Berhasil Menambahkan data');
    }
    public function edit($id)
    {
        $DataPenjualan = ModelReportPenjualan::findOrFail($id);
        return view('admin/penjualan/form-penjualan', compact('DataPenjualan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'produk_barang' => 'required|nullable',
            'jumlah_terjual' => 'required',
            'harga_jual' => 'required',
            'produk_minuman' => 'nullable|array',
        ]);

        $datapenjualan = [
            "produk_barang" => $request->produk_barang,
            "jumlah_terjual" => $request->jumlah_terjual,
            "harga_jual" => $request->harga_jual,
            "produk_minuman" => $request->produk_minuman,
        ];

        ModelReportPenjualan::where('id', $id)->update($datapenjualan);

        return redirect()->route('Admin.home')->with('success', 'Berhasil Mengedit data');
    }

    public function destroy($id)
    {
        ModelReportPenjualan::destroy($id);

        return redirect()->route('Admin.home')->with('success', 'Berhasil Menghapus data');
    }
}
    