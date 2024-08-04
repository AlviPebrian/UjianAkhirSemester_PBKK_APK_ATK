

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

form {
    display: inline;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}

button:hover {
    background-color: #0056b3;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="number"], input[type="date"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

</style>

<?php $__env->startSection('content'); ?>
<h1  style="text-align:center;">Order Barang</h1>
<a href="<?php echo e(route('order_barang.create')); ?>" class="button">Create New Order</a>
<table>
    <thead>
        <tr>
            <th>No PO</th>
            <th>Tanggal</th>
            <th>Kode Supplier</th>
            <th>PPN</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $orderBarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($order->no_po); ?></td>
            <td><?php echo e($order->tanggal); ?></td>
            <td><?php echo e($order->kode_supplier); ?></td>
            <td><?php echo e($order->PPN); ?></td>
            <td>
                <a href="<?php echo e(route('order_barang.show', $order->no_po)); ?>">Show</a>
                <a href="<?php echo e(route('order_barang.edit', $order->no_po)); ?>">Edit</a>
                <form action="<?php echo e(route('order_barang.destroy', $order->no_po)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/order_barang/index.blade.php ENDPATH**/ ?>