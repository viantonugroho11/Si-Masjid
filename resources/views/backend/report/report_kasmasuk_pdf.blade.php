<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position:relative;
            /* left:3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Transaksi</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Transaksi</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
            </tr>
            @forelse ($reporttanggal as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->jenis_pemasukan }}</td>
                <td>{{ $item->jumlah_pemasukan }}</td>
                <td>{{ $item->tanggal_pemasukan }}</td>
                <td>{{ $item->deskripsi_pemasukan }}</td>
            </tr>
            @empty
                <div class="alert alert-danger">
                    Data Blog belum Tersedia.
                </div>
            @endforelse
        </table>
    </div>

    <script type="text/javascript">
        window.print();

    </script>
</body>
</html>
