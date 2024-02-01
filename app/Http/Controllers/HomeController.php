<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                $DataProduk = produk::all();
                return view('dashboard', compact('DataProduk'));
            } else if ($usertype == 'admin') {
                $Dataproduk = produk::all();
                return view('admin.index', compact('Dataproduk'));
            } 
            else if ($usertype == 'staff') {
                return view('staff.index')->name('home.staff');
            }
            else {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view('post');
    }
}
