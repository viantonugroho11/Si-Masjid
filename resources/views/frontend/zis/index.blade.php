@extends('frontend.master')
@section('contents')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">ZIS (Zakat, Infaq, dan Shadaqah)</h1>
                <a href="/" class="h5 text-white">Beranda</a>
                <i class="fa fa-angle-double-right text-white px-2"></i>
                <a href="/zis" class="h5 text-white">ZIS</a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Program</h5>
                <h1 class="mb-0">Zakat, Infaq dan Shadaqah</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="btn btn-outline-primary py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star me-2"></i>Semua
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".first">
                            <i class="fa fa-heart me-2"></i>Zakat
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".second">
                            <i class="fa fa-heart me-2"></i>Infaq
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".second">
                            <i class="fa fa-heart me-2"></i>Shadaqah
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row g-5 portfolio-container">
                @forelse ($ziskampanyes as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.1s">
                        <div class="position-relative portfolio-box">
                            <div class="portfolio-img rounded overflow-hidden">
                                <img class="img-fluid" width="500" height="600" src="{{ Storage::url('public/foto_kampanye/').$item->foto_kampanye }}" alt="">
                            </div>
                            <a class="portfolio-title border-bottom border-5 border-primary" href="{{route('ziskampanye.show',$item->id)}}">
                                <h6>{{ $item->kategori }}</h6>
                                <h4>{{ $item->nama_kampanye }}</h4>
                                <small class="text-body text-uppercase"><b class="text-primary">Rp</b><h5>{{ $item->harga }}</h5></small>
                            </a>
                            <div class="portfolio-btn">
                                <a href="{{ Storage::url('public/foto_kampanye/').$item->foto_kampanye }}" data-lightbox="portfolio"><i class="fa fa-plus display-1 text-white"></i></a>
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
