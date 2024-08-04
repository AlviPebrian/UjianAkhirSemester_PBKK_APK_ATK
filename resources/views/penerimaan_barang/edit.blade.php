@extends('layouts.app')

@section('content')
    <div class="container">
        <h1  style="text-align:center;">Edit Penerimaan Barang</h1>
        <form action="{{ route('penerimaan_barang.update', $penerimaanBarang->id_penerimaan) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tgl_penyimpanan">Tanggal Penyimpanan</label>
                <input type="date" class="form-control" id="tgl_penyimpanan" name="tgl_penyimpanan" value="{{ $penerimaanBarang->tgl_penyimpanan }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required>{{ $penerimaanBarang->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="number" class="form-control" id="kode_barang" name="kode_barang" value="{{ $penerimaanBarang->kode_barang }}" required>
            </div>
            <div class="form-group">
                <label for="kuantity">Kuantitas</label>
                <input type="number" class="form-control" id="kuantity" name="kuantity" value="{{ $penerimaanBarang->kuantity }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
