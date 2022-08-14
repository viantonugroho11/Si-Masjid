@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Pengeluaran Kas Masjid</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('pengeluaran.create')}}">Tambah Pengeluaran</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Jenis Pengeluaran</th>
                                            <th>Jumlah Pengeluaran</th>
                                            <th>Tanggal Pengeluaran</th>
                                            <th>Deskripsi Pengeluaran</th>
                                            <th>Bukti Pengeluaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pengeluarans as $item)
                                        <tr>
                                            <td>{{ $item->jenis_pengeluaran }}</td>
                                            <td>{{ $item->jumlah_pengeluaran }}</td>
                                            <td>{{ $item->tanggal_pengeluaran }}</td>
                                            <td>{{ $item->deskripsi_pengeluaran }}</td>
                                            <td class="text-center">
                                                <img src="{{ Storage::url('public/bukti_pengeluaran/').$item->bukti_pengeluaran }}" class="rounded" style="width: 150px">
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('pengeluaran.edit',$item->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengeluaran.destroy', $item->id) }}" method="POST">
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
