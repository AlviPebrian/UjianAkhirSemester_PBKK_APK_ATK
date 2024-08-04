@extends('layouts.app')

@section('content')
    <h1  style="text-align:center;">Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->kode_barang) }}" method="POST">
        @csrf
        @method('PUT')
        @include('barang.form', ['barang' => $barang])
        <button type="submit">Perbarui</button>
    </form>
@endsection
