@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Data Kas Masuk</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample"  action="{{ route('pemasukan.update',$pemasukans->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')


                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Pemasukan</label>
                    <select name="jenis_pemasukan" class="form-control" id="exampleFormControlSelect2">
                        @if ($pemasukans->jenis_pemasukan == "Kas Masjid")
                        <option>Kas Masjid</option>
                        <option></option>
                        @else
                        <option></option>
                        <option>Kas Masjid</option>
                        @endif
                    </select>
                    @error('jenis_pemasukan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Jumlah Pemasukan</label>
                    <input name="jumlah_pemasukan" class="form-control" id="exampleInputEmail3" value="{{ old('jumlah_pemasukan', $pemasukans->jumlah_pemasukan) }}" placeholder="Masukkan Nama Pemasukan">
                    @error('jumlah_pemasukan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Tanggal Pemasukan</label>
                    <div id="datepicker-popup" class="input-group date datepicker">
                      <input name="tanggal_pemasukan" type="text" class="form-control">
                      <span class="input-group-addon input-group-append border-left">
                        <span class="ti-calendar input-group-text"></span>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Deskripsi Pemasukan</label>
                    <textarea name="deskripsi_pemasukan" class="form-control" id="exampleTextarea1" rows="4">{{ old('deskripsi_pemasukan', $pemasukans->deskripsi_pemasukan) }}</textarea>
                    @error('deskripsi_pemasukan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Ubah & Simpan</button>
                  <button class="btn btn-light">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
