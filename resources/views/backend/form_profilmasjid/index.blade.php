@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Profil Masjid</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{ route('profilmasjid.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label>Logo</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control @error('logo_masjid') is-invalid @enderror" name="logo_masjid">
                        </div>
                        @error('logo_masjid')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                     @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Nama Masjid</label>
                        <input name="nama_masjid" class="form-control" id="exampleInputEmail3">
                        @error('nama_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Alamat Masjid</label>
                        <input name="alamat_masjid" class="form-control" id="exampleInputEmail3">
                        @error('alamat_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Telepon Masjid</label>
                        <input name="telepon_masjid" class="form-control" id="exampleInputEmail3">
                        @error('telepon_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email Masjid</label>
                        <input name="email_masjid" class="form-control" id="exampleInputEmail3">
                        @error('email_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Instagram Masjid</label>
                        <input name="instagram_masjid" class="form-control" id="exampleInputEmail3">
                        @error('instagram_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Facebook Masjid</label>
                        <input name="facebook_masjid" class="form-control" id="exampleInputEmail3">
                        @error('facebook_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Youtube Masjid</label>
                        <input name="youtube_masjid" class="form-control" id="exampleInputEmail3">
                        @error('youtube_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Sejarah Masjid</label>
                        <input name="sejarah_masjid" class="form-control" id="exampleInputEmail3" rows="4">
                        @error('sejarah_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Visi Masjid</label>
                        <input name="visi_masjid" class="form-control" id="exampleInputEmail3" rows="4">
                        @error('visi_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Misi Masjid</label>
                        <input name="misi_masjid" class="form-control" id="exampleInputEmail3" rows="4">
                        @error('misi_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                  <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                  <button class="btn btn-light">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
