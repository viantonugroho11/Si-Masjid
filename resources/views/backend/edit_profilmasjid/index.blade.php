@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Profil Masjid</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Identitas Masjid</h4>
                <form class="forms-sample" action="{{ route('profilmasjid.update',$profilmasjids->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div>
                        <img src="{{ Storage::url('public/logo_masjid/').$profilmasjids->logo_masjid }}" class="rounded" style="width: 150px">
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control @error('logo_masjid') is-invalid @enderror" name="logo_masjid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Nama Masjid</label>
                        <input name="nama_masjid" class="form-control" id="exampleInputEmail3" value="{{ old('nama_masjid', $profilmasjids->nama_masjid) }}">
                        @error('nama_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Alamat Masjid</label>
                        <input name="alamat_masjid" class="form-control" id="exampleInputEmail3" value="{{ old('alamat_masjid', $profilmasjids->alamat_masjid) }}">
                        @error('alamat_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Telepon Masjid</label>
                        <input name="telepon_masjid" class="form-control" id="exampleInputEmail3" value="{{ old('telepon_masjid', $profilmasjids->telepon_masjid) }}">
                        @error('telepon_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email Masjid</label>
                        <input name="email_masjid" class="form-control" id="exampleInputEmail3" value="{{ old('email_masjid', $profilmasjids->email_masjid) }}">
                        @error('email_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Instagram Masjid</label>
                        <input name="instagram_masjid" class="form-control" id="exampleInputEmail3" value="{{ old('instagram_masjid', $profilmasjids->instagram_masjid) }}">
                        @error('instagram_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Facebook Masjid</label>
                        <input name="facebook_masjid" class="form-control" id="exampleInputEmail3" value="{{ old('facebook_masjid', $profilmasjids->facebook_masjid) }}">
                        @error('facebook_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Youtube Masjid</label>
                        <input name="youtube_masjid" class="form-control" id="exampleInputEmail3" value="{{ old('youtube_masjid', $profilmasjids->youtube_masjid) }}">
                        @error('youtube_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Sejarah Masjid</label>
                        <textarea name="sejarah_masjid" class="form-control" id="sejarah" rows="4">{{ old('sejarah_masjid', $profilmasjids->sejarah_masjid) }}</textarea>
                        @error('sejarah_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Visi Masjid</label>
                        <textarea name="visi_masjid" class="form-control" id="visi" rows="4">{{ old('visi_masjid', $profilmasjids->visi_masjid) }}</textarea>
                        @error('visi_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Misi Masjid</label>
                        <textarea name="misi_masjid" class="form-control" id="misi" rows="4">{{ old('misi_masjid', $profilmasjids->misi_masjid) }}</textarea>
                        @error('misi_masjid')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                             @enderror
                    </div>
                  <button type="submit" class="btn btn-primary mr-2">Ubah & Simpan</button>
                  <button class="btn btn-light">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
