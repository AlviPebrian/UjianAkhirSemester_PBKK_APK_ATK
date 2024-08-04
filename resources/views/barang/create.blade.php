@extends('layouts.app')

@section('content')
    <h1 style="text-align:center;">Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        @include('barang.form')
        <button type="submit">Simpan</button>
    </form>
@endsection
