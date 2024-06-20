<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\Route;


//  Berisi rute-rute yang digunakan untuk mengatur navigasi dalam aplikasi web.
Route::get('/', function () {
    return view('tampil/dashboard');
});

//dataobat
Route::get('/dataobat', [ObatController::class, 'index'])->name('dataobat');
Route::get('/tambahobat', [ObatController::class, 'create'])->name('tambahobat');
Route::post('/simpanobat', [ObatController::class, 'store'])->name('simpanobat');
Route::get('/editobat/{id}', [ObatController::class, 'edit'])->name('editobat');
Route::post('/updateobat/{id}', [ObatController::class, 'update'])->name('updateobat');
Route::get('/hapusobat/{id}', [ObatController::class, 'destroy'])->name('hapusobat');

//pegawai
Route::get('/datapegawai', [PegawaiController::class, 'index'])->name('datapegawai');
Route::get('/tambahpegawai', [PegawaiController::class, 'create'])->name('tambahpegawai');
Route::post('/simpanpegawai', [PegawaiController::class, 'store'])->name('simpanpegawai');
Route::get('/editpegawai/{id}', [PegawaiController::class, 'edit'])->name('editpegawai');
Route::post('/updatepegawai/{id}', [PegawaiController::class, 'update'])->name('updatepegawai');
Route::get('/hapuspegawai/{id}', [PegawaiController::class, 'destroy'])->name('hapuspegawai');

//supplier
Route::get('/datasupplier', [SupplierController::class, 'index'])->name('datasupplier');
Route::get('/tambahsupplier', [SupplierController::class, 'create'])->name('tambahsupplier');
Route::post('/simpansupplier', [SupplierController::class, 'store'])->name('simpansupplier');
Route::get('/editsupplier/{id}', [SupplierController::class, 'edit'])->name('editsupplier');
Route::post('/updatesupplier/{id}', [SupplierController::class, 'update'])->name('updatesupplier');
Route::get('/hapussupplier/{id}', [SupplierController::class, 'destroy'])->name('hapussupplier');

//penjualan
Route::get('/datapenjualan', [PenjualanController::class, 'index'])->name('datapenjualan');
Route::get('/tambahpenjualan', [PenjualanController::class, 'create'])->name('tambahpenjualan');
Route::post('/simpanpenjualan', [PenjualanController::class, 'store'])->name('simpanpenjualan');
Route::get('/editpenjualan/{id}', [PenjualanController::class, 'edit'])->name('editpenjualan');
Route::post('/updatepenjualan/{id}', [PenjualanController::class, 'update'])->name('updatepenjualan');
Route::get('/hapuspenjualan/{id}', [PenjualanController::class, 'destroy'])->name('hapuspenjualan');

//pembeloan
Route::get('/datapembelian', [PembelianController::class, 'index'])->name('datapembelian');
Route::get('/tambahpembelian', [PembelianController::class, 'create'])->name('tambahpembelian');
Route::post('/simpanpembelian', [PembelianController::class, 'store'])->name('simpanpembelian');
Route::get('/editpembelian/{id}', [PembelianController::class, 'edit'])->name('editpembelian');
Route::post('/updatepembelian/{id}', [PembelianController::class, 'update'])->name('updatepembelian');
Route::get('/hapuspembelian/{id}', [PembelianController::class, 'destroy'])->name('hapuspembelian');