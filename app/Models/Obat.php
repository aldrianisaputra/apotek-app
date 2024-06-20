<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// model ini digunakan untuk menghubungkan database dan field field yang ada didalam tabel database
//php artisan make:model namamodel 
class Obat extends Model
{
   protected $table = "obat";
   protected $primaryKey = "id";
   protected $fillable = [
    'nama_obat','gambar','kategori','stock_ready','tgl_kadaluarsa','harga' ];
}
