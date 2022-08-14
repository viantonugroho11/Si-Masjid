@extends('frontend.master')
@section('contents')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn mb-3">Profil</h1>
            <a href="/" class="h5 text-white">Beranda</a>
            <i class="fa fa-angle-double-right text-white px-2"></i>
            <a href="" class="h5 text-white">Profil</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Nama Lengkap</h5>
                    <h1 class="mb-0">{{ Auth::user()->name }}</h1>
                </div>
                <div class="py-4">
                    <p class="clearfix">
                        <span class="float-left">
                          Email
                        </span>
                        <br>
                        <span class="float-right text-muted">
                            {{ Auth::user()->email }}
                        </span>
                      </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Alamat
                      </span>
                      <br>
                      <span class="float-right text-muted">
                        {{ Auth::user()->alamat_lengkap }}
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        Jenis Kelamin
                      </span>
                      <br>
                      <span class="float-right text-muted">
                        {{ Auth::user()->jenis_kelamin }}
                      </span>
                    </p>
                    <p class="clearfix">
                        <span class="float-left">
                          Nomor Telepon
                        </span>
                        <br>
                        <span class="float-right text-muted">
                            {{ Auth::user()->nomor_telepon }}
                        </span>
                      </p>
                  </div>
                  <a class="btn btn-primary btn-block btn-sm mb-2" href="{{route('profilmember.edit',Auth::user()->id)}}">Ubah Profil</a>
                  <a class="btn btn-warning btn-block btn-sm mb-2" href="{{route('editpassword.edit',Auth::user()->id)}}">Ubah Kata Sandi</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ Storage::url('public/foto_member/').Auth::user()->foto_profil }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
