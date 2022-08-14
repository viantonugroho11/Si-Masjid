@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Data Kas Keluar</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample"  action="{{ route('pengeluaran.update',$pengeluarans->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')


                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Pengeluaran</label>
                    <select name="jenis_pengeluaran" class="form-control" id="exampleFormControlSelect2">
                        @if ($pengeluarans->jenis_pengeluaran == "Biaya Operasional")
                        <option>Biaya Operasional</option>
                        <option>Pembangunan dan Renovasi</option>
                        @else
                        <option>Pembangunan dan Renovasi</option>
                        <option>Biaya Operasional</option>
                        @endif
                    </select>
                    @error('jenis_pengeluaran')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Jumlah Pengeluaran</label>
                    <input name="jumlah_pengeluaran" class="form-control" id="exampleInputEmail3" value="{{ old('jumlah_pengeluaran', $pengeluarans->jumlah_pengeluaran) }}" placeholder="Masukkan Nama Pengeluaran">
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
                    <textarea name="deskripsi_pengeluaran" class="form-control" id="exampleTextarea1" rows="4">{{ old('deskripsi_pengeluaran', $pengeluarans->deskripsi_pengeluaran) }}</textarea>
                    @error('deskripsi_pengeluaran')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div>
                    <img src="{{ Storage::url('public/bukti_pengeluaran/').$pengeluarans->bukti_pengeluaran }}" class="rounded" style="width: 150px">
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
                  <button type="submit" class="btn btn-primary mr-2">Ubah & Simpan</button>
                  <button class="btn btn-light">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
