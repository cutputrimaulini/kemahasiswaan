@extends('Layouts.index')
@section('content')
<style>
    @media print {
        body * {
            visibility: hidden;
        }
        #printArea * {
            visibility: visible;
            
        }
        #printArea {
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Nomor Surat</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Nomor Surat Terakhir : {{ $norecent }}
            <form action="{{route ('simpeda.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $simpeda->id }}">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-5 col-form-label form-control-label">Nomor Surat</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="nomor" id="example-text-input">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
</div>
</div>


<div class="col-12 row my-3">
    <div class="col">
        <button class="btn btn-block btn-warning" data-toggle="modal" data-target="#exampleModal">Edit Nomor Surat</button>
    </div>
    <div class="col">
        {{-- <a class="btn btn-block btn-success" onclick="window.print()" >Print Now</a> --}}
        <a class="btn btn-block btn-success" href="{{ route('simpeda.pdfdownload', $simpeda->id) }}">Download PDF</a>
    </div>
</div>
<!-- SURAT AKTIF KULIAH -->
<div class="col-12" id="printArea" >
    <div class="card">
        <html>

        <head>
            <title>Undangan orang tua</title>
        </head>

        <body>
            <table align="center" cellpadding="5" style="width: 550px;">
                <tbody>
                    <tr>
                        <td colspan="2">
                            <div align="center">
                                <span style="font-family: Verdana; font-size: x-small; text-decoration: underline"><b>SURAT KETERANGAN AKTIF
                                        KULIAH</b></span>
                                <br><span style="font-family: Verdana; font-size: x-small; font-weight: bold;">Nomor: {{ $simpeda->nomor }}</span>
                                <hr />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" height="500" valign="top">
                            <div align="justify">
                                <span style="font-size: x-small;">Saya yang bertanda tangan dibawah ini :</span>
                                <table style="width: 352px;">
                                    <tbody>
                                        <tr>
                                            <td width="120">
                                                <span style="font-size: x-small;">Jabatan</span>
                                            </td>
                                            <td>
                                                <span style="font-size: x-small;">:</span>
                                            </td>
                                                <td style="text-align: start;">
                                                    <span style="font-size: x-small;">{{ $ttd['jabatan'] }}</span>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Nama</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $ttd['nama'] }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">NRP</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $ttd['nrp'] }}</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div align="justify">
                                <br>
                                <span style="font-size: x-small;">Menyatakan bahwa, mahasiswa yang tersebut di bawah ini:	</span>
                                <table border="0" style="width: 352px;">
                                    <tbody>
                                        <tr>
                                            <td width="120"><span style="font-size: x-small;">Nama</span>
                                            </td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $user->nama_mhs }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Nim</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $user->nim_mhs }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Tempat/Tanggal Lahir</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $user->tempat_lahir }}/{{ $user->tanggal_lahir }}</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div align="justify">
                                <br>
                                <span style="font-size: x-small;">Adalah mahasiswa aktif Politeknik Aceh pada : 	</span>
                                <table border="0" style="width: 352px;">
                                    <tbody>
                                        <tr>
                                            <td width="120"><span style="font-size: x-small;">Program Studi</span>
                                            </td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $prodi->nama_prodi }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Tingkat / Semester</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $simpeda->semester }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size: x-small;">Tahun Akademik</span></td>
                                            <td><span style="font-size: x-small;">:</span></td>
                                            <td><span style="font-size: x-small;">{{ $simpeda->tahun }}</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div align="justify">
                                    <br>
                                    <span style="font-size: x-small;">Demikian Surat keterangan ini dibuat untuk
                                        keperluan {{ $simpeda->keperluan }}.</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="right">
                            <div align="center">
                                <span style="font-size: x-small;"> Banda Aceh, {{ $simpeda->created_at->toDateString() }}</span></div>

                            <div align="center">
                                <span style="font-size: x-small;"> Wakil Direktur Bidang Akademik,</span></div>

                            <div align="center">
                                <span style="font-size: x-small;"> Kemahasiswaan & Alumni,</span></div>
                            <br>

                            <br><br>
                            <div align="center">
                                <span style="font-size: x-small;"> ( {{ $ttd['nama'] }} )
                                </span></div>
                            <div align="center">
                                <span style="font-size: x-small;">{{ $ttd['nrp'] }}</span>
                            </div>
                            </br> </br>

                            </div>
   
                        </br>
    
                    </td>
    
                </tr>
    
            </tbody>
    
        </table>
    
    </body>
    </html>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    
    });
</script>
<script>

</script>
@endsection
