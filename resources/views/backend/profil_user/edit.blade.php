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
                        <img src="{{ Storage::url('public/foto_pengurus/').$datapengurus->foto }}" alt="profile" class="img-lg rounded-circle mb-3"/>
                        <div class="mb-3">
                          <h3>{{ $datapengurus->nama_lengkap }}</h3>
                          <div class="d-flex align-items-center justify-content-center">
                            <h5 class="mb-0 me-2 text-muted">{{ $datapengurus->jabatan_kepengurusan }}</h5>
                          </div>
                        </div>
                        <p class="w-75 mx-auto mb-3">{{ $datapengurus->alamat_lengkap }}</p>
                      </div>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Jenis Kelamin
                          </span>
                          <span class="float-right text-muted">
                            {{ $datapengurus->jenis_kelamin }}
                          </span>
                        </p>
                        <p class="clearfix">
                            <span class="float-left">
                              Nomor Telepon
                            </span>
                            <span class="float-right text-muted">
                                {{ $datapengurus->nomor_telepon }}
                            </span>
                          </p>
                      </div>
                      <a class="btn btn-primary btn-block btn-sm mb-2" href="/datapengurus">Kembali</a>
                    </div>
                  </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
