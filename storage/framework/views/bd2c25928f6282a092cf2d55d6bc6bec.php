<?php $__env->startSection('content'); ?>
<style>
    body {
        background: linear-gradient(180deg, #3b5998 0%, #2d4373 100%) !important;
        min-height: 100vh;
    }
    
    .dashboard-wrapper {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .page-title {
        text-align: center;
        color: white;
        margin-bottom: 1rem;
    }
    
    .page-title h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
        color: black;
    }
    
    .page-subtitle {
        text-align: center;
        color: black;
        font-size: 1.5rem;
        margin-bottom: 3rem;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }
    
    .stat-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #5b7fd4 0%, #4a67c7 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
    
    .stat-icon-wrapper::before {
        content: '👥';
        font-size: 2.2rem;
    }
    
    .stat-label {
        font-size: 1rem;
        color: black;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }
    
    .stat-value {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2d3748;
        margin: 0;
    }
    
    .stat-date {
        font-size: 1rem;
        color: black;
        margin-top: 0.5rem;
    }
    
    .action-section {
        margin-bottom: 2rem;
    }
    
    .btn-add-primary {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: none;
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .btn-add-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        color: white;
    }
    
    .btn-add-primary::before {
        content: '➕';
        font-size: 1.1rem;
    }
    
    .content-section {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .section-header {
        background: linear-gradient(135deg, #5b7fd4 0%, #4a67c7 100%);
        padding: 1.25rem 1.5rem;
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
    }
    
    .section-header::before {
        content: '📋 ';
    }
    
    .table-wrapper {
        overflow-x: auto;
    }
    
    .data-table {
        width: 100%;
        margin: 0;
        border-collapse: separate;
        border-spacing: 0;
    }
    
    .data-table thead {
        background: #f8f9fa;
    }
    
    .data-table thead th {
        padding: 1rem 1.5rem;
        font-weight: 600;
        font-size: 0.875rem;
        color: #4a5568;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 2px solid #e2e8f0;
        text-align: left;
    }
    
    .data-table tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: background 0.2s ease;
    }
    
    .data-table tbody tr:hover {
        background: #f7fafc;
    }
    
    .data-table tbody tr:last-child {
        border-bottom: none;
    }
    
    .data-table tbody td {
        padding: 1.25rem 1.5rem;
        color: #2d3748;
        vertical-align: middle;
    }
    
    .pengurus-id {
        font-weight: 700;
        color: #5b7fd4;
        font-size: 1.1rem;
    }
    
    .pengurus-name {
        font-size: 1rem;
        font-weight: 600;
        color: #2d3748;
        margin: 0;
    }
    
    .pengurus-jabatan {
        display: inline-block;
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
        padding: 0.375rem 0.875rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-top: 0.25rem;
    }
    
    .pengurus-deskripsi {
        color: black;
        font-size: 0.875rem;
        line-height: 1.5;
        max-width: 300px;
    }
    
    .pengurus-thumbnail {
        width: 100px;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    .no-image-placeholder {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e0 100%);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #a0aec0;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
    }
    
    .btn-action-edit {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        border: none;
        color: white;
        padding: 0.625rem 1.5rem;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(245, 158, 11, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        text-decoration: none;
    }
    
    .btn-action-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
        color: white;
    }
    
    .btn-action-edit::before {
        content: '✏️';
    }
    
    .btn-action-delete {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        color: white;
        padding: 0.625rem 1.5rem;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(239, 68, 68, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
    }
    
    .btn-action-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
        color: white;
    }
    
    .btn-action-delete::before {
        content: '🗑️';
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
    }
    
    .empty-icon {
        font-size: 4rem;
        opacity: 0.3;
        margin-bottom: 1rem;
    }
    
    .empty-text {
        color: #a0aec0;
        font-size: 1rem;
    }
    
    .toast-notification {
        position: fixed;
        top: 2rem;
        right: 2rem;
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 1.25rem 2rem;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(16, 185, 129, 0.4);
        font-weight: 600;
        font-size: 1rem;
        z-index: 9999;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        animation: slideInRight 0.5s ease-out;
        min-width: 300px;
        max-width: 500px;
    }
    
    .toast-notification.hiding {
        animation: slideOutRight 0.5s ease-out forwards;
    }
    
    .toast-notification::before {
        content: '✅';
        font-size: 1.5rem;
    }
    
    .toast-close {
        margin-left: auto;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    
    .toast-close:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: rotate(90deg);
    }
    
    @keyframes slideInRight {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }
    
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }
    
    .pagination {
        display: flex;
        gap: 0.5rem;
    }
    
    .pagination .page-link {
        background: white;
        border: 1px solid #e2e8f0;
        color: #4a5568;
        padding: 0.5rem 0.875rem;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    
    .pagination .page-link:hover {
        background: #5b7fd4;
        color: white;
        border-color: #5b7fd4;
        transform: translateY(-2px);
    }
    
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #5b7fd4 0%, #4a67c7 100%);
        border-color: #5b7fd4;
        color: white;
        box-shadow: 0 4px 12px rgba(91, 127, 212, 0.4);
    }
</style>

<div class="dashboard-wrapper">
    <div class="container">
        <!-- Page Title -->
        <div class="page-title">
            <h1>Dashboard Pengurus Admin</h1>
        </div>
        <div class="page-subtitle">
            Kelola data pengurus organisasi dengan mudah
        </div>

        <!-- Stats Section -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon-wrapper"></div>
                <div class="stat-label">Total Pengurus</div>
                <h2 class="stat-value"><?php echo e($penguruses->total()); ?></h2>
                <div class="stat-date">Terakhir diperbarui: <?php echo e(date('d M Y')); ?></div>
            </div>
        </div>

        <!-- Action Button -->
        <div class="action-section">
            <a href="<?php echo e(route('admin.penguruses.create')); ?>" class="btn-add-primary">
                Tambah Pengurus Baru
            </a>
        </div>

        <!-- Toast Notification -->
        <?php if(session('success')): ?>
            <div class="toast-notification" id="toastNotification">
                <span><?php echo e(session('success')); ?></span>
                <button class="toast-close" onclick="closeToast()">×</button>
            </div>
        <?php endif; ?>

        <!-- Data Table Section -->
        <div class="content-section">
            <div class="section-header">
                Daftar Pengurus Organisasi
            </div>
            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>DIVISI</th>
                            <th>JABATAN</th>
                            <th>DESKRIPSI</th>
                            <th>GAMBAR</th>
                            <th style="text-align: center;">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $penguruses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pengurus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <span class="pengurus-id"><?php echo e($pengurus->id); ?></span>
                            </td>
                            <td>
                                <div class="pengurus-name"><?php echo e($pengurus->nama); ?></div>
                            </td>
                            <td>
                                <div class="pengurus-divisi">
                                    <?php echo e(optional($pengurus->divisi)->nama ?? '-'); ?>

                                </div>
                            </td>
                            <td>
                                <span class="pengurus-jabatan"><?php echo e($pengurus->jabatan); ?></span>
                            </td>
                            <td>
                                <div class="pengurus-deskripsi"><?php echo e($pengurus->deskripsi); ?></div>
                            </td>
                            <td>
                                <?php if($pengurus->gambar): ?>
                                    <img src="<?php echo e(asset('uploads/'.$pengurus->gambar)); ?>" class="pengurus-thumbnail" alt="<?php echo e($pengurus->nama); ?>">
                                <?php else: ?>
                                    <div class="no-image-placeholder">
                                        👤
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?php echo e(route('admin.penguruses.edit', $pengurus->id)); ?>" class="btn-action-edit">
                                        Edit
                                    </a>
                                    <form action="<?php echo e(route('admin.penguruses.destroy', $pengurus->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn-action-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus pengurus ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7">
                                <div class="empty-state">
                                    <div class="empty-icon">👥</div>
                                    <div class="empty-text">Tidak ada data pengurus. Mulai tambahkan pengurus pertama!</div>
                                </div>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
            <?php echo e($penguruses->links()); ?>

        </div>
    </div>
</div>

<script>
    // Auto-hide toast notification after 5 seconds
    const toast = document.getElementById('toastNotification');
    if (toast) {
        setTimeout(() => {
            closeToast();
        }, 5000);
    }
    
    function closeToast() {
        const toast = document.getElementById('toastNotification');
        if (toast) {
            toast.classList.add('hiding');
            setTimeout(() => {
                toast.remove();
            }, 500);
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/admin/penguruses/index.blade.php ENDPATH**/ ?>