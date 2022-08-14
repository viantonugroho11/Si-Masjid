@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Tambah Data Pengurus</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Form Input Data Pengurus -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{ route('datapengurus.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                  <div class="form-group">
                    <label>Foto</label>
                    <div class="input-group col-xs-12">
                      <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Nama Lengkap</label>
                    <input name="nama_lengkap" class="form-control" id="exampleInputEmail3" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Alamat Lengkap</label>
                    <textarea name="alamat_lengkap" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect2">
                      <option>Silahkan Pilih</option>
                      <option>Laki - laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Nomor Telepon</label>
                    <input name="nomor_telepon" class="form-control" id="exampleInputPassword4" placeholder="Masukkan Nomor Telepon">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jabatan Kepengurusan</label>
                    <select name="jabatan_kepengurusan" class="form-control" id="exampleFormControlSelect2">
                      <option>Silahkan Pilih</option>
                      <option>Ketua DKM</option>
                      <option>Sekertaris</option>
                      <option>Bendahara</option>
                      <option>Pengurus</option>
                    </select>
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
