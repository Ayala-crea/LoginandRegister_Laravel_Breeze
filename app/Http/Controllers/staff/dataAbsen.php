<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use App\Models\Data_absen;
use Illuminate\Http\Request;

class dataAbsen extends Controller
{
    public function index()
    {
        return view('staff/index');
    }
    public function SimpanData(Request $request)
    {
        $request->validate([
            'nama_staff' => 'required',
            'tanggal_masuk' => 'required',
            'shift' => 'required',
        ]);

        $dataSimpan = [
            "nama_staff" => $request->nama_staff,
            "tanggal_masuk" => $request->tanggal_masuk,
            "shift" => $request->shift
        ];

        Data_absen::create($dataSimpan);
        return redirect()->back()->with('berhasil absen');
    }
}
