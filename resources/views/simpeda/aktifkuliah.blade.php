@extends('Layouts.index')
@section('content')
<div class="container-fluid mt-4">
<div class="col-lg-14">
        <div class="card-wrapper">
            <!-- Form controls -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">BERTANDA TANGAN SURAT KETERANGAN AKTIF KULIAH</h3>
                </div>
                <!-- Card body -->
                
                <div class="card-body">
                <form action="{{ Route('simpeda.store') }}" method="POST">
                   @csrf
                    <div class="form-group row">
                        <label for="example-text-input"
                            class="col-md-3 col-form-label form-control-label">Jabatan</label>
                        <div class="col-md-8">
                        <input class="form-control" type="text" name="jabatan" value="{{ $data['jabatan'] }}" id="example-text-input"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label form-control-label">Nama</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="{{ $data['nama'] }}" name="nama" id="example-text-input"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-3 col-form-label form-control-label">NRP</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="{{ $data['nrp'] }}" name="nrp" id="example-text-input"
                                required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>

                </div>
            </form>
            </div>

        </div>
    </div>
</div>
@endsection