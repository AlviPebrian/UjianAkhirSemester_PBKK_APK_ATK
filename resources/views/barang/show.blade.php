@extends('layouts.app')

@section('content')
    <h1>Detail Barang</h1>
    <table>
        <tr>
            <th>Kode Barang</th>
            <td>{{ $barang->kode_barang }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $barang->nama_barang }}</td>
        </tr>
        <tr>
            <th>Unit</th>
            <td>{{ $barang->unit }}</td>
        </tr>
        <tr>
            <th>Ukuran</th>
            <td>{{ $barang->ukuran }}</td>
        </tr>
        <tr>
            <th>Warna</th>
            <td>{{ $barang->warna }}</td>
        </tr>
        <tr>
            <th>Jenis</th>
            <td>{{ $barang->jenis }}</td>
        </tr>
        <tr>
            <th>Harga Satuan</th>
            <td>{{ $barang->harga_satuan }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $barang->stok }}</td>
        </tr>
    </table>
    <a href="{{ route('barang.index') }}">Kembali</a>
@endsection
