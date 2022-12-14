@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Assalamu'alaikum Wr Wb</h3>
            <h6 class="font-weight-normal mb-0">Ahlan Wa Sahlan, Ustadz ! <span class="text-primary">Selamat Melakukan Aktifitas</span></h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <i class="mdi mdi-calendar"></i> {{\Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y')}}
              </button>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="{{ asset('assets/backend/images/masjid.png') }}" alt="Masjid">
            <div class="weather-info">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Jumlah Shohibul ZIS</p>
                <p class="fs-40 mb-2"><h1>{{$jumlah_member}}</h1></p>
                <p>Orang</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Total Transaksi</p>
                <p class="fs-30 mb-2"><h1>{{$jumlah_transaksi}}</h1></p>
                <p>Transaksi ZIS</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Jumlah Penyaluran ZIS</p>
                <p class="fs-30 mb-2">@currency($total_salur)</p>
                <p>Penyaluran ZIS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Jumlah Kas Masjid</p>
                <p class="fs-30 mb-2">@currency($total)</p>
                <p>Total Keseluruhan Kas Masjid</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
