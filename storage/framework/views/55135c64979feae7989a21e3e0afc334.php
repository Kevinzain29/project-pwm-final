

<?php $__env->startSection('content'); ?>
<div class="hero-section" style="background: linear-gradient(135deg, #1e4db7 0%, #2563eb 100%); position: relative; overflow: hidden;">
    <div class="hero-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.1);"></div>
    <div class="hero-pattern" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%);"></div>
    <div class="container py-5" style="position: relative; z-index: 2;">
        
        <div class="text-center text-white py-4" data-aos="fade-down">
            <h1 class="display-4 fw-bold mb-3" style="text-shadow: 0 2px 4px rgba(0,0,0,0.3);">Portal Berita Terkini</h1>
            <p class="lead mb-4" style="opacity: 0.9;">Informasi Terkini Yang Ada Di LP PWM DIY</p>
            <div class="d-flex justify-content-center">
                <div class="bg-black bg-opacity-20 rounded-pill px-4 py-2">
                    <i class="fas fa-newspaper me-2 "></i>
                    <span class="fw-semibold"><?php echo e($news->total()); ?> Artikel Tersedia</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light" style="min-height: 100vh;">
    <div class="container py-5">

        <div class="row g-4">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="col-lg-4 col-md-6" 
                     data-aos="fade-up" 
                     data-aos-delay="<?php echo e(($index % 3) * 150); ?>">
                    <article class="news-card">
                        <a href="<?php echo e(route('noauth.news.show', $item->id)); ?>" class="text-decoration-none">
                            <div class="card border-0 shadow-sm rounded-3 h-100 overflow-hidden"
                                 style="transition: all 0.3s ease; cursor: pointer;"
                                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(30, 77, 183, 0.15)';"
                                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)';">
                                 
                                <div class="position-relative" style="height: 220px; overflow: hidden;">
                                    <?php if($item->gambar): ?>
                                        <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" 
                                            class="card-img-top w-100 h-100"
                                            alt="<?php echo e($item->judul); ?>"
                                            style="object-fit: cover; transition: transform 0.3s ease;"
                                            onmouseover="this.style.transform='scale(1.05)';"
                                            onmouseout="this.style.transform='scale(1)';">
                                    <?php else: ?>
                                        <div class="w-100 h-100 bg-gradient-primary d-flex align-items-center justify-content-center">
                                            <i class="fas fa-newspaper text-white" style="font-size: 3rem; opacity: 0.5;"></i>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="position-absolute top-0 start-0 m-3">
                                        <span class="badge bg-primary bg-opacity-90 rounded-pill px-3 py-2 fw-semibold">
                                            <i class="fas fa-tag me-1"></i>Berita
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="mb-3">
                                        <h5 class="card-title fw-bold text-dark lh-base mb-3" 
                                            style="height: 4rem; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            <?php echo e($item->judul); ?>

                                        </h5>
                                    </div>
                                    
                                    <div class="mb-3 flex-grow-1">
                                        <p class="card-text text-muted lh-base" 
                                           style="font-size: 0.9rem; height: 4.5rem; overflow: hidden;">
                                            <?php echo e(Str::limit(strip_tags($item->deskripsi), 120, '...')); ?>

                                        </p>
                                    </div>
                                    
                                    <div class="mt-auto">
                                        <div class="d-flex align-items-center justify-content-between pt-3 border-top border-light mb-3">
                                            <div class="d-flex align-items-center text-muted small">
                                                <i class="fas fa-calendar-alt me-2 text-primary"></i>
                                                <span><?php echo e($item->created_at->format('d M Y')); ?></span>
                                            </div>
                                            <div class="d-flex align-items-center text-muted small">
                                                <i class="fas fa-user me-2 text-primary"></i>
                                                <span style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; max-width: 100px;"><?php echo e($item->penulis); ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center">
                                            <span class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                                Baca Selengkapnya
                                                <i class="fas fa-arrow-right ms-2"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if($news->isEmpty()): ?>
        <div class="text-center py-5" data-aos="zoom-in">
            <div class="mb-4">
                <i class="fas fa-newspaper text-muted" style="font-size: 5rem; opacity: 0.3;"></i>
            </div>
            <h4 class="text-muted">Belum ada berita tersedia</h4>
            <p class="text-muted">Silakan cek kembali nanti untuk artikel terbaru</p>
        </div>
        <?php endif; ?>

        <div class="row mt-5 pt-4 border-top border-light" data-aos="fade-up">
            <div class="col-md-6 mb-4 mb-md-0">
                <a href="<?php echo e(route('noauth.news.index')); ?>" 
                    class="btn btn-light px-4 py-2 rounded-pill fw-semibold shadow-sm border border-dark">
                    ← Kembali ke Berita
                </a>
            </div>

            <div class="col-md-6">
                <div class="d-flex justify-content-md-end">
                    <div class="pagination-wrapper">
                        <?php echo e($news->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/noauth/news/all.blade.php ENDPATH**/ ?>