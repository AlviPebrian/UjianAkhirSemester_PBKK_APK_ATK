

<?php $__env->startSection('title', 'Daftar Barang'); ?>

<?php $__env->startSection('content'); ?>
    <h1 style="text-align:center;">Daftar Barang</h1>
    <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-primary mb-3">Tambah Barang</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Unit</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Jenis</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->kode_barang); ?></td>
                    <td><?php echo e($item->nama_barang); ?></td>
                    <td><?php echo e($item->unit); ?></td>
                    <td><?php echo e($item->ukuran); ?></td>
                    <td><?php echo e($item->warna); ?></td>
                    <td><?php echo e($item->jenis); ?></td>
                    <td><?php echo e($item->harga_satuan); ?></td>
                    <td><?php echo e($item->stok); ?></td>
                    <td>
                        <a href="<?php echo e(route('barang.show', $item->kode_barang)); ?>" class="btn btn-info btn-sm">Detail</a>
                        <a href="<?php echo e(route('barang.edit', $item->kode_barang)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('barang.destroy', $item->kode_barang)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/barang/index.blade.php ENDPATH**/ ?>