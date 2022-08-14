 @extends('backend.master')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="border-bottom text-center pb-4">
                <img src="{{ Storage::url('public/logo_masjid/').$profilmasjids->logo_masjid }}" alt="profile" class="img-lg rounded-circle mb-3"/>
                <div class="mb-3">
                  <h3>{{ $profilmasjids->nama_masjid }}</h3>
                </div>
                <p class="w-75 mx-auto mb-3">{{ $profilmasjids->alamat_masjid }}</p>
              </div>
              <div class="py-4">
                <p class="clearfix">
                  <span class="float-left">
                    Nomor Telepon
                  </span>
                  <span class="float-right text-muted">
                    {{ $profilmasjids->telepon_masjid }}
                  </span>
                </p>
                <p class="clearfix">
                  <span class="float-left">
                    Email Masjid
                  </span>
                  <span class="float-right text-muted">
                    {{ $profilmasjids->email_masjid }}
                  </span>
                </p>
                <p class="clearfix">
                  <span class="float-left">
                    Instagram
                  </span>
                  <span class="float-right text-muted">
                    {{ $profilmasjids->instagram_masjid }}
                  </span>
                </p>
                <p class="clearfix">
                  <span class="float-left">
                    Facebook
                  </span>
                  <span class="float-right text-muted">
                    {{ $profilmasjids->facebook_masjid }}
                  </span>
                </p>
                <p class="clearfix">
                  <span class="float-left">
                    Youtube
                  </span>
                  <span class="float-right text-muted">
                    {{ $profilmasjids->youtube_masjid }}
                  </span>
                </p>
              </div>
              <a class="btn btn-primary btn-block btn-sm mb-2" href="/profilmasjid">Kembali</a>
            </div>
            <div class="col-lg-8">
              <div class="mt-4 py-2 border-bottom">
                <ul class="nav profile-navbar">
                  <li class="nav-item">
                    <a class="nav-link active">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      Informasi Masjid
                    </a>
                  </li>
                </ul>
              </div>
              <div class="profile-feed">
                <div class="d-flex align-items-start profile-feed-item">
                  <i class="mdi mdi-bookmark"></i>
                  <div class="ms-4">
                    <h6>
                      Sejarah
                    </h6>
                        {!! $profilmasjids->sejarah_masjid !!}
                  </div>
                </div>
                <div class="d-flex align-items-start profile-feed-item">
                  <i class="mdi mdi-bookmark"></i>
                  <div class="ms-4">
                    <h6>
                      Visi
                    </h6>
                        {!! $profilmasjids->visi_masjid !!}
                  </div>
                </div>
                <div class="d-flex align-items-start profile-feed-item">
                  <i class="mdi mdi-bookmark"></i>
                  <div class="ms-4">
                    <h6>
                      Misi
                    </h6>
                        {!! $profilmasjids->misi_masjid !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
