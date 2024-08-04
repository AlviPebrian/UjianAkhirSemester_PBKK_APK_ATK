@php
    $barang = $barang ?? new \App\Models\Barang();
@endphp

<div class="form-group">
    <label for="nama_barang" class="form-label">Nama Barang</label>
    <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ old('nama_barang', $barang->nama_barang) }}">
</div>
<div class="form-group">
    <label for="unit" class="form-label">Unit</label>
    <select name="unit" id="unit" class="form-control">
        <option value="Pcs" {{ old('unit', $barang->unit) == 'Pcs' ? 'selected' : '' }}>Pcs</option>
        <option value="Buah" {{ old('unit', $barang->unit) == 'Buah' ? 'selected' : '' }}>Buah</option>
        <option value="Lembar" {{ old('unit', $barang->unit) == 'Lembar' ? 'selected' : '' }}>Lembar</option>
    </select>
</div>
<div class="form-group">
    <label for="ukuran" class="form-label">Ukuran</label>
    <input type="text" name="ukuran" id="ukuran" class="form-control" value="{{ old('ukuran', $barang->ukuran) }}">
</div>
<div class="form-group">
    <label for="warna" class="form-label">Warna</label>
    <input type="text" name="warna" id="warna" class="form-control" value="{{ old('warna', $barang->warna) }}">
</div>
<div class="form-group">
    <label for="jenis" class="form-label">Jenis</label>
    <input type="text" name="jenis" id="jenis" class="form-control" value="{{ old('jenis', $barang->jenis) }}">
</div>
<div class="form-group">
    <label for="harga_satuan" class="form-label">Harga Satuan</label>
    <input type="number" name="harga_satuan" id="harga_satuan" class="form-control" value="{{ old('harga_satuan', $barang->harga_satuan) }}">
</div>
<div class="form-group">
    <label for="stok" class="form-label">Stok</label>
    <input type="number" name="stok" id="stok" class="form-control" value="{{ old('stok', $barang->stok) }}">
</div>
