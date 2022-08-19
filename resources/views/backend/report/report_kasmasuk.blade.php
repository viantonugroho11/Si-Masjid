@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Cetak Laporan Masuk Pertanggal</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('report.kasmasuk_pdf')}}" method="GET">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tanggal Awal</label>
                                <div id="datepicker-popup" class="input-group date datepicker">
                                  <input name="tanggal_awal" type="text" class="form-control">
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
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tanggal Akhir</label>
                                <div id="datepicker-popup" class="input-group date datepicker">
                                  <input name="tanggal_akhir" type="text" class="form-control">
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
                            <button type="submit" class="btn btn-primary mr-2">Cetak</button>
                            {{-- <a href="" onclick="this.href='/cetakKategori/'+ document.getElementById('kategoriPrint').value + '/' " target="_blank" class="btn btn-primary">Cetak Kategori</a> --}}
                            {{-- <a class="btn btn-light" href="/laporanzis">Kembali</a> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
