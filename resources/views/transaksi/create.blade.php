@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10px">
        <div class="col-md-10">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <h3>Perhatian !!!</h3>
                        Silahkan Input Transaksi dibawah ini dengan benar.
                    </div>

                     <form action="{{route('manage-transaksi.store', $transactions->id)}}" method="post">
                         @csrf

                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label for="">Kode Barang</label>
                                     <input class="form-control" value="{{$transactions->kode_barang}}" disabled>
                                     <input type="hidden" name="kodebarang_id" class="form-control" value="{{$transactions->id}}">
                                 </div>
                             </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input class="form-control" value="{{$transactions->name_item}}" disabled>
                                        <input type="hidden" name="nameitem_id" class="form-control" value="{{$transactions->id}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Peminjam</label>
                                        <input type="text" name="name_peminjam" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jumlah Dipinjam</label>
                                        <input type="text" name="jumlah_pinjaman" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tanggal Pinjam</label>
                                        <input type="date" name="tgl_pinjam" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tanggal Kembali</label>
                                        <input type="date" name="tgl_kembali" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="text" name="idr" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Telp</label>
                                        <input type="text" name="phone" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info">Input Transaksi</button>
                                    <button type="submit" class="btn btn-info">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection