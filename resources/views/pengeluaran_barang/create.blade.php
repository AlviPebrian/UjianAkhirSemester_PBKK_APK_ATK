@extends('layouts.app')

@section('content')
    <div class="container">
        <h1  style="text-align:center;">Tambah Pengeluaran Barang</h1>
        <form action="{{ route('pengeluaran_barang.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tgl_keluar">Tanggal Keluar</label>
                <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" required>
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" maxlength="150" required>
            </div>
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="number" class="form-control" id="kode_barang" name="kode_barang" required>
            </div>
            <div class="form-group">
                <label for="kuantity">Kuantitas</label>
                <input type="number" class="form-control" id="kuantity" name="kuantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
