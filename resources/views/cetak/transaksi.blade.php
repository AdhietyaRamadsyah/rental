<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Transaksi</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-white">
    <div class="content px-3">
        <div class="mb-3">
            <h3 class="text-info">Laporan Semua Data Transaksi</h3>
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Penyewa</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Jumlah Pinjaman</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transaksi as $transaction)
                    <tr>
                        <td>{{$transaction->no_faktur}}</td>
                        <td>{{$transaction->item->kode_barang}}</td>
                        <td>{{$transaction->item->name_item}}</td>
                        <td>{{$transaction->name_peminjam}}</td>
                        <td>{{$transaction->tgl_pinjam}}</td>
                        <td>{{$transaction->tgl_kembali}}</td>
                        <td>{{$transaction->email}}</td>
                        <td>{{$transaction->phone}}</td>
                        @if ($transaction->jumlah_pinjaman == 0)
                        <td>{{$transaction->jumlah_pinjaman}}</td>
                        <td>0</td>
                        @else
                        <td>{{$transaction->jumlah_pinjaman}}</td>
                        <td>{{$transaction->idr}}</td>
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            Maaf Tanggal yang anda masukan tidak tersedia 
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>