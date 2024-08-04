

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1  style="text-align:center;">Penerimaan Barang</h1>
        <a href="<?php echo e(route('penerimaan_barang.create')); ?>" class="btn btn-primary">Tambah Penerimaan Barang</a>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success mt-2">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>

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
                <?php $__currentLoopData = $penerimaanBarangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penerimaanBarang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($penerimaanBarang->id_penerimaan); ?></td>
                        <td><?php echo e($penerimaanBarang->tgl_penyimpanan); ?></td>
                        <td><?php echo e($penerimaanBarang->alamat); ?></td>
                        <td><?php echo e($penerimaanBarang->kode_barang); ?></td>
                        <td><?php echo e($penerimaanBarang->kuantity); ?></td>
                        <td>
                            <a href="<?php echo e(route('penerimaan_barang.show', $penerimaanBarang->id_penerimaan)); ?>" class="btn btn-info">Lihat</a>
                            <a href="<?php echo e(route('penerimaan_barang.edit', $penerimaanBarang->id_penerimaan)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('penerimaan_barang.destroy', $penerimaanBarang->id_penerimaan)); ?>" method="POST" style="display:inline-block;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/penerimaan_barang/index.blade.php ENDPATH**/ ?>