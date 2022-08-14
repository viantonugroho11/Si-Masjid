@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Salur</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('salur.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail3">Kategori</label>
                                <select name="kategori_salur" class="form-control" id="exampleFormControlSelect2">
                                    <option>- Pilih -</option>
                                    @foreach ($namaZis as $item)
                                    <option>{{ $item->nama_kampanye }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_salur')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tanggal Penyaluran</label>
                                <div id="datepicker-popup" class="input-group date datepicker">
                                  <input name="tanggal_salur" type="text" class="form-control">
                                  <span class="input-group-addon input-group-append border-left">
                                    <span class="ti-calendar input-group-text"></span>
                                  </span>
                                </div>
                                @error('tanggal_salur')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Jumlah Penyaluran</label>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest rupiah)" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="jumlah_salur">
                                @error('jumlah_salur')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Deskripsi</label>
                                <textarea name="deskripsi_salur" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                @error('deskripsi_salur')
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
