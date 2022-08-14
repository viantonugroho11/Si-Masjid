@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Program Kegiatan</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('program-kegiatan.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail3">Nama Kegiatan</label>
                                <input name="nama_kegiatan" class="form-control" id="exampleInputEmail3"
                                    placeholder="Masukkan Nama Kegiatan">
                                @error('nama_kegiatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Hari Kegiatan</label>
                                <select name="hari_kegiatan" class="form-control" id="exampleFormControlSelect2">
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Ahad</option>
                                </select>
                                @error('hari_kegiatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                <label for="exampleTextarea1">Waktu Kegiatan</label>
                                <input name="waktu_kegiatan" type="text" class="form-control" value="00:00">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                                @error('waktu_kegiatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Deskripsi Kegiatan</label>
                                <textarea name="deskripsi_kegiatan" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                @error('deskripsi_kegiatan')
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
