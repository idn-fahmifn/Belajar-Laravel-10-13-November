<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function halamanPertama()
    {
        return "Hallo ini adalah halaman pertama pada controller";
    }

    public function halamanKedua()
    {
        return "Hallo ini adalah halaman kedua pada controller";
    }

    public function halamanBarang()
    {
        $data = Barang::all();
        return view('barang', compact('data'));
    }

    public function halamanDetail($param)
    {
        // Mengambil data berdasarkan id yang dipilih.
        // $data = Barang::findOrFail($param);

        $data = Barang::where('nama_barang', $param)->firstOrFail();
        // return $data;

        // buat ke dalam bentuk tampilan blade.
        return view('detailbarang', compact('data'));

    }

}
