

<?php $__env->startSection('content'); ?>
    <h1>Detail Barang</h1>
    <table>
        <tr>
            <th>Kode Barang</th>
            <td><?php echo e($barang->kode_barang); ?></td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td><?php echo e($barang->nama_barang); ?></td>
        </tr>
        <tr>
            <th>Unit</th>
            <td><?php echo e($barang->unit); ?></td>
        </tr>
        <tr>
            <th>Ukuran</th>
            <td><?php echo e($barang->ukuran); ?></td>
        </tr>
        <tr>
            <th>Warna</th>
            <td><?php echo e($barang->warna); ?></td>
        </tr>
        <tr>
            <th>Jenis</th>
            <td><?php echo e($barang->jenis); ?></td>
        </tr>
        <tr>
            <th>Harga Satuan</th>
            <td><?php echo e($barang->harga_satuan); ?></td>
        </tr>
        <tr>
            <th>Stok</th>
            <td><?php echo e($barang->stok); ?></td>
        </tr>
    </table>
    <a href="<?php echo e(route('barang.index')); ?>">Kembali</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/barang/show.blade.php ENDPATH**/ ?>