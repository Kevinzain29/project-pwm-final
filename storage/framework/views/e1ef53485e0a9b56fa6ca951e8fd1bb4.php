

<?php $__env->startSection('title', 'Daftar Regulasi'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .regulasi-container {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .regulasi-header {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
    .regulasi-title {
        color: black;
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
    }
    
    .filter-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
    }
    
    .filter-title {
        color: #1e3c72;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    
    .form-control, .form-select {
        border: 2px solid #e0e7ff;
        border-radius: 10px;
        padding: 0.6rem 1rem;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #2a5298;
        box-shadow: 0 0 0 0.2rem rgba(42, 82, 152, 0.15);
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        border: none;
        border-radius: 10px;
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(42, 82, 152, 0.3);
    }
    
    .btn-secondary {
        background: #6c757d;
        border: none;
        border-radius: 10px;
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
        background: #5a6268;
        transform: translateY(-2px);
    }
    
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        border: none;
        border-radius: 10px;
        padding: 0.7rem 1.8rem;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        transition: all 0.3s ease;
    }
    
    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
    }
    
    .table-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    .table {
        margin-bottom: 0;
    }
    
    .table thead {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
    }
    
    .table thead th {
        border: none;
        padding: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }
    
    .table tbody tr {
        border-bottom: 1px solid #e0e7ff;
        transition: all 0.2s ease;
    }
    
    .table tbody tr:hover {
        background-color: #f8f9ff;
        transform: scale(1.01);
    }
    
    .table tbody td {
        padding: 1rem;
        vertical-align: middle;
    }
    
    .btn-warning {
        background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
        border: none;
        color: #000;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .btn-warning:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 193, 7, 0.4);
        color: #000;
    }
    
    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        border: none;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
    }
    
    .file-link {
        color: #2a5298;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .file-link:hover {
        color: #1e3c72;
        text-decoration: underline;
    }
    
    .empty-state {
        padding: 3rem;
        text-align: center;
        color: #6c757d;
    }
    
    .empty-state-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        opacity: 0.5;
    }
</style>

<div class="regulasi-container">
    <div class="container">
        
        <div class="regulasi-header">
            <h1 class="regulasi-title">📚 Daftar Regulasi</h1>
            <p class="text-muted mb-0">Kelola dan pantau semua regulasi yang tersedia</p>
        </div>

        
        <div class="filter-card">
            <h5 class="filter-title">🔍 Filter & Pencarian</h5>
            <form method="GET" action="<?php echo e(route('admin.regulasi.index')); ?>" class="d-flex flex-wrap gap-3 align-items-end">
                <div class="flex-grow-1" style="min-width: 250px;">
                    <label class="form-label small text-muted mb-1">Cari Regulasi</label>
                    <input 
                        type="text" 
                        name="search" 
                        value="<?php echo e($search); ?>" 
                        placeholder="Masukkan nama regulasi..." 
                        class="form-control"
                    >
                </div>

                <div style="min-width: 200px;">
                    <label class="form-label small text-muted mb-1">Jenis</label>
                    <select name="jenis" class="form-select">
                        <option value="">-- Semua Jenis --</option>
                        <?php $__currentLoopData = $listJenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($j); ?>" <?php echo e($jenis == $j ? 'selected' : ''); ?>>
                                <?php echo e($j); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div style="min-width: 200px;">
                    <label class="form-label small text-muted mb-1">Penerbit</label>
                    <select name="penerbit" class="form-select">
                        <option value="">-- Semua Penerbit --</option>
                        <?php $__currentLoopData = $listPenerbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p); ?>" <?php echo e($penerbit == $p ? 'selected' : ''); ?>>
                                <?php echo e($p); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-funnel"></i> Filter
                    </button>
                </div>

                <div>
                    <a href="<?php echo e(route('admin.regulasi.index')); ?>" class="btn btn-secondary">
                        <i class="bi bi-arrow-clockwise"></i> Reset
                    </a>
                </div>
            </form>
        </div>

        
        <div class="mb-3">
            <a href="<?php echo e(route('admin.regulasi.create')); ?>" class="btn btn-success">
                ➕ Tambah Regulasi
            </a>
        </div>

        
        <div class="table-card">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th style="width: 50px;" class="text-center">#</th>
                            <th>Nama Regulasi</th>
                            <th>Tanggal Terbit</th>
                            <th>Penerbit</th>
                            <th>Jenis</th>
                            <th class="text-center">File</th>
                            <th style="width: 180px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $regulasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center fw-bold text-muted"><?php echo e($loop->iteration); ?></td>
                                <td class="fw-semibold"><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->tanggal_terbit->format('d-m-Y')); ?></td>
                                <td><?php echo e($item->penerbit); ?></td>
                                <td><span class="badge bg-info text-dark"><?php echo e($item->jenis); ?></span></td>
                                <td class="text-center">
                                    <?php if($item->file): ?>
                                        <a href="<?php echo e(asset('storage/'.$item->file)); ?>" target="_blank" class="file-link">
                                            📄 Lihat
                                        </a>
                                    <?php else: ?>
                                        <span class="text-muted">-</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('admin.regulasi.edit', $item->id)); ?>" class="btn btn-sm btn-warning me-1">
                                        ✏️ Edit
                                    </a>
                                    <form 
                                        action="<?php echo e(route('admin.regulasi.destroy', $item->id)); ?>" 
                                        method="POST" 
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus regulasi ini?')"
                                    >
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            🗑️ Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="empty-state">
                                    <div class="empty-state-icon">📋</div>
                                    <h5>Belum ada regulasi yang tersedia</h5>
                                    <p class="mb-0">Silakan tambahkan regulasi baru dengan klik tombol "Tambah Regulasi"</p>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\regulasi\index.blade.php ENDPATH**/ ?>