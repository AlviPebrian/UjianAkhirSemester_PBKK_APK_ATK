@extends('layouts.app')

@section('content')
    <div class="container">
        <h1  style="text-align:center;">Detail Pengeluaran Barang</h1>
        <div class="form-group">
            <label>ID Pengeluaran:</label>
            <p>{{ $pengeluaranBarang->id_pengeluaran }}</p>
        </div>
        <div class="form-group">
            <label>Tanggal Keluar:</label>
            <p>{{ $pengeluaranBarang->tgl_keluar }}</p>
        </div>
        <div class="form-group">
            <label>Tujuan:</label>
            <p>{{ $pengeluaranBarang->tujuan }}</p>
        </div>
        <div class="form-group">
            <label>Kode Barang:</label>
            <p>{{ $pengeluaranBarang->kode_barang }}</p>
        </div>
        <div class="form-group">
            <label>Kuantitas:</label>
            <p>{{ $pengeluaranBarang->kuantity }}</p>
        </div>
        <a href="{{ route('pengeluaran_barang.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
