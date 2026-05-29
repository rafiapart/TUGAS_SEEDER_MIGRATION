<?php $__env->startSection('content'); ?>
    <div class = "container mt-2">
        <h2>Detail Data Dosen</h2>
        <div class= "card">
            <div class="card-header">Detail data Dosen</div>
            <div class="card-body">
                <p>NIDN : <?php echo e($detailDosen->nidn); ?></p>
                <p>Nama : <?php echo e($detailDosen->nama); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tugasAkademik\resources\views/pages/dosen/detail-dosen.blade.php ENDPATH**/ ?>