@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4>Ubah Jenis Pemasukan</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('editpassword.update',Auth::user()->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="possword_lama">Kata Sandi Lama</label>
                            <input type="password" name="password_lama" id="kata_sandi_lama" class="form-control" id="password_lama" placeholder="Masukkan Kata Sandi Lama">
                            @error('password_lama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Kata Sandi Baru</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi Baru">
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Masukkan Konfirmasi Kata Sandi">
                            @error('password_confirmation')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Ubah Kata Sandi</button>
                        <button class="btn btn-light">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
