@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Data Dokumentasi</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <!-- Form Input Dokumentasi -->
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Dokumentasi</h4>
            <form class="forms-sample" action="{{ route('dokumentasi.update',$dokumentasis->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Dokumentasi</label>
                    <select name="jenis_dokumentasi" class="form-control" id="exampleFormControlSelect2">
                        @if ($dokumentasis->jenis_dokumentasi == "Pembangunan Masjid")
                        <option>Pembangunan Masjid</option>
                        <option>Kegiatan Masjid</option>
                        <option>Zakat, Infaq dan Shadaqah</option>
                        @elseif ($dokumentasis->jenis_dokumentasi == "Kegiatan Masjid")
                        <option>Kegiatan Masjid</option>
                        <option>Zakat, Infaq dan Shadaqah</option>
                        <option>Pembangunan Masjid</option>
                        @else
                        <option>Zakat, Infaq dan Shadaqah</option>
                        <option>Pembangunan Masjid</option>
                        <option>Kegiatan Masjid</option>
                        @endif
                    </select>
                    @error('jenis_dokumentasi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div>
                    <img src="{{ Storage::url('public/foto_dokumentasi/').$dokumentasis->foto_dokumentasi }}" class="rounded" style="width: 150px">
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
                    <textarea name="deskripsi_foto" class="form-control" id="exampleTextarea1" rows="4" >{{ old('deskripsi_foto', $dokumentasis->deskripsi_foto) }}</textarea>
                    @error('deskripsi_foto')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Tanggal Pelaksanaan</label>
                    <div id="datepicker-popup" class="input-group date datepicker">
                      <input name="tanggal_pelaksanaan" type="text" class="form-control" value="{{ old('tanggal_pelaksanaan', $dokumentasis->tanggal_pelaksanaan) }}">
                      <span class="input-group-addon input-group-append border-left">
                        <span class="ti-calendar input-group-text"></span>
                      </span>
                    </div>
                    @error('tanggal_pelaksanaan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
              <button type="submit" class="btn btn-primary mr-2">Ubah dan Simpan</button>
              <button class="btn btn-light">Batal</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
