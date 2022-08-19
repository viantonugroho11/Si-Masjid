@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Cetak Laporan Kas Masjid Pertanggal</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tanggal Jum'at</label>
                                <div id="datepicker-popup" class="input-group date datepicker">
                                  <input name="tanggal" type="text" class="form-control">
                                  <span class="input-group-addon input-group-append border-left">
                                    <span class="ti-calendar input-group-text"></span>
                                  </span>
                                </div>
                                @error('tanggal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <a href="" onclick="this.href='/cetakKategori/'+ document.getElementById('kategoriPrint').value + '/' " target="_blank" class="btn btn-primary">Cetak Kategori</a>
                            <a class="btn btn-light" href="/laporanzis">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
