<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = "penjualan";
    protected $primaryKey = "id";
    protected $fillable = [
    'id_pegawai','id_obat','tgl_penjualan','qty','harga_jual'];
}
