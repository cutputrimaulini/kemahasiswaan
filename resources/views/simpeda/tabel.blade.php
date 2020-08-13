@extends('layouts.index')
@section('content')
<div class="container-fluid mt-2">
    <div class="col-12 ">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0">
                                Surat Keterangan Aktif Kuliah Yang Pernah Diajukan Oleh Mahasiswa
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                            <div class="table-responsive py-4">
                                <table class="table table-flush" id="datatable-basic">
                                    <thead class="thead-light">
                                        <tr role="row">
                                            <th>Tanggal Upload</th>
                                            <th>Program Studi</th>
                                            <th>Nomor Surat</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($simpeda as $simpeda)
                                        <tr>
                                            <td>{{ $simpeda->updated_at->toDateString() }}</td>
                                            <td>{{ $simpeda->prodi_id }}</td>
                                            <td>{{ $simpeda->nomor }}</td>
                                            <td>{{ $simpeda->nim }}</td>
                                            <td>{{ $simpeda->nama }}</td>
                                            <td>{{ $simpeda->status }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection