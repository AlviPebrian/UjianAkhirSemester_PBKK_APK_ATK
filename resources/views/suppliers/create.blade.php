@extends('layouts.app')

@section('content')
    <h1  style="text-align:center;">Create Supplier</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_supplier">Nama Supplier:</label>
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon:</label>
            <input type="text" class="form-control" id="telepon" name="telepon" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
