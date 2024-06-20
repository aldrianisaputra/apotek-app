<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

// berfungsi sebagai penghubung antara rute (routes) website dan fungsi logika yang ada didalamnya. 
// yang membantu dalam mengatur alur kerja aplikasi web, memungkinkan  untuk mengelola bagaimana pengguna berinteraksi dengan 
// aplikasi dan bagaimana aplikasi merespons terhadap interaksi tersebut.
// php artisan make:controller NamaController

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dtObat = obat::all();
        return view('obat/dataobat', compact('dtObat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat/tambahobat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Membuat entri data obat baru
        $obat = Obat::create([
        'nama_obat' => $request->nama_obat,
        'gambar' => $request->gambar,
        'kategori' => $request->kategori,
        'stock_ready' => $request->stock_ready,
        'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
        'harga' => $request->harga,
         ]);

     // Mengelola proses pengunggahan gambar
        if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $file->move(public_path('img'), $namaFile); 
        // Memindahkan file ke direktori public/img

        // Menyimpan nama file gambar ke dalam database
        $obat->gambar = $namaFile;
        $obat->save();
        }
        return redirect('dataobat')->with('success', 'Data obat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ob = Obat::where('id', $id)->first();
        return view('obat/editobat', ['ob' => $ob]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ob = Obat::find($id);
        $ob->update($request->all());

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile); // Memindahkan file ke direktori public/img
    
            // Menyimpan nama file gambar ke dalam database
            $ob->gambar = $namaFile;
            $ob->save();
            }
        return redirect('dataobat')->with('success', 'Data obat berhasil ditambahkan.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ob = Obat::find($id);
        $ob->delete();
        return back();
    }
}
