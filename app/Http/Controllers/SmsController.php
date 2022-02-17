<?php

namespace App\Http\Controllers;

use Nexmo\Laravel\Facade\Nexmo;
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
        
        $transaction = Transaction::findOrFail($id);

        Nexmo::message()->send([
            'to' => $transaction->phone,
            'from' => 'Rental kaca',
            'text' => 'Halo Username, kami dari rentalku ingin memberitahukan bahwa pinjaman
             anda sudah dikembalikan berikut rinciannya'
             . 'Nama Peminjam ' . $transaction->name_peminjam
             . 'Tanggal Pinjam ' . $transaction->tgl_pinjam
             . 'Tanggal Kembali' . $transaction->tgl_kembali
             . 'Jumlah Barang' . $transaction->jumlah_pinjaman
             . 'Harga' . $transaction->idr
        ]);
        
        return redirect()->back();
        
    }
}
