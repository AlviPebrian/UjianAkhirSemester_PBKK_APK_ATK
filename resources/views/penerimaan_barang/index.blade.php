@extends('layouts.app')

@section('content')
    <div class="container">
        <h1  style="text-align:center;">Penerimaan Barang</h1>
        <a href="{{ route('penerimaan_barang.create') }}" class="btn btn-primary">Tambah Penerimaan Barang</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif

        <table class="table mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal Penyimpanan</th>
                    <th>Alamat</th>
                    <th>Kode Barang</th>
                    <th>Kuantitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penerimaanBarangs as $penerimaanBarang)
                    <tr>
                        <td>{{ $penerimaanBarang->id_penerimaan }}</td>
                        <td>{{ $penerimaanBarang->tgl_penyimpanan }}</td>
                        <td>{{ $penerimaanBarang->alamat }}</td>
                        <td>{{ $penerimaanBarang->kode_barang }}</td>
                        <td>{{ $penerimaanBarang->kuantity }}</td>
                        <td>
                            <a href="{{ route('penerimaan_barang.show', $penerimaanBarang->id_penerimaan) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('penerimaan_barang.edit', $penerimaanBarang->id_penerimaan) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('penerimaan_barang.destroy', $penerimaanBarang->id_penerimaan) }}" method="POST" style="display:inline-block;">
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
