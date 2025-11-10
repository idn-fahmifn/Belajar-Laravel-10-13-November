<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    // untuk menampilkan halaman form
    public function form()
    {
        return view('umur.form');
    }

    public function sukses()
    {
        return view('umur.success');
    }

    public function proses(Request $request)
    {
        // Menambahkan Validasi
        $request->validate([
            'nama' => ['required', 'string', 'min:3', 'max:30'],
            'umur' => ['required', 'numeric', 'min:1', 'max:100']
        ],[
            'nama.required' =>'Nama wajib diisi boss.',
            'nama.string' =>'Nama diisi dengan karakter.',
            'nama.min' =>'Masukan nama minimal 3 karakter.',
            'nama.max' =>'Masukan nama maksimal 30 karakter.',
        ]);
    }
}


