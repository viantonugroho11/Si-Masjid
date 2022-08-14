@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Data Inventaris</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <!-- Form Input Inventaris -->
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Inventaris</h4>
            <form class="forms-sample" action="{{ route('inventaris.update',$inventaris->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

              <div class="form-group">
                <label for="exampleInputEmail3">Nama Barang</label>
                <input name="nama_barang" class="form-control" id="exampleInputEmail3" value="{{ old('nama_barang', $inventaris->nama_barang) }}" placeholder="Masukkan Nama Barang">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">Jenis Barang</label>
                <select name="jenis_barang" class="form-control" id="exampleFormControlSelect2" value="{{ old('jenis_barang', $inventaris->jenis_barang) }}">
                  <option>Silahkan Pilih</option>
                  <option>Pengeras Suara</option>
                  <option>Perlengkapan Shalat</option>
                  <option>Perlengkapan Kebersihan</option>
                  <option>Perlengkapan Lain / Operational</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Kode Barang</label>
                <input name="kode_barang" class="form-control" id="exampleInputEmail3" readonly value="{{ old('jenis_barang', $inventaris->kode_barang) }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Jumlah</label>
                <input name="jumlah" class="form-control" id="exampleInputEmail3" value="{{ old('jumlah', $inventaris->jumlah) }}" placeholder="Masukkan Jumlah">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Satuan</label>
                <input name="satuan" class="form-control" id="exampleInputEmail3" value="{{ old('satuan', $inventaris->satuan) }}" placeholder="Masukkan Satuan">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">Kondisi Barang</label>
                <select name="kondisi_barang" class="form-control" id="exampleFormControlSelect2" value="{{ old('kondisi_barang', $inventaris->kondisi_barang) }}">
                  <option>Silahkan Pilih</option>
                  <option>Baik</option>
                  <option>Rusak</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tanggal Pembelian Barang</label>
                <div id="datepicker-popup" class="input-group date datepicker">
                  <input name="tanggal_pembelian_barang" type="text" class="form-control">
                  <span class="input-group-addon input-group-append border-left">
                    <span class="ti-calendar input-group-text"></span>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Keterangan</label>
                <input name="keterangan" class="form-control" id="exampleInputEmail3" value="{{ old('keterangan', $inventaris->keterangan) }}" placeholder="Masukkan Keterangan">
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
