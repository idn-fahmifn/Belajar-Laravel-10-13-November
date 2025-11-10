<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     * biasanya digunakan untuk menampilkan semua data pada salah satu tabel.
     */
    public function index()
    {
        return "ini adalah index dari movie, dibuat dengan resource controller";
    }

    /**
     * Show the form for creating a new resource.
     * untuk menampilkan halaman create.
     */
    public function create()
    {
        return "ini adalah create dari movie, dibuat dengan resource controller";
    }

    /**
     * Store a newly created resource in storage.
     * mengirimkan sebuah data dari form => post
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * memanggil 1 baris data atau spesifik dari sebuah tabel
     */
    public function show(string $id)
    {
        return "ini adalah detail dari movie, dibuat dengan resource controller ". $id;
    }

    /**
     * Show the form for editing the specified resource.
     * untuk menampilkan halaman edit
     */
    public function edit(string $id)
    {
        return "ini adalah edit dari movie, dibuat dengan resource controller ". $id;
    }

    /**
     * Update the specified resource in storage.
     * untuk mengubah data => patch/put
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * menghapus data => delete
     */
    public function destroy(string $id)
    {
        //
    }
}
