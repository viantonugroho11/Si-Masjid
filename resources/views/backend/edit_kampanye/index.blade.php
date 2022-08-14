@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Kampanye</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample"  action="{{ route('kampanye.update',$kampanyes->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Kategori</label>
                    <select name="kategori" class="form-control" id="exampleFormControlSelect2">
                        @if ($kampanyes->kategori == "Zakat")
                        <option>Zakat</option>
                        <option>Infaq</option>
                        <option>Shadaqah</option>
                        @elseif ($kampanyes->kategori == "Infaq")
                        <option>Infaq</option>
                        <option>Shadaqah</option>
                        <option>Zakat</option>
                        @else
                        <option>Shadaqah</option>
                        <option>Zakat</option>
                        <option>Infaq</option>
                        @endif
                    </select>
                    @error('kategori')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Nama</label>
                    <input name="nama_kampanye" class="form-control" id="exampleInputEmail3" value="{{ old('nama_kampanye', $kampanyes->nama_kampanye) }}" placeholder="Masukkan Nama Kampanye">
                    @error('nama_kampanye')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div>
                    <img src="{{ Storage::url('public/foto_kampanye/').$kampanyes->foto_kampanye }}" class="rounded" style="width: 150px">
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
                    <textarea name="deskripsi_kampanye" class="form-control" id="exampleTextarea1" rows="4">{{ old('deskripsi_kampanye', $kampanyes->deskripsi_kampanye) }}</textarea>
                    @error('deskripsi_kampanye')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Status</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect2">
                        @if ($kampanyes->status == "Aktif")
                        <option>Aktif</option>
                        <option>Tidak Aktif</option>
                        @else
                        <option>Tidak Aktif</option>
                        <option>Aktif</option>
                        @endif

                    </select>
                    @error('status')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Harga</label>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest rupiah)" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="harga" value="{{ old('harga', $kampanyes->harga) }}">
                    @error('harga')
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
