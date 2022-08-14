@extends('frontend.master')
@section('contents')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn mb-3">Ubah Kata Sandi</h1>
            <a href="/" class="h5 text-white">Profil</a>
            <i class="fa fa-angle-double-right text-white px-2"></i>
            <a href="" class="h5 text-white">Ubah Kata Sandi</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Profil</h5>
                    <h1 class="fw-bold text-primary text-uppercase">Ubah Kata Sandi</h1>
                </div>
                <form class="forms-sample"  action="{{ route('editpassword.update',$users->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                <div class="py-4">
                    <div class="form-group mb-3">
                        <label for="password_lama">Kata Sandi Lama</label>
                        <input type="password" name="password_lama" class="form-control" id="password_lama" placeholder="Masukkan Kata Sandi Lama">
                        @error('password_lama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Kata Sandi Baru</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi Baru">
                        @error('password')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Masukkan Konfirmasi Kata Sandi">
                        @error('password_confirmation')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <input name="name" value="{{ $users->name }}" hidden>
                    <input name="email" value="{{ $users->email }}" hidden>
                    <input name="alamat_lengkap" value="{{ $users->alamat_lengkap }}" hidden>
                    <input name="nomor_telepon" value="{{ $users->nomor_telepon }}" hidden>
                    <button type="submit" class="btn btn-primary mr-2">Ubah & Simpan</button>
                    <button class="btn btn-light">Batal</button>
                </div>
            </div>
            </form>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/frontend/img/6195699.png') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
