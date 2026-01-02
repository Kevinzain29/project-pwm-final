
<div id="umkmTable">
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th class="text-nowrap">No</th>
                    <th class="text-nowrap">Nama UMKM</th>
                    <th class="text-nowrap">Daerah</th>
                    <th class="text-nowrap">Sektor</th>
                    <th class="text-nowrap">Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $umkms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $umkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($umkm->id); ?></td>
                        <td class="text-nowrap"><?php echo e($umkm->nama); ?></td>
                        <td class="text-nowrap"><?php echo e($umkm->daerah->nama ?? '-'); ?></td>
                        <td class="text-nowrap"><?php echo e($umkm->sektor->nama ?? '-'); ?></td>
                        <td class="text-nowrap"><?php echo e($umkm->kategori->nama ?? '-'); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">Tidak ada data UMKM</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <?php echo e($umkms->withQueryString()->links('layouts.pagination')); ?>

    </div>
</div><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/noauth/umkm/table.blade.php ENDPATH**/ ?>