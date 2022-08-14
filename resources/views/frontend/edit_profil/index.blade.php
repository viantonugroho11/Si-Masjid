@extends('frontend.master')
@section('contents')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn mb-3">Ubah Profil</h1>
            <a href="/" class="h5 text-white">Profil</a>
            <i class="fa fa-angle-double-right text-white px-2"></i>
            <a href="" class="h5 text-white">Ubah Profil</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Profil</h5>
                    <h1 class="fw-bold text-primary text-uppercase">Ubah Data Diri</h1>
                </div>
                <form class="forms-sample"  action="{{ route('profilmember.update',$users->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                <div class="py-4">
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail3">Nama Lengkap</label>
                        <input name="name" class="form-control" id="exampleInputEmail3"
                        value="{{ old('name', $users->name) }}" placeholder="Masukkan Nama Lengkap">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail3">Email</label>
                        <input name="email" class="form-control" id="exampleInputEmail3"
                        value="{{ old('email', $users->email) }}" placeholder="Masukkan Email">
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail3">Alamat</label>
                        <input name="alamat_lengkap" class="form-control" id="exampleInputEmail3"
                        value="{{ old('alamat_lengkap', $users->alamat_lengkap) }}" placeholder="Masukkan Alamat">
                        @error('alamat_lengkap')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect2">
                            @if ($users->jenis_kelamin == "Laki-laki")
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                            @else
                            <option>Perempuan</option>
                            <option>Laki-laki</option>
                            @endif
                        </select>
                        @error('jenis_kelamin')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleInputEmail3">Nomor Telepon</label>
                        <input name="nomor_telepon" class="form-control" id="exampleInputEmail3"
                        value="{{ old('nomor_telepon', $users->nomor_telepon) }}" placeholder="Masukkan Nomor Telepon">
                        @error('nomor_telepon')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Foto Profil</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil">
                            @error('foto_profil')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary mr-2">Ubah & Simpan</button>
                        <button class="btn btn-light">Batal</button>
                </div>
            </div>
            </form>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ Storage::url('public/foto_member/').$users->foto_profil }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
