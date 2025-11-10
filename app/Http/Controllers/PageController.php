<?php

namespace App\Http\Controllers;

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
}
