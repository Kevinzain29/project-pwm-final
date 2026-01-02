<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="card shadow-lg border-0" data-aos="fade-up" data-aos-duration="1000">
                
                <?php if($mainNews->gambar): ?>
                    
                    <div style="overflow: hidden; border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
                        <img src="<?php echo e(asset('storage/' . $mainNews->gambar)); ?>" 
                            class="card-img-top"
                            alt="<?php echo e($mainNews->judul); ?>"
                            data-aos="zoom-out" 
                            data-aos-delay="200"
                            style="height: 450px; width: 100%; object-fit: cover;">
                    </div>
                <?php endif; ?>

                <div class="card-body p-4 p-md-5">
                    
                    <h2 class="fw-bold mb-3" data-aos="fade-right" data-aos-delay="400">
                        <?php echo e($mainNews->judul); ?>

                    </h2>

                    
                    <p class="text-muted mb-4" data-aos="fade-right" data-aos-delay="500">
                        <small>
                            <i class="fas fa-calendar-alt me-1"></i> <?php echo e($mainNews->created_at->format('d M Y')); ?> 
                            <span class="mx-2">|</span> 
                            <i class="fas fa-user me-1"></i> <?php echo e($mainNews->penulis); ?>

                        </small>
                    </p>

                    <hr class="mb-4" data-aos="fade-in" data-aos-delay="600">

                    
                    <div class="card-text text-dark" 
                         style="white-space: pre-line; line-height: 1.8; font-size: 1.1rem;" 
                         data-aos="fade-up" 
                         data-aos-delay="700">
                        <?php echo nl2br(e($mainNews->deskripsi)); ?>

                    </div>

                    <div class="mt-5" data-aos="fade-up" data-aos-delay="800">
                        <a href="<?php echo e(route('noauth.news.index')); ?>" class="btn btn-secondary px-4 rounded-pill">
                            <i class="fas fa-arrow-left me-2"></i> Kembali ke Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/noauth/news/show.blade.php ENDPATH**/ ?>