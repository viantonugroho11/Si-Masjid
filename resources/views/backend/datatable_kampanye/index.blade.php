@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Data Kampanye</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="/kampanye/create">Tambah Kampanye</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Nama Kampanye</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kampanyes as $item)
                                        <tr>
                                            <td>{{ $item->kategori }}</td>
                                            <td>{{ $item->nama_kampanye }}</td>
                                            <td>{{ $item->harga }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('kampanye.edit',$item->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kampanye.destroy', $item->id) }}" method="POST">
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
