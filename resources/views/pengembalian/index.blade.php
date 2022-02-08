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
                        <th>No. Faktur</th>
                        <th>Kode Barang</th>
                        <th>Nama Penyewa</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Lama Penyewaan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>234</td>
                        <td>12334</td>
                        <td>JNT21342</td>
                        <td>Adhietya</td>
                        <td>30-10-2012</td>
                        <td>30-11-2012</td>
                        <td>1 Bulan</td>                            
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection