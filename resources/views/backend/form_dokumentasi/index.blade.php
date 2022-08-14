@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Tambah Dokumentasi</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample"  action="{{ route('dokumentasi.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Dokumentasi</label>
                    <select name="jenis_dokumentasi" class="form-control" id="exampleFormControlSelect2">
                      <option>Silahkan Pilih</option>
                      <option>Pembangunan Masjid</option>
                      <option>Kegiatan Masjid</option>
                      <option>Zakat, Infaq dan Shadaqah</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Foto Dokumentasi</label>
                    <div class="input-group col-xs-12">
                        <input type="file" class="form-control @error('foto_dokumentasi') is-invalid @enderror" name="foto_dokumentasi">
                        @error('foto_dokumentasi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Deskripsi Foto</label>
                    <textarea name="deskripsi_foto" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Tanggal Pelaksanaan</label>
                    <div id="datepicker-popup" class="input-group date datepicker">
                      <input name="tanggal_pelaksanaan" type="text" class="form-control">
                      <span class="input-group-addon input-group-append border-left">
                        <span class="ti-calendar input-group-text"></span>
                      </span>
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
