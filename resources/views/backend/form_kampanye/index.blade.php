@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Kampanye</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('kampanye.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Kategori</label>
                                <select name="kategori" class="form-control" id="exampleFormControlSelect2">
                                    <option>Zakat</option>
                                    <option>Infaq</option>
                                    <option>Shadaqah</option>
                                </select>
                                @error('kategori')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Nama</label>
                                <input name="nama_kampanye" class="form-control" id="exampleInputEmail3"
                                    placeholder="Masukkan Nama Kampanye">
                                @error('nama_kampanye')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto Kampanye</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control @error('foto_kampanye') is-invalid @enderror" name="foto_kampanye">
                                    @error('foto_kampanye')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Deskripsi</label>
                                <textarea name="deskripsi_kampanye" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                @error('deskripsi_kampanye')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Harga</label>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest rupiah)" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="harga">
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Status</label>
                                <select name="status" class="form-control" id="exampleFormControlSelect2">
                                    <option>Aktif</option>
                                    <option>Tidak Aktif</option>
                                </select>
                                @error('status')
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
