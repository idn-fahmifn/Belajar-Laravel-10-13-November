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
}
