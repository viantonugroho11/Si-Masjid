@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Data Inventaris</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a class="btn btn-primary mb-3" href="/inventaris/create">Tambah Data</a>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="order-listing" class="display expandable-table" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Jumlah</th>
                                            <th>Kondisi</th>
                                            <th>Aksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($inventarisis as $item)
                                        <tr class="odd show">
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->jenis_barang }}</td>
                                            <td>{{ $item->kode_barang }}</td>
                                            <td>{{ $item->jumlah . " " . $item->satuan }}</td>
                                            <td>
                                            @if($item->kondisi_barang=="Baik")
                                                <div class="badge badge-outlined badge-success">Baik</div>
                                            @else
                                                <div class="badge badge-outlined badge-danger">Rusak</div>
                                            @endif
                                            </td>
                                            {{-- <td>{{ $item->kondisi_barang }}</td> --}}
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm" href="{{route('inventaris.edit',$item->id)}}"><i class="mdi mdi-lead-pencil"></i></a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('inventaris.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-eraser"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data belum Tersedia.
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
