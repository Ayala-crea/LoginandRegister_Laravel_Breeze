<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data_absen;
use Illuminate\Http\Request;

class AbsensiStaffController extends Controller
{
    public function delete($id)
    {
        Data_absen::destroy($id);
        $dataAbsen = Data_absen::all();
        return view('admin/data-absensi', compact('dataAbsen'))->with('berhasil terhapus');
    }
}
