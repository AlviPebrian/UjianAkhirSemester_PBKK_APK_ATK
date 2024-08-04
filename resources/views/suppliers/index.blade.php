@extends('layouts.app')

@section('content')
    <h1  style="text-align:center;">Suppliers</h1>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">Add Supplier</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->kode_supplier }}</td>
                    <td>{{ $supplier->nama_supplier }}</td>
                    <td>{{ $supplier->telepon }}</td>
                    <td>{{ $supplier->alamat }}</td>
                    <td>
                        <a href="{{ route('suppliers.show', $supplier->kode_supplier) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('suppliers.edit', $supplier->kode_supplier) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('suppliers.destroy', $supplier->kode_supplier) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
