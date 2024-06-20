<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtSup = supplier::all();
        return view('supplier/datasupplier', compact('dtSup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier/tambahsupplier');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Supplier::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
        ]);
        return redirect('datasupplier')->with('success', 'Data obat berhasil ditambahkan.');
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
        $dtSup = Supplier::where('id', $id)->first();
        return view('supplier/editsupplier', ['dtSup' => $dtSup]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dtSup = Supplier::find($id);
        $dtSup->update($request->all());
        
        return redirect('datasupplier')->with('success', 'Data obat berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dtSup = Supplier::find($id);
        $dtSup->delete();
        return back();
    }
}
