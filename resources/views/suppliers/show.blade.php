@extends('layouts.app')

@section('content')
    <h1  style="text-align:center;">Supplier Detail</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Kode Supplier:</strong> {{ $supplier->kode_supplier }}</p>
            <p><strong>Nama Supplier:</strong> {{ $supplier->nama_supplier }}</p>
            <p><strong>Telepon:</strong> {{ $supplier->telepon }}</p>
            <p><strong>Alamat:</strong> {{ $supplier->alamat }}</p>
        </div>
    </div>
    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection
