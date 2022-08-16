@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Riwayat Transaksi</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
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
                                        @forelse ($riwayats as $item)
                                        <tr>
                                            <td>{{ $item->getuser->name }}</td>
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

