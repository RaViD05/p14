

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Data Mahasiswa</h1>
        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mhs->id); ?></td>
                    <td><?php echo e($mhs->nama); ?></td>
                    <td><?php echo e($mhs->nim); ?></td>
                    <td><?php echo e($mhs->jurusan); ?></td>
                    <td><?php echo e($mhs->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\kuliah\matkul\prak  web\p14\crud-mahasiswa\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>