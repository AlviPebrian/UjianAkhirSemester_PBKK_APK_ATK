@extends('layouts.app')

@section('content')
<h1  style="text-align:center;">Show Order Barang</h1>
<p>No PO: {{ $orderBarang->no_po }}</p>
<p>Tanggal: {{ $orderBarang->tanggal }}</p>
<p>Kode Supplier: {{ $orderBarang->kode_supplier }}</p>
<p>PPN: {{ $orderBarang->PPN }}</p>
<a href="{{ route('order_barang.index') }}">Back to List</a>
@endsection
