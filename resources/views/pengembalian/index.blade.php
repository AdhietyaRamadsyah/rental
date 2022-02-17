@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card border-0">
        <div class="card-body">
            <div class="d-flex mb-2">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert"> Ini adalah data Pengembalian</div>
        </div>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <div class="d-flex mb-2">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No. Pengembalian</th>
                        <th>No Faktur</th>
                        <th>Kode Barang</th>
                        <th>Nama Penyewa</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Durasi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($returns as $return)
                    <tr>
                        <td>{{$return->no_refund}}</td>
                        <td>{{$return->transaksi->no_faktur}}</td>
                        <td>{{$return->item->kode_barang}}</td>
                        <td>{{$return->transaksi->name_peminjam}}</td>
                        <td>{{$return->transaksi->tgl_pinjam}}</td>
                        <td>{{$return->transaksi->tgl_kembali}}</td>   
                        <td>
                            <?php
                                $datetime2 = strtotime($return->transaksi->tgl_pinjam) ;
                                $datenow = strtotime($return->transaksi->tgl_kembali);
                                $durasi = ($datenow - $datetime2) / 86400 ;
                                $durasi2 = ($durasi);
                            ?>
                            @if ($datenow == $datetime2  ) 
                                <span class="text-danger">Waktunya mengembalikan</span> 
                                @elseif($datenow > $datetime2)
                                    Sudah lewat {{$durasi}} Hari
                                @else
                                <?php $durasi1 = abs($durasi) ?> {{ $durasi1 }} Hari
                                @endif
                            </td>             
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection