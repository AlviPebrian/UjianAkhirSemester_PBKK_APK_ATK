@extends('layouts.app')

@section('content')
    <div class="container">
        <h1  style="text-align:center;">Pengeluaran Barang</h1>
        <a href="{{ route('pengeluaran_barang.create') }}" class="btn btn-primary">Tambah Pengeluaran Barang</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif

        <table class="table mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal Keluar</th>
                    <th>Tujuan</th>
                    <th>Kode Barang</th>
                    <th>Kuantitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengeluaranBarangs as $pengeluaranBarang)
                    <tr>
                        <td>{{ $pengeluaranBarang->id_pengeluaran }}</td>
                        <td>{{ $pengeluaranBarang->tgl_keluar }}</td>
                        <td>{{ $pengeluaranBarang->tujuan }}</td>
                        <td>{{ $pengeluaranBarang->kode_barang }}</td>
                        <td>{{ $pengeluaranBarang->kuantity }}</td>
                        <td>
                            <a href="{{ route('pengeluaran_barang.show', $pengeluaranBarang->id_pengeluaran) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('pengeluaran_barang.edit', $pengeluaranBarang->id_pengeluaran) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pengeluaran_barang.destroy', $pengeluaranBarang->id_pengeluaran) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
