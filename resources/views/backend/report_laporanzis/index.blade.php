@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @forelse ($profil as $item)
                        {{-- <div>
                        <img src="{{ Storage::url('public/logo_masjid/').$item->logo_masjid }}" alt="profile" class="img-lg rounded-circle mb-3"/>
                        </div> --}}
                        <h3>Laporan ZIS</h3>
                        <h5>{{ $item->nama_masjid }}</h5>
                        @empty
                        <div class="alert alert-danger">
                            Data belum Tersedia.
                        </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <a class="btn btn-primary" target="_blank" href="{{ route('cetakAll') }}">Cetak</a> --}}
                        <a class="btn btn-primary" href="{{ route('cetakForm') }}">Cetak Kategori</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th># Order</th>
                                            <th>Transaksi</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Status Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($laporanzis as $item)
                                        <tr>
                                            <td>{{ $item->order_id }}</td>
                                            <td>{{ $item->merchant_id }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->gross_amount }}</td>
                                            <td>{{ $item->transaction_status }}</td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Blog belum Tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

