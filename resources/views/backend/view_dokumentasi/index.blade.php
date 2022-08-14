@extends('backend.master')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
                @forelse ($dokumentasis as $item)
                <div class="border-bottom text-center pb-4">
                    <img src="null" class="rounded" width="300px"/>
                    <div class="mt-3">
                      <h3>{{ $item->nama_kegiatan }}</h3>
                      <div class="d-flex align-items-center justify-content-center">
                        <h5 class="mb-0 me-2 text-muted">{{ $item->tanggal_pelaksanaan }}</h5>
                      </div>
                    </div>
                  </div>
                  <div class="py-4">
                    <p class="clearfix">
                      <span class="float-left">
                        Deskripsi Kegiatan
                      </span>
                      <span class="float-right text-muted">
                        {{ $item->deskripsi_kegiatan }}
                      </span>
                    </p>
                  </div>
                  <a class="btn btn-primary btn-block btn-sm mb-2" href="/datapengurus">Kembali</a>
                </div>
                @empty
                <div class="alert alert-danger">
                    Data Blog belum Tersedia.
                </div>
                @endforelse

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
