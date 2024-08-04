

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1  style="text-align:center;">Pengeluaran Barang</h1>
        <a href="<?php echo e(route('pengeluaran_barang.create')); ?>" class="btn btn-primary">Tambah Pengeluaran Barang</a>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success mt-2">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>

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
                <?php $__currentLoopData = $pengeluaranBarangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengeluaranBarang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pengeluaranBarang->id_pengeluaran); ?></td>
                        <td><?php echo e($pengeluaranBarang->tgl_keluar); ?></td>
                        <td><?php echo e($pengeluaranBarang->tujuan); ?></td>
                        <td><?php echo e($pengeluaranBarang->kode_barang); ?></td>
                        <td><?php echo e($pengeluaranBarang->kuantity); ?></td>
                        <td>
                            <a href="<?php echo e(route('pengeluaran_barang.show', $pengeluaranBarang->id_pengeluaran)); ?>" class="btn btn-info">Lihat</a>
                            <a href="<?php echo e(route('pengeluaran_barang.edit', $pengeluaranBarang->id_pengeluaran)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('pengeluaran_barang.destroy', $pengeluaranBarang->id_pengeluaran)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/pengeluaran_barang/index.blade.php ENDPATH**/ ?>