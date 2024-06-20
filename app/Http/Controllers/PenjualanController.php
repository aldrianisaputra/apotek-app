<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;


class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtJual = penjualan::all();
        return view('penjualan/datapenjualan', compact('dtJual'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan/tambahpenjualan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'id_pegawai' => $request->id_pegawai,
            'id_obat' => $request->id_obat,
            'tgl_penjualan' => $request->tgl_penjualan,
            'qty' => $request->qty,
            'harga_jual' => $request->harga_jual,
        ]);
        return redirect('datapenjualan')->with('success', 'Data obat berhasil ditambahkan.');
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
        $dtJual = Penjualan::where('id', $id)->first();
        return view('penjualan/editpenjualan', ['dtJual' => $dtJual]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dtJual = Penjualan::find($id);
        $dtJual->update($request->all());
        
        return redirect('datapenjualan')->with('success', 'Data obat berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dtJual = Penjualan::find($id);
        $dtJual->delete();
        return back();
    }
}
