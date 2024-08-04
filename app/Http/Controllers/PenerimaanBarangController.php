<?php

namespace App\Http\Controllers;

use App\Models\PenerimaanBarang;
use Illuminate\Http\Request;

class PenerimaanBarangController extends Controller
{
    public function index()
    {
        $penerimaanBarangs = PenerimaanBarang::all();
        return view('penerimaan_barang.index', compact('penerimaanBarangs'));
    }

    public function create()
    {
        return view('penerimaan_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_penyimpanan' => 'required|date',
            'alamat' => 'required',
            'kode_barang' => 'required|integer',
            'kuantity' => 'required|integer',
        ]);

        PenerimaanBarang::create($request->all());

        return redirect()->route('penerimaan_barang.index')->with('success', 'Data penerimaan barang berhasil ditambahkan.');
    }

    public function show(PenerimaanBarang $penerimaanBarang)
    {
        return view('penerimaan_barang.show', compact('penerimaanBarang'));
    }

    public function edit(PenerimaanBarang $penerimaanBarang)
    {
        return view('penerimaan_barang.edit', compact('penerimaanBarang'));
    }

    public function update(Request $request, PenerimaanBarang $penerimaanBarang)
    {
        $request->validate([
            'tgl_penyimpanan' => 'required|date',
            'alamat' => 'required',
            'kode_barang' => 'required|integer',
            'kuantity' => 'required|integer',
        ]);

        $penerimaanBarang->update($request->all());

        return redirect()->route('penerimaan_barang.index')->with('success', 'Data penerimaan barang berhasil diupdate.');
    }

    public function destroy(PenerimaanBarang $penerimaanBarang)
    {
        $penerimaanBarang->delete();

        return redirect()->route('penerimaan_barang.index')->with('success', 'Data penerimaan barang berhasil dihapus.');
    }
}
