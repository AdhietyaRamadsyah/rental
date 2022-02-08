@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 30px">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <h3>Perhatian !!!</h3>
                        Silahkan edit data dibawah ini dengan benar.
                    </div>
                     <form action="{{route('updated.data.barang', $barang->id)}}" method="post">
                         @csrf
                         @method('PATCH')
                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label for="">Nama barang</label>
                                     <input type="text" name="name_item" class="form-control" value="{{$barang->name_item}}">
                                 </div>
                             </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Stock Barang</label>
                                        <input type="number" name="jumlah_barang" class="form-control" value="{{$barang->jumlah_barang}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Harga Satuan</label>
                                        <input type="text" name="harga_satuan" class="form-control" value="{{$barang->harga_satuan}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info">Simpan Daftar</button>
                                    <button type="submit" class="btn btn-info">Kembali</button>
                            </form>
                         </div>
                    </div>
                 </div>
             </div>
    </div>
@endsection