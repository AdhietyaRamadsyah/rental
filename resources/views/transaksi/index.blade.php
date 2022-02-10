@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card border-0">
        <div class="card-body">
            <div class="d-flex mb-2">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert"> Ini adalah data Tranksaksi</div>
        </div>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <div class="d-flex mb-2">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No. Faktur</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Nama Penyewa</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Lama Penyewaan</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{$transaction->no_faktur}}</td>
                        <td>{{$transaction->item->kode_barang}}</td>
                        <td>{{$transaction->item->name_item}}</td>
                        <td>{{$transaction->name_peminjam}}</td>
                        <td>{{$transaction->tgl_pinjam}}</td>
                        <td>{{$transaction->tgl_kembali}}</td>
                        <td>
                            <?php
                                $datetime2 = strtotime($transaction->tgl_kembali) ;
                                $datenow = strtotime($transaction->tgl_pinjam);
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
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('PATCH')
                                <a href="{{route('sms')}}" class="btn btn-outline-info btn-sm">Reminder</a>
                                <button class="btn btn-info btn-sm">Buat Pengembalian</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection