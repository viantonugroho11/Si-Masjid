@extends('backend.master')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="border-bottom text-center pb-4">
                        <img src="{{ Storage::url('public/foto_pengurus/').Auth::user()->foto_profil }}" alt="profile" class="img-lg rounded-circle mb-3"/>
                        <div class="mb-3">
                          <h3>{{ Auth::user()->name }}</h3>
                          <div class="d-flex align-items-center justify-content-center">
                            <h5 class="mb-0 me-2 text-muted">{{ Auth::user()->email }}</h5>
                          </div>
                        </div>
                        <p class="w-75 mx-auto mb-3">{{ Auth::user()->alamat_lengkap }}</p>
                      </div>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Jenis Kelamin
                          </span>
                          <span class="float-right text-muted">
                            {{ Auth::user()->jenis_kelamin }}
                          </span>
                          <p class="clearfix">
                            <span class="float-left">
                              Nomor Telepon
                            </span>
                            <span class="float-right text-muted">
                                {{ Auth::user()->nomor_telepon }}
                            </span>
                          </p>
                        </p>
                      </div>
                      <a class="btn btn-primary btn-block btn-sm mb-2" href="/dashboard">Kembali</a>
                    </div>
                  </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
