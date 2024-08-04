@extends('layouts.app')

@section('content')
    <div class="container">
        <h1  style="text-align:center;">Edit Pengeluaran Barang</h1>
        <form action="{{ route('pengeluaran_barang.update', $pengeluaranBarang->id_pengeluaran) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tgl_keluar">Tanggal Keluar</label>
                <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" value="{{ $pengeluaranBarang->tgl_keluar }}" required>
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" maxlength="150" value="{{ $pengeluaranBarang->tujuan }}" required>
            </div>
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="number" class="form-control" id="kode_barang" name="kode_barang" value="{{ $pengeluaranBarang->kode_barang }}" required>
            </div>
            <div class="form-group">
                <label for="kuantity">Kuantitas</label>
                <input type="number" class="form-control" id="kuantity" name="kuantity" value="{{ $pengeluaranBarang->kuantity }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
