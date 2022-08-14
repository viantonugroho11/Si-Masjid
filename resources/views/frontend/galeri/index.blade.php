@extends('frontend.master')
@section('contents')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">Galeri</h1>
                <a href="" class="h5 text-white">Beranda</a>
                <i class="fa fa-angle-double-right text-white px-2"></i>
                <a href="" class="h5 text-white">Galeri</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Galeri</h5>
                <h1 class="mb-0">Dokumentasi Kegiatan</h1>
            </div>
            <div class="row g-5">
                @forelse ($galeris as $item)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ Storage::url('public/foto_dokumentasi/').$item->foto_dokumentasi }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{ $item->jenis_dokumentasi }}</h4>
                            <h5>{{ $item->tanggal_pelaksanaan }}</h5>
                            <p class="text-uppercase m-0">{{ $item->deskripsi_foto }}</p>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-danger">
                        Data Blog belum Tersedia.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
