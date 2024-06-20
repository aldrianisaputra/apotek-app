<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;


class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtBeli = pembelian::all();
        return view('pembelian/datapembelian', compact('dtBeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembelian/tambahpembelian');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pembelian::create([
            'tgl_pembelian' => $request->tgl_pembelian,
            'id_supplier' => $request->id_supplier,
            'id_obat' => $request->id_obat,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
        ]);
        return redirect('datapembelian')->with('success', 'Data obat berhasil ditambahkan.');
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
        $dtBeli = Pembelian::where('id', $id)->first();
        return view('pembelian/editpembelian', ['dtBeli' => $dtBeli]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dtBeli = Pembelian::find($id);
        $dtBeli->update($request->all());
        
        return redirect('datapembelian')->with('success', 'Data obat berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dtBeli = Pembelian::find($id);
        $dtBeli->delete();
        return back();
    }
}
