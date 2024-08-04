<?php

namespace App\Http\Controllers;

use App\Models\OrderBarang;
use Illuminate\Http\Request;

class OrderBarangController extends Controller
{
    public function index()
    {
        $orderBarang = OrderBarang::all();
        return view('order_barang.index', compact('orderBarang'));
    }

    public function create()
    {
        return view('order_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_supplier' => 'required|integer',
            'PPN' => 'required|integer',
        ]);

        OrderBarang::create($request->all());

        return redirect()->route('order_barang.index')->with('success', 'Order Barang created successfully.');
    }

    public function show(OrderBarang $orderBarang)
    {
        return view('order_barang.show', compact('orderBarang'));
    }

    public function edit(OrderBarang $orderBarang)
    {
        return view('order_barang.edit', compact('orderBarang'));
    }

    public function update(Request $request, OrderBarang $orderBarang)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_supplier' => 'required|integer',
            'PPN' => 'required|integer',
        ]);

        $orderBarang->update($request->all());

        return redirect()->route('order_barang.index')->with('success', 'Order Barang updated successfully.');
    }

    public function destroy(OrderBarang $orderBarang)
    {
        $orderBarang->delete();

        return redirect()->route('order_barang.index')->with('success', 'Order Barang deleted successfully.');
    }
}

