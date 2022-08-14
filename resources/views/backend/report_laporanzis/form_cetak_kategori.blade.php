@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Print Kategori</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputEmail3">Pilih Kategori Print</label>
                                <select name="kategoriPrint" id="kategoriPrint" class="form-control" id="exampleFormControlSelect2">
                                    <option>- Pilih -</option>
                                    <option>Semua</option>
                                    @foreach ($namaZis as $item)
                                    <option>{{ $item->nama_kampanye }}</option>
                                    @endforeach
                                </select>
                                @error('kategoriPrint')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <a href="" onclick="this.href='/cetakKategori/'+ document.getElementById('kategoriPrint').value + '/' " target="_blank" class="btn btn-primary">Cetak Kategori</a>
                            <a class="btn btn-light" href="/laporanzis">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
