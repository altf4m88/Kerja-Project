<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PegawaiImport;
use App\Models\Pegawai;

class AdminController extends Controller
{
    public function admin()
    {
        return view ('admin.dashboard');
    }

    public function datasiswa()
    {
        $siswa=Pegawai::all();
        return view ('admin.datasiswa')->with('siswa', $siswa);
    }

    public function importsiswa(Request $request)
    {
        Excel::import(new PegawaiImport, $request->file('file'));
        return redirect()->back();
    }


    public function inputsiswa()
    {
        return view ('admin.inputsiswa');
    }

    public function profile()
    {
        return view ('admin.profile');
    }

    public function suratpengantar()
    {
        return view ('admin.suratpengantar');
    }

    public function suratpermohonan()
    {
        return view ('admin.suratpermohonan');
    }

    public function suratpermohonanpeserta()
    {
        return view ('admin.suratpermohonanpeserta');
    }

    public function suratpermohonankelompok()
    {
        return view ('admin.suratpermohonankelompok');
    }

    public function rekapdatasiswa()
    {
        return view ('admin.rekapdatasiswa');
    }

    public function rekapdaftarnilai()
    {
        return view ('admin.rekapdaftarnilai');
    }

    public function rekaphasillaporan()
    {
        return view ('admin.rekaphasillaporan');
    }
}