

<?php $__env->startSection('content'); ?>
    <h1  style="text-align:center;">Edit Supplier</h1>
    <form action="<?php echo e(route('suppliers.update', $supplier->kode_supplier)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="nama_supplier">Nama Supplier:</label>
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="<?php echo e($supplier->nama_supplier); ?>" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon:</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo e($supplier->telepon); ?>" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" required><?php echo e($supplier->alamat); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/suppliers/edit.blade.php ENDPATH**/ ?>