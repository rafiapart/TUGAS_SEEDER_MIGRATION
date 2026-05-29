<?php $__env->startSection('content'); ?>
    <div class = "container mt-2">
        <h2>Halaman Manajemen Mata Kuliah</h2>
        <div class= "card p-3">
            <div class= 'mb2'>
                <a href="<?php echo e(route('form-create-matakuliah')); ?>" class="btn btn-primary btn-sm"> Tambah data </a>
            </div>

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $dataMataKuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <th scope="row" class="text-center"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($item->kode_matakuliah); ?></td>
                        <td><?php echo e($item->nama_matakuliah); ?></td>
                        <td><?php echo e($item->sks); ?></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tugasAkademik\resources\views/pages/matakuliah/daftar-matakuliah.blade.php ENDPATH**/ ?>