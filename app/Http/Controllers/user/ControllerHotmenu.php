<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\produk;
use Illuminate\Http\Request;

class ControllerHotmenu extends Controller
{
    public function index()
    {
        $Dataproduk = produk::take(5)->get();
        return view('user/hotmenu',compact('Dataproduk'));
    }
}
