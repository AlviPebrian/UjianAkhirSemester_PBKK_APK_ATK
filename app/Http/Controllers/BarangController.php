<?php

namespace App\Http\Controllers;

use App\Models\Barang; // Tambahkan ini untuk menggunakan model Barang
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all(); // Ubah ini menjadi Barang::all()
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:150',
            'unit' => 'required|in:Pcs,Buah,Lembar',
            'ukuran' => 'required|max:150',
            'warna' => 'required|max:50',
            'jenis' => 'required|max:50',
            'harga_satuan' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Barang::create($validatedData);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:150',
            'unit' => 'required|in:Pcs,Buah,Lembar',
            'ukuran' => 'required|max:150',
            'warna' => 'required|max:50',
            'jenis' => 'required|max:50',
            'harga_satuan' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $barang->update($validatedData);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }
}
