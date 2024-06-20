<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // untuk mengelola dan membuat struktur basis data dengan kode aplikasi secara terstruktur dan rapih yang dimana 
    // memungkinkan untuk membuat, mengubah, dan menghapus tabel serta menambahkan atau mengubah kolom, indeks, dan kunci asing. 
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('nama_obat', 200);   
            $table->string('gambar', 200);   
            $table->string('kategori', 200);   
            $table->integer('stock_ready');   
            $table->date('tgl_kadaluarsa');   
            $table->integer('harga');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat');
    }
};
