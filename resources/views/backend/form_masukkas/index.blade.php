@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Tambah Data Kas Masuk</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{ route('pemasukan.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Pemasukan</label>
                    <select name="jenis_pemasukan" class="form-control" id="exampleFormControlSelect2">
                            <option>Kas Masjid</option>
                    </select>
                    @error('jenis_pemasukan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Jumlah Pemasukan</label>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest rupiah)" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="jumlah_pemasukan">
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
                        @error('tanggal_pemasukan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                  <div class="form-group">
                    <label for="exampleTextarea1">Deskripsi Pemasukkan</label>
                    <textarea name="deskripsi_pemasukan" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    @error('deskripsi_pemasukan')
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
