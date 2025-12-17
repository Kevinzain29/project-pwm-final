<?php $__env->startSection('title', 'Kategori'); ?>

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
        color: black;
        margin-bottom: 2rem;
        animation: fadeInDown 0.6s ease;
    }
    
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .page-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
    
    .page-header h1::before {
        content: '📂 ';
        color: rgba(11, 11, 11, 0.9);
    }
    
    .page-subtitle {
        color: rgba(11, 11, 11, 0.9);
        font-size: 1.5rem;
    }
    
    .alert-success {
        background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
        border: 2px solid #10b981;
        color: #065f46;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        margin-bottom: 1.5rem;
        font-weight: 500;
        animation: slideInRight 0.5s ease;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.2);
    }
    
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .alert-success::before {
        content: '✅ ';
    }
    
    .content-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        animation: fadeInUp 0.6s ease;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .card-header-custom {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
        padding: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        position: relative;
        overflow: hidden;
    }
    
    .card-header-custom::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: pulse 3s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            opacity: 0.5;
        }
        50% {
            transform: scale(1.1);
            opacity: 0.8;
        }
    }
    
    .card-header-title {
        font-weight: 600;
        font-size: 1.2rem;
        position: relative;
        z-index: 1;
    }
    
    .card-header-title::before {
        content: '📋 ';
        margin-right: 0.5rem;
    }
    
    .btn-add {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: none;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        position: relative;
        z-index: 1;
    }
    
    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        color: white;
    }
    
    .btn-add::before {
        content: '➕';
    }
    
    .card-body-custom {
        padding: 0;
    }
    
    .table-container {
        overflow-x: auto;
    }
    
    .table-modern {
        width: 100%;
        margin: 0;
        border-collapse: collapse;
    }
    
    .table-modern thead {
        background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
    }
    
    .table-modern thead th {
        padding: 1.25rem 1.5rem;
        font-weight: 700;
        color: #1e293b;
        text-align: left;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-bottom: 3px solid #2a5298;
    }
    
    .table-modern tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }
    
    .table-modern tbody tr:hover {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        transform: scale(1.005);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }
    
    .table-modern tbody tr:last-child {
        border-bottom: none;
    }
    
    .table-modern tbody td {
        padding: 1.25rem 1.5rem;
        color: #475569;
        font-size: 1rem;
    }
    
    .table-modern tbody td:first-child {
        font-weight: 600;
        color: #2a5298;
    }
    
    .badge-count {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
        padding: 0.375rem 0.875rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.875rem;
        display: inline-block;
        box-shadow: 0 2px 8px rgba(59, 130, 246, 0.3);
    }
    
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    
    .btn-edit {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        border: none;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(245, 158, 11, 0.3);
        text-decoration: none;
        display: inline-block;
    }
    
    .btn-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
        color: white;
    }
    
    .btn-edit::before {
        content: '✏️ ';
        margin-right: 0.25rem;
    }
    
    .btn-delete {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
        cursor: pointer;
    }
    
    .btn-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
        color: white;
    }
    
    .btn-delete::before {
        content: '🗑️ ';
        margin-right: 0.25rem;
    }
    
    .delete-form {
        display: inline;
        margin: 0;
    }
    
    .pagination-wrapper {
        padding: 1.5rem;
        background: #f8fafc;
        border-top: 2px solid #e2e8f0;
        display: flex;
        justify-content: center;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: #64748b;
    }
    
    .empty-state::before {
        content: '📂';
        font-size: 4rem;
        display: block;
        margin-bottom: 1rem;
        opacity: 0.5;
    }
    
    .empty-state h5 {
        color: #334155;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 2rem;
        }
        
        .card-header-custom {
            flex-direction: column;
            align-items: stretch;
        }
        
        .btn-add {
            width: 100%;
            text-align: center;
            justify-content: center;
        }
        
        .table-modern thead th,
        .table-modern tbody td {
            padding: 1rem;
            font-size: 0.85rem;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .btn-edit,
        .btn-delete {
            width: 100%;
        }
    }
</style>

<div class="page-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Daftar Kategori</h1>
            <div class="page-subtitle">Kelola data kategori UMKM</div>
        </div>

        <!-- Success Alert -->
        <?php if(session('success')): ?>
            <div class="alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <!-- Content Card -->
        <div class="content-card">
            <!-- Card Header -->
            <div class="card-header-custom">
                <div class="card-header-title">Data Kategori</div>
                <a href="<?php echo e(route('admin.kategori.create')); ?>" class="btn-add">Tambah Kategori</a>
            </div>

            <!-- Card Body -->
            <div class="card-body-custom">
                <div class="table-container">
                    <table class="table-modern">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Jumlah UMKM</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration + ($kategoris->currentPage()-1)*$kategoris->perPage()); ?></td>
                                    <td><?php echo e($kategori->nama); ?></td>
                                    <td><?php echo e($kategori->deskripsi); ?></td>
                                    <td><span class="badge-count"><?php echo e($kategori->umkms_count); ?></span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="<?php echo e(route('admin.kategori.edit', $kategori)); ?>" class="btn-edit">Edit</a>
                                            <form action="<?php echo e(route('admin.kategori.destroy', $kategori)); ?>" method="POST" class="delete-form">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn-delete" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="empty-state">
                                            <h5>Belum ada data kategori</h5>
                                            <p>Silakan tambah kategori baru untuk memulai</p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <?php if($kategoris->hasPages()): ?>
                    <div class="pagination-wrapper">
                        <?php echo e($kategoris->links()); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\kategori\index.blade.php ENDPATH**/ ?>