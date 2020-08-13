<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PengajuanJudul;
// use Storage;


class PengajuanjudulController extends Controller
{
   
    public function store(Request $request)
    {
        PengajuanJudul::create($request->all());
        return redirect()->route('pengajuanjudul.show')->with('status','Pengajuan Judul Proyek Akhir Berhasil Ditambahkan!');
    }

    public function show()
    {
        return view('pengajuanjudul.show');
    }

    public function uploadpa(Request $request)
    {
        $request->validate([
            'pa1' => 'required|mimetypes:application/pdf|max:10000',
        ]);

        //simpan pada folder nim dan dengan nama AbstrakIndonesia_nim
        $request->file('pa1')->storeAs("pengajuanjudul/$request->nim","\judul$request->nim.pdf");
         
        // menghubungka dengan database
        PengajuanJudul::create([
            "nim"=> $request ->nim,
            "pa1"=> "judul_$request->nim.pdf",
        ]);
        // return redirect('yudisium')->with('sukses','Data berhasil disimpan');
    }
}


