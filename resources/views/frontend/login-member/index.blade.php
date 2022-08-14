@extends('frontend.master')
@section('contents')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn mb-3">Masuk</h1>
            <a href="" class="h5 text-white">Beranda</a>
            <i class="fa fa-angle-double-right text-white px-2"></i>
            <a href="" class="h5 text-white">Masuk</a>
        </div>
    </div>
</div>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Ahlan Shohibul ZIS</h4>
              <h6 class="font-weight-light">Silahkan mengisi akun untuk melanjutkan</h6>
              <form class="pt-3" method="POST" action="{{ route('loginMember') }}">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Masukkan Email">
                </div>
                <div>
                    <br>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Masukkan Kata Sandi">
                </div>
                <div>
                    <br>
                </div>
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    {{ __('Masuk') }}
                </button>
                <div class="text-center mt-4 font-weight-light">
                  Belum memiliki akun ? <a href="/register" class="text-primary">Buat Akun !</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
