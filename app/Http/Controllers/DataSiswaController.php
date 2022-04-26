<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\models\Pegawai;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataSiswaImport;
use App\Models\Jurusan;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa= DataSiswa::all();
        // $siswa= Pegawai::all();
        $jurusan = Jurusan::all();
        return view ('admin.datasiswa',compact('siswa','jurusan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createsiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataSiswa::updateOrCreate(['id' => $request->id],
        ['nama' => $request->name, 'nis' => $request->nis, 'nisn' => $request->nisn, 'jurusan_id' => $request->jurusan_id]);
        return response()->json();

<<<<<<< HEAD
        // // $request->validate([
        // //     'nama' => 'required',
        // //     'email' => 'required',
        // //     'nis' => 'required',
        // //     'nisn' => 'required',
        // //     'kompetensi_keahlian' => 'required',
        // //     'tempat_lahir' => 'required',
        // //     'tanggal_lahir' => 'required',
        // //     'jenis_kelamin' => 'required',
        // // ]);
        // // Pegawai::create($request->all());
=======
        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'nis' => 'required',
        //     'nisn' => 'required',
        //     'kompetensi_keahlian' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'jenis_kelamin' => 'required',
        // ]);
        // Pegawai::create($request->all());
>>>>>>> f84655f202e9635730c86c924e6fc93eb6417a49

        // return redirect()->route('datasiswa.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(DataSiswa $DataSiswa,$id )
    {
        $data = DataSiswa::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSiswa $DataSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataSiswa $DataSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSiswa $DataSiswa,$id)
    {
        DataSiswa::destroy($id);
        return redirect('/datasiswa')->with('succses', 'Berhasil Dihapus');
    }

    public function importsiswa(Request $request)
    {
        Excel::import(new DataSiswaImport, $request->file('file'));
        return redirect()->back();
    }

    public function downloadFile()
    {
    	$filePath = public_path("template/Template Data Siswa.xlsx");
    	$headers = ['Content-Type: application/xlsx'];
        $fileName = 'Template Data Siswa.xlsx';

        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName, $headers);
        } else {
            echo('File not found.');
        }


    }

    public function downloadFilePDF()
    {
    	$filePath = public_path("pdf/Kata Pengantar PKL.pdf");
    	$headers = ['Content-Type: application/pdf'];
        $fileName = 'Kata Pengantar PKL.pdf';

        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName, $headers);
        } else {
            echo('File not found.');
        }


    }
}
