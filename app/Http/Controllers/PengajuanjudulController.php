<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PengajuanJudul;
// use Storage;


class PengajuanjudulController extends Controller
{
    // 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('uploadfile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PengajuanJudul::create($request->all());
        return redirect()->route('pengajuanjudul.show')->with('status','Pengajuan Judul Proyek Akhir Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pengajuanjudul.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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


