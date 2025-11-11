<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //wajib mendefiniskan model ini terhubung ke table mana.
    protected $table = 'barang';
    
    // deinisikan column apa saja yang ada didalamnya,
    protected $fillable = [
        'nama_barang', 'stok', 'kategori', 'deskripsi', 'harga', 'merk'
    ];
}
