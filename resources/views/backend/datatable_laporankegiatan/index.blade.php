@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Data Laporan Pertanggung Jawaban Kegiatan</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('laporankegiatan.create')}}">Tambah Laporan</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Tanggal Kegiatan</th>
                                            <th>LPJ Kegiatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($laporankegiatans as $item)
                                        <tr>
                                            <td>{{ $item->nama_kegiatan }}</td>
                                            <td>{{ $item->tanggal_kegiatan }}</td>
                                            <td data="{{ $item->lpj_kegiatan }}" type="application/pdf">
                                            <a class="btn btn-outline-primary btn-sm" href="{{ $item->lpj_kegiatan }}"><i class="mdi mdi-magnify"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('laporankegiatan.edit',$item->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('laporankegiatan.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-eraser"></i></button>
                                                </form>
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
