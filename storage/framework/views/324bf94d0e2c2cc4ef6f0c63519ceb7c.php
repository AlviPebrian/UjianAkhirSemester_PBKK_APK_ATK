

<?php $__env->startSection('content'); ?>
    <h1>Supplier Detail</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Kode Supplier:</strong> <?php echo e($supplier->kode_supplier); ?></p>
            <p><strong>Nama Supplier:</strong> <?php echo e($supplier->nama_supplier); ?></p>
            <p><strong>Telepon:</strong> <?php echo e($supplier->telepon); ?></p>
            <p><strong>Alamat:</strong> <?php echo e($supplier->alamat); ?></p>
        </div>
    </div>
    <a href="<?php echo e(route('suppliers.index')); ?>" class="btn btn-secondary mt-3">Back to List</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/suppliers/show.blade.php ENDPATH**/ ?>