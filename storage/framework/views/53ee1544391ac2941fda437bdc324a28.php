

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Tambah Pengeluaran Barang</h1>
        <form action="<?php echo e(route('pengeluaran_barang.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="tgl_keluar">Tanggal Keluar</label>
                <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" required>
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" maxlength="150" required>
            </div>
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="number" class="form-control" id="kode_barang" name="kode_barang" required>
            </div>
            <div class="form-group">
                <label for="kuantity">Kuantitas</label>
                <input type="number" class="form-control" id="kuantity" name="kuantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Alat-Tulis-Kantor\resources\views/pengeluaran_barang/create.blade.php ENDPATH**/ ?>