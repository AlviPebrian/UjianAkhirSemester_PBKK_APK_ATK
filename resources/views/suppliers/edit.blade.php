@extends('layouts.app')

@section('content')
    <h1  style="text-align:center;">Edit Supplier</h1>
    <form action="{{ route('suppliers.update', $supplier->kode_supplier) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_supplier">Nama Supplier:</label>
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ $supplier->nama_supplier }}" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon:</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $supplier->telepon }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ $supplier->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
