

<?php $__env->startSection('content'); ?>
    <h1  style="text-align:center;">Edit Barang</h1>
    <form action="<?php echo e(route('barang.update', $barang->kode_barang)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('barang.form', ['barang' => $barang], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit">Perbarui</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/barang/edit.blade.php ENDPATH**/ ?>