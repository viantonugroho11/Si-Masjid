@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Profil Masjid</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <a class="btn btn-primary" href="/pemasukan/jenis/create">Tambah Jenis</a>
                        <a class="btn btn-warning" href="/pemasukan/">Kembali</a> --}}
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Masjid</th>
                                            <th>Email Masjid</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($profilmasjids as $item)
                                        <tr>
                                            <td>{{ $item->nama_masjid }}</td>
                                            <td>{{ $item->email_masjid }}</td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('profilmasjid.show', $item->id)}}"><i class="mdi mdi-magnify"></i></a>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('profilmasjid.edit',$item->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                                            </td>
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
