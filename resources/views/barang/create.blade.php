@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 30px">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <h3>Perhatian !!!</h3>
                        Silahkan isi data dibawah ini dengan benar.
                    </div>

                     <form action="{{route('manage-barang.store')}}" method="post" enctype="multipart/form-data">
                         @csrf

                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label for="">Nama barang</label>
                                     <input type="text" name="name_item" class="form-control" id="" placeholder="nama barang">
                                 </div>
                             </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jumlah Barang</label>
                                        <input type="number" name="jumlah_barang" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Harga Satuan</label>
                                        <input type="text" name="idr" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-info">Simpan</button>
                                    <a href="{{route('barang.index')}}" class="btn btn-outline-secondary btn-sm">Kembali</a>
                            </form>
                         </div>
                    </div>
                 </div>
             </div>
    </div>
@endsection