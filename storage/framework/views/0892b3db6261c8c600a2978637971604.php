

<?php $__env->startSection('content'); ?>
    <h1  style="text-align:center;">Suppliers</h1>
    <a href="<?php echo e(route('suppliers.create')); ?>" class="btn btn-primary mb-3">Add Supplier</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($supplier->kode_supplier); ?></td>
                    <td><?php echo e($supplier->nama_supplier); ?></td>
                    <td><?php echo e($supplier->telepon); ?></td>
                    <td><?php echo e($supplier->alamat); ?></td>
                    <td>
                        <a href="<?php echo e(route('suppliers.show', $supplier->kode_supplier)); ?>" class="btn btn-info btn-sm">Show</a>
                        <a href="<?php echo e(route('suppliers.edit', $supplier->kode_supplier)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('suppliers.destroy', $supplier->kode_supplier)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/suppliers/index.blade.php ENDPATH**/ ?>