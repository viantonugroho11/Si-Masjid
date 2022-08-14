@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Program Kegiatan Masjid</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('program-kegiatan.create')}}">Tambah Program</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Hari Kegiatan</th>
                                            <th>Waktu Kegiatan</th>
                                            <th>Deskripsi Kegiatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($programkegiatans as $item )
                                        <tr>
                                            <td>{{ $item->nama_kegiatan }}</td>
                                            <td>{{ $item->hari_kegiatan }}</td>
                                            <td>{{ $item->waktu_kegiatan }}</td>
                                            <td>{{ $item->deskripsi_kegiatan }}</td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('program-kegiatan.edit',$item->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('program-kegiatan.destroy', $item->id) }}" method="POST">
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
