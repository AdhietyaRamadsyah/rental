@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border">
                    <div class="card-body">
                        <form action="{{route('pengembalian.store', $transaction->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Kode Barang</label>
                                        <input class="form-control" type="text" value="{{$transactions->item->kode_barang}}" disabled>
                                         <input type="hidden" name="kodebarang_id" class="form-control" value="{{$transactions->item->id}}">
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">No Faktur</label>
                                                <input class="form-control" type="text" value="{{$transactions->no_faktur}}" disabled>
                                                <input type="hidden" name="nofaktur_id" class="form-control" value="{{$transactions->id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Nama Peminjam</label>
                                                <input class="form-control" type="text" value="{{$transactions->name_peminjam}}" disabled>
                                                <input type="hidden" name="namepeminjam_id" class="form-control" value="{{$transactions->id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Tanggal Pinjam</label>
                                                <input class="form-control" type="date" value="{{$transactions->tgl_pinjam}}" disabled>
                                                <input type="hidden" name="tglpinjam_id" id="" class="form-control" value="{{$transactions->id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Tanggal Kembali</label>
                                                <input class="form-control" type="date" value="{{$transactions->tgl_kembali}}" disabled>
                                                <input type="hidden" name="tglkembali_id" id="" class="form-control" value="{{$transactions->id}}">
                                            </div>
                                        </div>
                                     <div class="col-md-6">
                                        <button type="submit" class="btn btn-success">Buat Pengembalian</button>
                                        <a href="{{route('pengembalian.index')}}" class="btn btn-secondary ">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection