@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
    <h1 style="text-align:center;">Daftar Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Unit</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Jenis</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
                <tr>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->unit }}</td>
                    <td>{{ $item->ukuran }}</td>
                    <td>{{ $item->warna }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ $item->harga_satuan }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>
                        <a href="{{ route('barang.show', $item->kode_barang) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('barang.edit', $item->kode_barang) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barang.destroy', $item->kode_barang) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
