<?php

namespace App\Http\Controllers;

use App\Models\PengeluaranBarang;
use Illuminate\Http\Request;

class PengeluaranBarangController extends Controller
{
    public function index()
    {
        $pengeluaranBarangs = PengeluaranBarang::all();
        return view('pengeluaran_barang.index', compact('pengeluaranBarangs'));
    }

    public function create()
    {
        return view('pengeluaran_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_keluar' => 'required|date',
            'tujuan' => 'required|string|max:150',
            'kode_barang' => 'required|integer',
            'kuantity' => 'required|integer',
        ]);

        PengeluaranBarang::create($request->all());

        return redirect()->route('pengeluaran_barang.index')->with('success', 'Data pengeluaran barang berhasil ditambahkan.');
    }

    public function show(PengeluaranBarang $pengeluaranBarang)
    {
        return view('pengeluaran_barang.show', compact('pengeluaranBarang'));
    }

    public function edit(PengeluaranBarang $pengeluaranBarang)
    {
        return view('pengeluaran_barang.edit', compact('pengeluaranBarang'));
    }

    public function update(Request $request, PengeluaranBarang $pengeluaranBarang)
    {
        $request->validate([
            'tgl_keluar' => 'required|date',
            'tujuan' => 'required|string|max:150',
            'kode_barang' => 'required|integer',
            'kuantity' => 'required|integer',
        ]);

        $pengeluaranBarang->update($request->all());

        return redirect()->route('pengeluaran_barang.index')->with('success', 'Data pengeluaran barang berhasil diupdate.');
    }

    public function destroy(PengeluaranBarang $pengeluaranBarang)
    {
        $pengeluaranBarang->delete();

        return redirect()->route('pengeluaran_barang.index')->with('success', 'Data pengeluaran barang berhasil dihapus.');
    }
}
