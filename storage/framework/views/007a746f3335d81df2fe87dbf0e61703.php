

<?php $__env->startSection('content'); ?>
    <h1 style="text-align:center;">Tambah Barang</h1>
    <form action="<?php echo e(route('barang.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('barang.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/barang/create.blade.php ENDPATH**/ ?>