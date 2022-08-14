@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Pemasukan Kas Masjid</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('pemasukan.create')}}">Tambah Pemasukan</a>
                        <a class="btn btn-success" href="{{route('jenis.index')}}">Tambah Jenis Pemasukan</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Jenis Pemasukan</th>
                                            <th>Jumlah Pemasukan</th>
                                            <th>Tanggal Pemasukan</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pemasukans as $item)
                                        <tr>
                                            <td>{{ $item->jenis_pemasukan }}</td>
                                            <td>{{ $item->jumlah_pemasukan }}</td>
                                            <td>{{ $item->tanggal_pemasukan }}</td>
                                            <td>{{ $item->deskripsi_pemasukan }}</td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('pemasukan.edit',$item->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pemasukan.destroy', $item->id) }}" method="POST">
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
