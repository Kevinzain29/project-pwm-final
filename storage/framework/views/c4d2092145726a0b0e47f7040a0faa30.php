

<?php $__env->startSection('title', 'Edit Regulasi'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1>Edit Regulasi</h1>
    <?php echo $__env->make('admin.regulasi.form', ['regulasi' => $regulasi], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\regulasi\edit.blade.php ENDPATH**/ ?>