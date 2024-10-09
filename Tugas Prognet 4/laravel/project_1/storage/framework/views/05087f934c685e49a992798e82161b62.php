

<?php $__env->startSection('content'); ?>
    <h1>Daftar Sayur</h1>
    <a href="<?php echo e(route('sayurs.create')); ?>" class="btn btn-primary">Tambah Sayur</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $sayurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sayur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($sayur->nama); ?></td>
                    <td><?php echo e($sayur->harga); ?></td>
                    <td><?php echo e($sayur->jumlah); ?></td>
                    <td>
                        <a href="<?php echo e(route('sayurs.edit', $sayur->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('sayurs.destroy', $sayur->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bunga Alyssa\project_1\resources\views/sayurs/index.blade.php ENDPATH**/ ?>