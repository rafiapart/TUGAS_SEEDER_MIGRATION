<?php $__env->startSection('content'); ?>
    <div class = "container mt-2">
        <h2>Form Mata Kuliah</h2>
        <div class= "card">
            <div class="card-header">Tambah Mata Kuliah</div>
            <div class="card-body">
                <form action="<?php echo e(route('store-matakuliah')); ?>" method="POST">
                    
                    <?php echo csrf_field(); ?> 
                    <div class="mb-3">
                        <label class="form-label">Kode Mata Kuliah</label>
                        <input name="kode_matakuliah" type="text" class="form-control">
                        <?php $__errorArgs = ['kode_matakuliah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="form-text"><?php echo e($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Mata Kuliah</label>
                        <input name="nama_matakuliah" type="text" class="form-control">
                        <?php $__errorArgs = ['nama_matakuliah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="form-text"><?php echo e($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sks</label>
                        <input name="sks" type="text" class="form-control">
                        <?php $__errorArgs = ['sks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="form-text"><?php echo e($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tugasAkademik\resources\views/pages/matakuliah/form-matakuliah.blade.php ENDPATH**/ ?>