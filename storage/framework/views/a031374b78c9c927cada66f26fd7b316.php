
<?php $__env->startSection('title', 'Detail Divisi'); ?>

<?php $__env->startSection('content'); ?>
<style>
    body {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e3c72 100%) !important;
        min-height: 100vh;
    }
    
    .page-wrapper {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .page-header {
        text-align: center;
        margin-bottom: 2.5rem;
        animation: fadeInDown 0.6s ease;
    }
    
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .page-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: black;
    }
    
    .page-header h1::before {
        content: '🔍 ';
    }
    
    .detail-container {
        max-width: 900px;
        margin: 0 auto;
        animation: fadeInUp 0.6s ease;
    }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .content-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 2rem;
    }
    
    .card-header-custom {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
        padding: 1.2rem 2rem;
        font-weight: 600;
        font-size: 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .info-section {
        padding: 2rem;
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
    }
    
    .info-label {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #64748b;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    
    .info-value {
        font-size: 1.2rem;
        color: #1e293b;
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }
    
    .list-section {
        padding: 2rem;
    }
    
    .section-title {
        font-weight: 700;
        color: #1e3c72;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .member-item {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        margin-bottom: 0.75rem;
        transition: all 0.3s ease;
    }
    
    .member-item:hover {
        transform: translateX(10px);
        border-color: #3b82f6;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.1);
    }
    
    .member-icon {
        width: 40px;
        height: 40px;
        background: #dbeafe;
        color: #2563eb;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        font-weight: bold;
    }
    
    .btn-back {
        background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }
    
    .btn-back:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        color: white;
    }
    
    .empty-state {
        background: #fff1f2;
        color: #be123c;
        padding: 1rem;
        border-radius: 8px;
        border: 1px dashed #fda4af;
        text-align: center;
    }
</style>

<div class="page-wrapper">
    <div class="container">
        <div class="page-header">
            <h1>Informasi Detail</h1>
        </div>

        <div class="detail-container">
            <div class="content-card">
                <div class="card-header-custom">
                    👥 Divisi: <?php echo e($divisi->nama); ?>

                </div>

                <div class="info-section">
                    <div class="info-label">Nama Lengkap Divisi</div>
                    <div class="info-value"><?php echo e($divisi->nama); ?></div>

                    <div class="info-label">Deskripsi / Tugas Fungsi</div>
                    <div class="info-value" style="font-size: 1rem;">
                        <?php echo e($divisi->deskripsi ?: 'Tidak ada deskripsi untuk divisi ini.'); ?>

                    </div>
                </div>

                <div class="list-section">
                    <h3 class="section-title">👔 Daftar Pengurus</h3>
                    
                    <?php if($divisi->penguruses->count()): ?>
                        <div class="member-list">
                            <?php $__currentLoopData = $divisi->penguruses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengurus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="member-item">
                                    <div class="member-icon">
                                        <?php echo e(strtoupper(substr($pengurus->nama, 0, 1))); ?>

                                    </div>
                                    <div>
                                        <div style="font-weight: 700; color: #1e293b;"><?php echo e($pengurus->nama); ?></div>
                                        <div style="font-size: 0.85rem; color: #64748b;"><?php echo e($pengurus->jabatan); ?></div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <div class="empty-state">
                            <i class="fas fa-info-circle"></i> Belum ada pengurus yang ditugaskan di divisi ini.
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="text-center">
                <a href="<?php echo e(route('admin.divisi.index')); ?>" class="btn-back">
                    <span>◀️</span> Kembali ke Daftar
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\divisi\show.blade.php ENDPATH**/ ?>