@extends('Layouts.index')
@section('content')
<div class="container-fluid mt-4">
    <div class="col-14">
        <div class="card-wrapper">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0">Sistem Pelayanan Dokumen Akademik</h3>
                            <p>Surat Keterangan Aktif Kuliah</p>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('simpeda.tabel') }}" class="btn btn-sm btn-primary">Tabel Surat Aktif Kuliah</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Tgl Upload</th>
                                <th>Program Studi</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Permohonan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($simpeda as $index=>$pj)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $pj->created_at}}</td>
                                <td>{{ $pj->prodi_id}}</td>
                                <td>{{ $pj->nim}}</td>
                                <td>{{ $pj->nama}}</td>
                                <td>
                                    <a href="{{ route('simpeda.view', $pj->id) }}"
                                        class="btn btn-primary btn-sm">Lihat</a>
                                </td>

                </div>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
</div>
@endsection