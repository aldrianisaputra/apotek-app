<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = "pembelian";
    protected $primaryKey = "id";
    protected $fillable = [
    'tgl_pembelian','id_supplier','id_obat','qty','harga_beli'];}
