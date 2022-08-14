@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Laporan Pertanggung Jawaban Kegiatan</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('laporankegiatan.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail3">Nama Kegiatan</label>
                                <input name="nama_kegiatan" class="form-control" id="exampleInputEmail3"
                                    placeholder="Masukkan Nama Kegiatan">
                                @error('nama_kegiatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tanggal Kegiatan</label>
                                <div id="datepicker-popup" class="input-group date datepicker">
                                  <input name="tanggal_kegiatan" type="text" class="form-control">
                                  <span class="input-group-addon input-group-append border-left">
                                    <span class="ti-calendar input-group-text"></span>
                                  </span>
                                </div>
                                @error('tanggal_kegiatan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>LPJ Kegiatan</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control @error('lpj_kegiatan') is-invalid @enderror" name="lpj_kegiatan">
                                    @error('lpj_kegiatan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
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
