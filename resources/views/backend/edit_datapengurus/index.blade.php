@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Edit Data Pengurus</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Form Input Data Pengurus -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{ route('datapengurus.update',$datapengurus->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Foto</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                        </div>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Nama Lengkap</label>
                    <input name="nama_lengkap" class="form-control" id="exampleInputEmail3" value="{{ old('nama_lengkap', $datapengurus->nama_lengkap) }}" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Alamat Lengkap</label>
                    <textarea name="alamat_lengkap" class="form-control" id="exampleTextarea1" rows="4">{{ old('alamat_lengkap', $datapengurus->alamat_lengkap) }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect2">
                        @if ($datapengurus->jenis_kelamin == "Laki - laki")
                        <option>Laki - laki</option>
                        <option>Perempuan</option>
                        @else
                        <option>Perempuan</option>
                        <option>Laki - laki</option>
                        @endif

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Nomor Telepon</label>
                    <input name="nomor_telepon" class="form-control" id="exampleInputPassword4" value="{{ old('nomor_telepon', $datapengurus->nomor_telepon) }}" placeholder="Masukkan Nomor Telepon">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Jabatan Kepengurusan</label>
                    <select name="jabatan_kepengurusan" class="form-control" id="exampleFormControlSelect2">
                        @php
                        $jabatan = ['Ketua DKM', 'Sekertaris', 'Bendahara', 'Pengurus'];
                        @endphp
                        @foreach ($jabatan as $item)
                        <option {{($datapengurus->jabatan_kepengurusan == $item)? 'selected':''}}>{{$item}}</option>
                        @endforeach
                    </select>
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
