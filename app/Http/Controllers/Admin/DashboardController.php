<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data_absen;
use App\Models\M_minuman_produk;
use App\Models\produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $Dataproduk = produk::all();
        return view('admin/index', compact('Dataproduk'));
    }
    public function halamanMinuman()
    {
        $dataProdukMinuman = M_minuman_produk::all();
        return view('admin/produk_minuman', compact('dataProdukMinuman'));
    }
    public function Absensi()
    {
        $dataAbsen = Data_absen::all();
        return view('admin/data-absensi', compact('dataAbsen'));
    }
}
