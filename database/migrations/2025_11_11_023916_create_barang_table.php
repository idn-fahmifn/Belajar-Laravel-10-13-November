<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang')->unique();
            $table->string('merk');
            $table->float('harga');
            $table->integer('stok')->default(0);
            $table->text('deskripsi');
            $table->enum('kategori', ['elektronik', 'alat berat','pakaian', 'lainnya']);
            $table->timestamps();  //digunakan untuk membuat created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
