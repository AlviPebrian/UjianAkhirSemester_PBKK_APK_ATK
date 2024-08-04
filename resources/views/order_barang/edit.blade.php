@extends('layouts.app')

@section('content')
<h1  style="text-align:center;">Edit Order Barang</h1>
<form action="{{ route('order_barang.update', $orderBarang->no_po) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="{{ $orderBarang->tanggal }}" required>
    </div>
    <div class="form-group">
        <label>Kode Supplier:</label>
        <input type="number" name="kode_supplier" value="{{ $orderBarang->kode_supplier }}" required>
    </div>
    <div class="form-group">
        <label>PPN:</label>
        <input type="number" name="PPN" value="{{ $orderBarang->PPN }}" required>
    </div>
    <button type="submit">Update</button>
</form>
@endsection
