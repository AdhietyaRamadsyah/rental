<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Item;
use App\User;

class TransaksiController extends Controller
{
    public function index()
    {
        $transactions = \App\Transaction::with('item')->get();
        
        return view('transaksi.index', compact('transactions'));
    }

    public function create($id)
    {
        $transactions = Item::findOrFail($id);

        return view('transaksi.create', compact('transactions'));
    }


    public function store(Request $request, $id)
    {
        $transaction = Transaction::create([
            'kodebarang_id' => $request->kodebarang_id,
            'nameitem_id' => $request->nameitem_id,
            'name_peminjam' => $request->name_peminjam,
            'jumlah_pinjaman' => $request->jumlah_pinjaman,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'idr' => $request->idr,
            'email' => $request->email,
            'phone' => $request->phone,

        ]);

        if ($transaction->save()){
            $harga = Item::findOrFail($transaction->kodebarang_id);
            $jumlah_pinjaman = $transaction->jumlah_pinjaman * $harga->idr;

            $transaction->update([
                'idr' => $jumlah_pinjaman
            ]);
        }

        if ($transaction->save()){
            $get = Item::findOrFail($transaction->kodebarang_id);
            $hitung = $get->jumlah_barang - $transaction->jumlah_pinjaman;

            $get->update([
                'jumlah_barang' => $hitung
            ]);
        }

        return redirect()->back();
    }
}
