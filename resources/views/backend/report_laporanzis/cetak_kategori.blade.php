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
                <th>Transaksi</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Status Transaksi</th>
            </tr>
            @forelse ($cetak_kategori as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
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
        </table>
    </div>

    <script type="text/javascript">
        window.print();

    </script>
</body>
</html>
