<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pengembalian</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-white">
    <div class="content px-3">
        <div class="mb-3">
            <h3 class="text-info">Laporan Semua Data Pengembalian</h3>
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Kode Pengembalian</th>
                    <th>No Transaksi</th>
                    <th>Kode Barang</th>
                    <th>Penyewa</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Lama  Penyewaan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($return as $retur)
                    <tr>
                        <td>{{$retur->no_refund}}</td>
                        <td>{{$retur->transaksi->no_faktur}}</td>
                        <td>{{$retur->item->kode_barang}}</td>
                        <td>{{$retur->transaksi->name_peminjam}}</td>
                        <td>{{$retur->transaksi->tgl_pinjam}}</td>
                        <td>{{$retur->transaksi->tgl_kembali}}</td>
                        <td>
                            <?php
                            $datetime2 = strtotime($retur->transaksi->tgl_kembali) ;
                            $datenow = strtotime($retur->transaksi->tgl_pinjam);
                            $durasi = ($datenow - $datetime2) / 86400 ;
                            $durasi2 = ($durasi);
                        ?>
                            <?php $durasi1 = abs($durasi) ?> {{ $durasi1 }} Hari   
                        </td>
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