@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Jenis Pemasukan</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('jenis.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail3">Nama Jenis Pemasukan</label>
                                <input name="nama_jenis" class="form-control" id="exampleInputEmail3"
                                    placeholder="Masukkan Nama Jenis Pemasukan">
                                @error('nama_jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <button class="btn btn-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
