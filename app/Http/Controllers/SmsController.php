<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class SmsController extends Controller
{
    public function create()
    {
        return view('sms');
    }

    public function store(Request $request, $id)
    {
        
        $transactions = Transaction::findOrFail($id);

        Nexmo::message()->send([
            'to' => '+62' . $request->phone,
            'from' => 'RENTAL',
            'text' => 'Halo Username, kami dari rentalku ingin memberitahukan bahwa pinjaman
             anda sudah dikembalikan berikut rinciannya',
             'Nama Peminjam' . $request->name_peminjam,
             'Tanggal Pinjam' . $request->tgl_pinjam,
             'Tanggal Kembali' . $request->tgl_kembali,
             'Jumlah Barang' . $request->jumlah_barang,
             'Harga' . $request->idr,
        ]);
            return redicret()->back();
        
    }
}
