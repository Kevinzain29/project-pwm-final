

<?php $__env->startSection('title', 'Regulasi'); ?>

<?php $__env->startSection('content'); ?>


<div class="py-7 min-vh-100" 
     style="background: linear-gradient(135deg, #1d4ed8, #1e3a8a); padding-bottom: 80px;">
    <div class="container">

        
        
        <div class="text-center text-white mb-5" data-aos="fade-down">
            <h1 class="fw-bold display-5 mb-2" style="padding-top: 50px;">
                📑 Regulasi
            </h1>
            <p class="fs-5 mb-0 text-white-75">
                Daftar regulasi dan peraturan resmi sebagai pedoman bersama
            </p>
        </div>

        
        
        <div class="card shadow-lg border-0 rounded-4 mb-5 p-4" data-aos="fade-up" data-aos-delay="200">
            <form method="GET" action="<?php echo e(route('noauth.regulasi.index')); ?>">
                <div class="row g-4">

                    
                    <div class="col-12">
                        <label class="form-label fw-semibold text-secondary">
                            <i class="fas fa-search me-2"></i>Pencarian
                        </label>
                        <div class="input-group shadow-sm">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-search text-primary"></i>
                            </span>
                            <input type="search"
                                name="search"
                                value="<?php echo e($search); ?>"
                                class="form-control border-start-0 ps-0"
                                placeholder="Cari nama regulasi, penerbit, atau jenis..."
                                aria-label="Cari regulasi">
                        </div>
                    </div>

                    
                    <div class="col-md-4">
                        <label class="form-label fw-semibold text-secondary">
                            <i class="fas fa-certificate me-2"></i>Jenis Regulasi
                        </label>
                        <select name="jenis" class="form-select shadow-sm">
                            <option value="">Semua Jenis</option>
                            <?php $__currentLoopData = $listJenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($j); ?>" <?php echo e($jenis == $j ? 'selected' : ''); ?>>
                                    <?php echo e($j); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    
                    <div class="col-md-4">
                        <label class="form-label fw-semibold text-secondary">
                            <i class="fas fa-building me-2"></i>Penerbit
                        </label>
                        <select name="penerbit" class="form-select shadow-sm">
                            <option value="">Semua Penerbit</option>
                            <?php $__currentLoopData = $listPenerbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($p); ?>" <?php echo e($penerbit == $p ? 'selected' : ''); ?>>
                                    <?php echo e($p); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    
                    <div class="col-md-4">
                        <label class="form-label fw-semibold text-secondary d-block">
                            <i class="fas fa-sliders-h me-2"></i>Aksi
                        </label>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary flex-fill shadow-sm">
                                <i class="fas fa-filter me-1"></i>Filter
                            </button>
                            <a href="<?php echo e(route('noauth.regulasi.index')); ?>"
                               class="btn btn-outline-secondary flex-fill shadow-sm">
                                <i class="fas fa-eraser me-1"></i>Reset
                            </a>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        
        
        <div class="card shadow-xl border-0 rounded-4 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="card-header bg-white border-0 py-4 px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-semibold text-primary">
                        <i class="fas fa-list-alt me-2"></i>Daftar Regulasi Terkini
                    </h5>
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                        <i class="fas fa-database me-1"></i><?php echo e($regulasi->total()); ?> Regulasi
                    </span>
                </div>
            </div>

            
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="regulationTable">
                        <thead class="table-primary text-white">
                            <tr>
                                <th class="fw-bold ps-4">Nama Regulasi</th>
                                <th class="fw-bold text-center">Tanggal Terbit</th>
                                <th class="fw-bold text-center">Penerbit</th>
                                <th class="fw-bold text-center">Jenis</th>
                                <th class="fw-bold text-center">File</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $regulasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                
                                <tr class="regulation-row" data-aos="fade-up" data-aos-delay="<?php echo e(100 + ($index * 50)); ?>" data-aos-anchor-placement="top-bottom">
                                    
                                    <td class="ps-4">
                                        <i class="fas fa-file-alt text-primary me-2"></i>
                                        <a href="<?php echo e(route('noauth.regulasi.show', $item->id)); ?>"
                                           class="fw-semibold text-dark text-decoration-none hover-link">
                                            <?php echo e($item->nama); ?>

                                        </a>
                                    </td>

                                    
                                    <td class="text-center text-muted">
                                        <i class="far fa-calendar-alt text-primary me-1"></i>
                                        <?php echo e($item->tanggal_terbit ? $item->tanggal_terbit->format('d M Y') : '-'); ?>

                                    </td>

                                    
                                    <td class="text-center">
                                        <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                                            <?php echo e($item->penerbit ?? '-'); ?>

                                        </span>
                                    </td>

                                    
                                    <td class="text-center">
                                        <span class="badge bg-info-subtle text-info px-3 py-2 rounded-pill">
                                            <?php echo e($item->jenis ?? '-'); ?>

                                        </span>
                                    </td>

                                    
                                    <td class="text-center">
                                        <?php if($item->file): ?>
                                            <a href="<?php echo e(asset('storage/'.$item->file)); ?>"
                                               target="_blank"
                                               class="btn btn-sm btn-outline-primary rounded-pill px-3 shadow-sm">
                                                <i class="fas fa-eye me-1"></i>Lihat
                                            </a>
                                        <?php else: ?>
                                            <span class="text-muted">-</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="5" class="text-center py-5">
                                        <div class="text-muted">
                                            <i class="fas fa-inbox fa-3x mb-3 opacity-25"></i>
                                            <p class="fw-semibold mb-1">Tidak ada regulasi ditemukan</p>
                                            <small>Coba ubah filter pencarian Anda</small>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                
                <?php if($regulasi->hasPages()): ?>
                    <div class="d-flex justify-content-center mt-4">
                        <?php echo e($regulasi->appends(request()->query())->links()); ?>

                    </div>
                <?php endif; ?>

            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\noauth\regulasi\index.blade.php ENDPATH**/ ?>