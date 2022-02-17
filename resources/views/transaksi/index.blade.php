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
                        <form action="{{route('sms', $transaction->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="phone" class="form-control" value="{{$transaction->phone}}">
                                <button type="submit" class="btn btn-outline-primary btn-sm">Notifikasi</button>
                            </form>
                            <form action="{{route('pengembalian.store', $transaction->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="kodebarang_id" class="form-control" value="{{$transaction->item->id}}">
                                <input type="hidden" name="nofaktur_id" class="form-control" value="{{$transaction->id}}">
                                <input type="hidden" name="namepeminjam_id" class="form-control" value="{{$transaction->id}}">
                                <input type="hidden" name="tglpinjam_id" id="" class="form-control" value="{{$transaction->id}}">
                                <input type="hidden" name="tglkembali_id" id="" class="form-control" value="{{$transaction->id}}">
                                <button class="btn btn-outline-secondary btn-sm">Pengembalian</button>
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