

<?php $__env->startSection('content'); ?>
    <h1>Tambah Sayur</h1>
    <form action="<?php echo e(route('sayurs.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" step="0.01" name="harga" class="form-control" id="harga" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" id="jumlah" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo e(route('sayurs.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bunga Alyssa\project_1\resources\views/sayurs/create.blade.php ENDPATH**/ ?>