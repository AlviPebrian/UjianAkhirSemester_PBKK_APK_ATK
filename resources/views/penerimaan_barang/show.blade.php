@extends('layouts.app')

@section('content')
    <div class="container">
        <h1  style="text-align:center;">Detail Penerimaan Barang</h1>
        <div class="form-group">
            <label>ID Penerimaan:</label>
            <p>{{ $penerimaanBarang->id_penerimaan }}</p>
        </div>
        <div class="form-group">
            <label>Tanggal Penyimpanan:</label>
            <p>{{ $penerimaanBarang->tgl_penyimpanan }}</p>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <p>{{ $penerimaanBarang->alamat }}</p>
        </div>
        <div class="form-group">
            <label>Kode Barang:</label>
            <p>{{ $penerimaanBarang->kode_barang }}</p>
        </div>
        <div class="form-group">
            <label>Kuantitas:</label>
            <p>{{ $penerimaanBarang->kuantity }}</p>
        </div>
        <a href="{{ route('penerimaan_barang.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
