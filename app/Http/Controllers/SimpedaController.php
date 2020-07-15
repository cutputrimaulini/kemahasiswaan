<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Simpeda;
use App\SuratAktif;
use PDF;

class SimpedaController extends Controller
{
   

    public function aktifkuliah()
    {
        $surat = SuratAktif::find(1);
        return view('simpeda.aktifkuliah', ['data' => $surat]);

    }

    public function store(Request $request)
    {
        $surat = SuratAktif::find(1);
        if($surat){
            SuratAktif::where('id', 1)->update([
                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'nrp' => $request->nrp
            ]);
        }else{
            SuratAktif::create($request->all());
        }
        return redirect('simpeda');
    }

    public function update(Request $request)
    {
        $simpeda = simpeda::where('id' ,$request->id)->update([
            'nomor' => $request->nomor,
        ]);
        return redirect()->route('simpeda.view', ['id' => $request->id]);

    }

    public function show()
    {   
        $simpeda = simpeda::where('permohonan', 'Surat Keterangan Aktif')->where('status', null)->latest()->get();
        $prodis = Http::get('https://siakad.sitpa.my.id/api/prodi')->json();
        foreach ($simpeda as $rs) {
            $prodiss = simpeda::hydrate($prodis)->where('id', $rs->prodi_id)->first(); 
            $rs->prodi_id = $prodiss->nama_prodi;
        }
        return view('simpeda.show', ['simpeda' => $simpeda]);
    }
    public function showDownloaded()
    {    
        $simpeda = simpeda::where('permohonan', 'Surat Keterangan Aktif')->where('status', 'downloaded')->orderBy('updated_at', 'desc')->get();
        $prodis = Http::get('https://siakad.sitpa.my.id/api/prodi')->json();
        foreach ($simpeda as $rs) {
            $prodiss = simpeda::hydrate($prodis)->where('id', $rs->prodi_id)->first(); 
            $rs->prodi_id = $prodiss->nama_prodi;
        }
        return view('simpeda.tabel', ['simpeda' => $simpeda]);
    }

    public function view($id){
        
        $simpeda = simpeda::find($id);

        $latestNumb = simpeda::where('permohonan', 'Surat Keterangan Aktif')->where('status', 'downloaded')->orderBy('updated_at', 'desc')->get()->first();
        
        // return $simpeda->nim;
        $users = Http::get('https://siakad.sitpa.my.id/api/mahasiswa')->json();
        $prodis = Http::get('https://siakad.sitpa.my.id/api/prodi')->json();


        $user = simpeda::hydrate($users)->where('nim_mhs', $simpeda->nim)->first();
        $prodi = simpeda::hydrate($prodis)->where('id', $simpeda->prodi_id)->first(); 
        $ttd = SuratAktif::find(1);
        if($simpeda->permohonan === "Surat Keterangan Aktif"){
            return view(
                'simpeda.surataktifkuliah', 
                [
                    'simpeda'=>$simpeda,
                    'user'=>$user, 
                    'prodi'=>$prodi,
                    'ttd' => $ttd,
                    'norecent' => $latestNumb->nomor,
                ]
            );
        }else{
            abort(404);
        }
        
    }
    public function downloadPdfAktifKuliah($id){
        $simpeda = simpeda::find($id);
        $users = Http::get('https://siakad.sitpa.my.id/api/mahasiswa')->json();
        $prodis = Http::get('https://siakad.sitpa.my.id/api/prodi')->json();


        $user = simpeda::hydrate($users)->where('nim_mhs', $simpeda->nim)->first();
        $prodi = simpeda::hydrate($prodis)->where('id', $simpeda->prodi_id)->first(); 
        $ttd = SuratAktif::find(1);
        if($simpeda->permohonan === "Surat Keterangan Aktif"){
            $pdf = PDF::loadView(
                'simpeda.pdfaktifkuliah', 
                [
                    'simpeda'=>$simpeda,
                    'user'=>$user, 
                    'prodi'=>$prodi,
                    'ttd' => $ttd,
                ]
            );
            simpeda::find($id)->update([
                'status' => 'downloaded'
            ]);
            return $pdf->download('Surat Aktif Kuliah.pdf');
        }else{
            abort(404);
        }
        return redirect()->route('simpeda.show');
    }

}
