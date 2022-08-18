@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Profil</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample"  action="{{route('profil-admin.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div>
                        <img src="" class="rounded" style="width: 150px">
                    </div>
                    <div class="form-group">
                        <label>Foto Profil</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Nama Lengkap</label>
                        <input name="name" class="form-control" id="exampleInputEmail3" value="{{Auth::user()->name}}">
                        @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input name="email" class="form-control" id="exampleInputEmail3" value="{{Auth::user()->email}}">
                        @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Alamat</label>
                        <input name="alamat_lengkap" class="form-control" id="exampleInputEmail3" value="{{Auth::user()->alamat_lengkap}}">
                        @error('alamat_lengkap')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Jenis Kelamin</label>
                        <input name="jenis_kelamin" class="form-control" id="exampleInputEmail3" value="">
                        @error('jenis_kelamin')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Nomor Telepon</label>
                        <input name="nomor_telepon" class="form-control" id="exampleInputEmail3" value="">
                        @error('nomor_telepon')
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
