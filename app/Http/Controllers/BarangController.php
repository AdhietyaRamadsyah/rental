<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Item;

class BarangController extends Controller
{
    public function index()
    {
        $items = \App\Item::all();
        return view('barang.index', compact('items'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function edit($id)
    {
       $barang = Item::findOrFail($id);

       return view('barang.edit', compact('barang'));
    }

    public function store(Request $request, Item $items)
    {
        $moment = Item::create($this->validateRequest());

       $this->storeImage($moment);

        return redirect(route('barang.index'));
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'name_item' => 'required',
            'jumlah_barang' => 'required',
            'harga_satuan' => 'required',
            'image'  => 'required|mimes:jpeg,jpg,png|max:5000',
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'required|mimes:jpeg,jpg,png|max:5000',
                ]);

            }
        });
    }
    private function storeImage($moment){
        if (request()->has('image')){
            $moment->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $moment->image))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrfail($id);
        $item->update($request->all());

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->delete($request->all());

        if (\File::exists(public_path('storage/' . $item->image))) {
            \File::delete(public_path('storage/' . $item->image));
            
        }

        return redirect()->back();
    }

}
