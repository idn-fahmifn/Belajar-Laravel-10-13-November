<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        $data = Item::all();
        return view('item.index', compact('data'));
    }
    public function store(Request $request)
    {
        // $request = $request;
        $request->validate([
            'nama_barang' => ['required', 'string', 'min:5', 'max:50'],
            'harga' => ['required', 'numeric', 'min:500', 'max:5000000'],
            'stok' => ['required', 'numeric', 'min:0', 'max:100'],
            'gambar_produk' => ['required', 'file', 'mimes:png,jpg,jpeg,svg,heic', 'max:10240'],
        ]);

        $simpan = [
            'item_name' => $request->input('nama_barang'),
            'price' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'slug' => Str::slug($request->input('nama_barang')),
        ];
        
        // gambar
        if($request->hasFile('gambar_produk'))
        {
            $gambar = $request->file('gambar_produk'); //mengambil gambar untuk diolah
            $path = 'public/images/items'; //membuat path untuk penyimpanan gambar
            $format = $gambar->getClientOriginalExtension();
            $nama = 'Image-items_'.Carbon::now()->format('Ymdhis').'.'.$format;

            // meyimpan ke storage
            $gambar->storeAs($path, $nama);
            // disimpan ke database
            $simpan['image'] = $nama;
        }

        Item::create($simpan);
        return redirect()->route('item.index');

    }

    public function detail($param)
    {
        $data = Item::where('slug', $param)->firstOrFail();
        return view('item.detail', compact('data'));
    }

    public function update(Request $request, $param)
    {
        $data = Item::findOrFail($param); //mengambil data dari id yang dipilih.
        $request->validate([
            'nama_barang' => ['required', 'string', 'min:5', 'max:50'],
            'harga' => ['required', 'numeric', 'min:500', 'max:5000000'],
            'stok' => ['required', 'numeric', 'min:0', 'max:100'],
            'gambar_produk' => ['file', 'mimes:png,jpg,jpeg,svg,heic', 'max:10240'],
        ]);

        $simpan = [
            'item_name' => $request->input('nama_barang'),
            'price' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'slug' => Str::slug($request->input('nama_barang')),
        ];

         // gambar
        if($request->hasFile('gambar_produk'))
        {
            $path_lama = 'public/images/items/'.$data->image;
            if($data->image && Storage::exists($path_lama))
            {
                // gambar lama akan dihapus
                Storage::delete($path_lama);
            }

            $gambar = $request->file('gambar_produk'); //mengambil gambar untuk diolah
            $path = 'public/images/items'; //membuat path untuk penyimpanan gambar
            $format = $gambar->getClientOriginalExtension();
            $nama = 'Image-items_'.Carbon::now()->format('Ymdhis').'.'.$format;

            // meyimpan ke storage
            $gambar->storeAs($path, $nama);
            // disimpan ke database
            $simpan['image'] = $nama;
        }

        $data->update($simpan);

        return redirect()->route('item.detail', $data->slug);

        

    }

}
