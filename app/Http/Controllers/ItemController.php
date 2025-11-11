<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;


class ItemController extends Controller
{
    public function index()
    {
        return view('item.index');
    }
    public function store(Request $request)
    {
        $simpan = [
            'item_name' => $request->input('nama_barang'),
            'price' => $request->input('nama_barang'),
            'stok' => $request->input('nama_barang'),
            'slug' => Str::slug($request->input('nama_barang')),
        ];
        // gambar
        if($request->hasFile('gambar_produk'))
        {
            $gambar = $request->file('gambar_produk'); //mengambil gambar untuk diolah
            $path = 'public/images/items'; //membuat path untuk penyimpanan gambar
            $format = $gambar->getClientOriginalExtension();
            $nama = 'Image-items_'.Carbon::now()->format('Ymdhis').'.'.$format;

            // disimpan ke database
            $simpan['image'] = $nama;
        }

        return $simpan;

    }

}
