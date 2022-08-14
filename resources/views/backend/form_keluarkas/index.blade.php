@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Tambah Data Kas Keluar</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{ route('pengeluaran.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Pengeluaran</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="jenis_pengeluaran">
                      <option>Biaya Operasional</option>
                      <option>Pembangunan dan Renovasi</option>
                    </select>
                    @error('jenis_pengeluaran')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Jumlah Pengeluaran</label>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest rupiah)" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="jumlah_pengeluaran">
                    @error('jumlah_pengeluaran')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Tanggal Pengeluaran</label>
                    <div id="datepicker-popup" class="input-group date datepicker">
                      <input name="tanggal_pengeluaran" type="text" class="form-control">
                      <span class="input-group-addon input-group-append border-left">
                        <span class="ti-calendar input-group-text"></span>
                      </span>
                    </div>
                    @error('tanggal_pengeluaran')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Deskripsi Pengeluaran</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="deskripsi_pengeluaran"></textarea>
                    @error('deskripsi_pengeluaran')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Bukti Pengeluaran / Pembelian</label>
                    <div class="input-group col-xs-12">
                        <input type="file" class="form-control @error('bukti_pengeluaran') is-invalid @enderror" name="bukti_pengeluaran">
                        @error('bukti_pengeluaran')
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
