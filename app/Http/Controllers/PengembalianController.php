<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Transaction;
use App\Item;
use App\Refund;

class PengembalianController extends Controller
{
    public function index()
    {
        $returns = Refund::with('item','transaksi')->get();
        
        return view('pengembalian.index', compact('returns'));
    }

    public function create($id)
    {
       $transaksi = Transaction::findOrFail($id);
      
        return view('pengembalian.create', compact('transaksi'));
    }

    public function store(Request $request, $id)
    {
        $return = Refund::create([
            'kodebarang_id' => $request->kodebarang_id,
            'namepeminjam_id' => $request->namepeminjam_id,
            'tglpinjam_id' => $request->tglpinjam_id,
            'tglkembali_id' => $request->tglkembali_id,
            'nofaktur_id' => $request->nofaktur_id,
        ]);

       if ($return->save()) {
           $transaction = Transaction::findOrFail($id);

           Nexmo::message()->send([
            'to' => $transaction->phone,
            'from' => 'Rental kaca',
            'text' => 'Halo Username, kami dari rentalku ingin memberitahukan bahwa pinjaman
             anda sudah dikembalikan berikut rinciannya'
             . 'No. Refund ' . $return->no_refund
             . 'Nama Penyewa ' . $return->transaksi->name_peminjam
             . 'Tanggal Pinjam' . $return->transaksi->tgl_pinjam
             . 'Tanggal Kembali' . $return->transaksi->tgl_kembali
        ]);
        
        $get = Item::findOrFail($transaction->kodebarang_id);

        $hitung = $get->jumlah_barang + $transaction->jumlah_pinjaman;

        $get->update([
            'jumlah_barang' => $hitung
        ]);

        return redirect()->back();
       }
    }
}
    