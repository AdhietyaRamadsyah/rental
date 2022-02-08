@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="{{route('barang.create')}}" class="btn btn-info">Tambah Barang</a>
                        </div>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Stock Barang</th>
                                <th>Harga Satuan</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td>{{$item->kode_barang}}</td>
                                <td>
                                    <a href="{{route('transaksi.create')}}"
                                        class="btn btn-outline-info btn-sm">
                                        {{$item->name_item}}
                                    </a>
                                    </td>
                                <td>{{$item->jumlah_barang}}</td>
                                <td>{{$item->harga_satuan}}</td>
                                <td>
                                    <form action="{{route('destroy.data.barang', $item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('barang.edit', $item->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                        <button class="btn btn-outline-danger btn-sm">Delete</button>
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