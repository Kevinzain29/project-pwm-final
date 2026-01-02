<?php $__env->startSection('title', 'Dashboard Admin'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .admin-dashboard-wrapper {
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }
    
    .admin-dashboard-header {
        padding: 2rem 0 4rem 0;
        position: relative;
        overflow: hidden;
    }
    
    .admin-dashboard-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.3;
    }
    
    .admin-dashboard-title-section {
        position: relative;
        z-index: 1;
        text-align: center;
        color: black;
    }
    
    .admin-dashboard-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 1rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    }
    
    .admin-dashboard-icon i {
        font-size: 2rem;
        color: white;
    }
    
    .admin-dashboard-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        color: black;
    }
    
    .admin-dashboard-subtitle {
        color: rgba(11, 11, 11, 0.9);
        font-size: 1.5rem;
    }
    
    .admin-main-content {
        margin-top: -2.5rem;
        position: relative;
        z-index: 2;
        padding: 0 1rem 3rem 1rem;
        max-width: 1400px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .admin-stat-card {
        border: none;
        border-radius: 16px;
        transition: all 0.3s ease;
        overflow: hidden;
        background: white;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        height: 100%;
        margin-bottom: 1.5rem;
    }
    
    .admin-stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    
    .admin-stat-card-body {
        padding: 1.5rem 1rem;
        text-align: center;
    }
    
    .admin-stat-icon-wrapper {
        width: 60px;
        height: 60px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 2rem;
        color: white;
        box-shadow: 0 6px 15px rgba(43, 43, 178, 0.12);
    }
    
    .admin-stat-card.card-primary .admin-stat-icon-wrapper {
        background: linear-gradient(135deg,  #3498db 0%, #76c8ffff 100%);
    }
    
    .admin-stat-card.card-success .admin-stat-icon-wrapper {
        background: linear-gradient(135deg, #3498db 0%, #76c8ffff 100%);
    }
    
    .admin-stat-card.card-info .admin-stat-icon-wrapper {
        background: linear-gradient(135deg, #3498db 0%, #76c8ffff 100%);
    }
    
    .admin-stat-card.card-warning .admin-stat-icon-wrapper {
        background: linear-gradient(135deg,  #3498db 0%, #2980b9 100%);
    }
    
    .admin-stat-title {
        font-size: 0.8rem;
        color: #0f54bbff;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 0.8rem;
    }
    
    .admin-stat-value {
        font-size: 2rem;
        font-weight: 700;
        color: #2d3748;
        line-height: 1;
        margin: 0;
    }
    
    .admin-data-section {
        background: white;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        overflow: hidden;
        margin-bottom: 1.5rem;
        animation: adminFadeInUp 0.6s ease-out;
    }
    
    @keyframes adminFadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .admin-section-header {
        background: linear-gradient(135deg, #3f79e6ff 0%, #3f79e6ff 100%);
        padding: 1rem 1.5rem;
        color: white;
        font-size: 1rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }
    
    .admin-section-header i {
        font-size: 1.2rem;
    }
    
    .admin-section-header.header-success {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }
    
    .admin-section-header.header-info {
        background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
    }
    
    .admin-table-container {
        padding: 0;
        overflow-x: auto;
    }
    
    .admin-modern-table {
        margin: 0;
        width: 100%;
        border-collapse: collapse;
    }
    
    .admin-modern-table thead {
        background: #f7fafc;
    }
    
    .admin-modern-table thead th {
        padding: 1rem 1.5rem;
        font-weight: 700;
        color: #4a5568;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        border: none;
        border-bottom: 2px solid #e2e8f0;
        text-align: left;
        white-space: nowrap;
    }
    
    .admin-modern-table thead th:last-child {
        text-align: right;
    }
    
    .admin-modern-table tbody tr {
        transition: all 0.2s ease;
        border-bottom: 1px solid #f0f0f0;
    }
    
    .admin-modern-table tbody tr:last-child {
        border-bottom: none;
    }
    
    .admin-modern-table tbody tr:hover {
        background: #f8fafc;
    }
    
    .admin-modern-table tbody td {
        padding: 1rem 1.5rem;
        vertical-align: middle;
        border: none;
        color: #2d3748;
        font-size: 0.9rem;
    }
    
    .admin-modern-table tbody td:first-child {
        font-weight: 600;
        color: #1a202c;
    }
    
    .admin-modern-table tbody td:last-child {
        text-align: right;
    }
    
    .admin-count-badge {
        display: inline-block;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.85rem;
        min-width: 60px;
        text-align: center;
        box-shadow: 0 3px 12px rgba(102, 126, 234, 0.35);
    }
    
    .admin-section-header.header-success ~ .admin-table-container .admin-count-badge {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        box-shadow: 0 3px 12px rgba(17, 153, 142, 0.35);
    }
    
    .admin-section-header.header-info ~ .admin-table-container .admin-count-badge {
        background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
        box-shadow: 0 3px 12px rgba(52, 152, 219, 0.35);
    }
    
    .admin-last-update {
        text-align: right;
        color: black;
        font-size: 0.9rem;
        margin-bottom: 1.5rem;
        padding-right: 0.5rem;
        font-weight: 500;
    }
    
    .admin-last-update strong {
        color: black;
    }
    
    .admin-section-title {
        color: black;
        font-weight: 600;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.6rem;
        margin-bottom: 1.2rem;
        padding: 0 0.5rem;
    }
    
    .admin-section-title i {
        font-size: 1.3rem;
    }
    
    @media (max-width: 992px) {
        .admin-dashboard-title {
            font-size: 1.8rem;
        }
        
        .admin-dashboard-subtitle {
            font-size: 0.95rem;
        }
        
        .admin-stat-value {
            font-size: 1.8rem;
        }
        
        .admin-stat-icon-wrapper {
            width: 55px;
            height: 55px;
            font-size: 1.6rem;
        }
    }
    
    @media (max-width: 768px) {
        .admin-dashboard-header {
            padding: 1.5rem 0 3rem 0;
        }
        
        .admin-dashboard-title {
            font-size: 1.6rem;
        }
        
        .admin-dashboard-subtitle {
            font-size: 0.9rem;
            padding: 0 1rem;
        }
        
        .admin-dashboard-icon {
            width: 60px;
            height: 60px;
        }
        
        .admin-dashboard-icon i {
            font-size: 1.8rem;
        }
        
        .admin-main-content {
            padding: 0 0.75rem 2rem 0.75rem;
        }
        
        .admin-stat-card-body {
            padding: 1.2rem 0.8rem;
        }
        
        .admin-stat-value {
            font-size: 1.6rem;
        }
        
        .admin-stat-title {
            font-size: 0.7rem;
        }
        
        .admin-stat-icon-wrapper {
            width: 50px;
            height: 50px;
            font-size: 1.4rem;
        }
        
        .admin-section-title {
            font-size: 1.3rem;
            padding: 0 0.25rem;
        }
        
        .admin-section-header {
            font-size: 0.9rem;
            padding: 0.9rem 1rem;
        }
        
        .admin-section-header i {
            font-size: 1rem;
        }
        
        .admin-modern-table thead th,
        .admin-modern-table tbody td {
            padding: 0.8rem 1rem;
            font-size: 0.8rem;
        }
        
        .admin-count-badge {
            padding: 0.4rem 1rem;
            font-size: 0.8rem;
            min-width: 50px;
        }
        
        .admin-last-update {
            font-size: 0.8rem;
            text-align: center;
            padding: 0 1rem;
        }
    }
    
    @media (max-width: 576px) {
        .admin-dashboard-title {
            font-size: 1.4rem;
        }
        
        .admin-dashboard-subtitle {
            font-size: 0.85rem;
        }
        
        .admin-stat-value {
            font-size: 1.5rem;
        }
        
        .admin-modern-table thead th,
        .admin-modern-table tbody td {
            padding: 0.7rem 0.8rem;
            font-size: 0.75rem;
        }
        
        .admin-section-title {
            font-size: 1.1rem;
        }
    }
</style>

<div class="admin-dashboard-wrapper">
    <!-- Header Section -->
    <div class="admin-dashboard-header">
        <div class="container">
            <div class="admin-dashboard-title-section">
                <h1 class="admin-dashboard-title">Dashboard Admin</h1>
                <p class="admin-dashboard-subtitle">Daftar statistik dan data yang berlaku sebagai pedoman bersama</p>
            </div>
        </div>
    </div>

    <div class="admin-main-content">
        <!-- Statistik Utama -->
        <div class="row">
            <div class="col-md-6 col-lg-3"> 
            <div class="admin-stat-card card-primary">
                <div class="admin-stat-card-body text-center">
                    <div class="admin-stat-icon-wrapper mb-2">
                        <img src="<?php echo e(asset('images/store.png')); ?>" alt="UMKM" title="UMKM" class="admin-stat-icon" width="40" height="40">
                    </div>
                    <div class="admin-stat-title">Total UMKM</div>
                    <h2 class="admin-stat-value"><?php echo e(number_format($totalUmkm)); ?></h2>
                </div>
            </div>
        </div>

            <div class="col-md-6 col-lg-3">
                <div class="admin-stat-card card-success">
                    <div class="admin-stat-card-body">
                        <div class="admin-stat-icon-wrapper mb-2">
                        <img src="<?php echo e(asset('images/People.png')); ?>" alt="Karyawan" title="Karyawan" class="admin-stat-icon" width="40" height="40">
                    </div>
                        <div class="admin-stat-title">Total Karyawan</div>
                        <h2 class="admin-stat-value"><?php echo e(number_format($totalKaryawan)); ?></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="admin-stat-card card-info">
                    <div class="admin-stat-card-body">
                        <div class="admin-stat-icon-wrapper mb-2">
                        <img src="<?php echo e(asset('images/news.png')); ?>" alt="Berita" title="Berita" class="admin-stat-icon" width="40" height="40">
                    </div>
                        <div class="admin-stat-title">Total Berita</div>
                        <h2 class="admin-stat-value"><?php echo e(number_format($totalNews)); ?></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="admin-stat-card card-warning">
                    <div class="admin-stat-card-body">
                        <div class="admin-stat-icon-wrapper mb-2">
                        <img src="<?php echo e(asset('images/user.png')); ?>" alt="Pengurus" title="Pengurus" class="admin-stat-icon" width="40" height="40">
                    </div>
                        <div class="admin-stat-title">Total Pengurus</div>
                        <h2 class="admin-stat-value"><?php echo e(number_format($totalPengurus)); ?></h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="admin-last-update">
            Terakhir diperbarui: <strong><?php echo e(date('d F Y')); ?></strong>
        </div>

        <!-- Daftar Data Terkini -->
        <h2 class="admin-section-title">
            <i class="bi bi-list-ul"></i> Daftar Data Terkini
        </h2>

        <!-- Statistik Per Daerah -->
        <div class="admin-data-section" style="animation-delay: 0.1s">
            <div class="admin-section-header">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Statistik UMKM Per Daerah</span>
            </div>
            <div class="admin-table-container">
                <table class="admin-modern-table">
                    <thead>
                        <tr>
                            <th><i class="bi bi-pin-map-fill me-2"></i>Nama Daerah</th>
                            <th><i class="bi bi-bar-chart-fill me-2"></i>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $totalPerDaerah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama => $jumlah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($nama); ?></td>
                                <td>
                                    <span class="admin-count-badge"><?php echo e(number_format($jumlah)); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Statistik Per Sektor -->
        <div class="admin-data-section" style="animation-delay: 0.2s">
            <div class="admin-section-header header-success">
                <i class="bi bi-diagram-3-fill"></i>
                <span>Statistik UMKM Per Sektor</span>
            </div>
            <div class="admin-table-container">
                <table class="admin-modern-table">
                    <thead>
                        <tr>
                            <th><i class="bi bi-briefcase-fill me-2"></i>Nama Sektor</th>
                            <th><i class="bi bi-bar-chart-fill me-2"></i>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $totalPerSektor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama => $jumlah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($nama); ?></td>
                                <td>
                                    <span class="admin-count-badge"><?php echo e(number_format($jumlah)); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Statistik Per Kategori -->
        <div class="admin-data-section" style="animation-delay: 0.3s">
            <div class="admin-section-header header-info">
                <i class="bi bi-tags-fill"></i>
                <span>Statistik UMKM Per Kategori</span>
            </div>
            <div class="admin-table-container">
                <table class="admin-modern-table">
                    <thead>
                        <tr>
                            <th><i class="bi bi-tag-fill me-2"></i>Nama Kategori</th>
                            <th><i class="bi bi-bar-chart-fill me-2"></i>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $totalPerKategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama => $jumlah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($nama); ?></td>
                                <td>
                                    <span class="admin-count-badge"><?php echo e(number_format($jumlah)); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>