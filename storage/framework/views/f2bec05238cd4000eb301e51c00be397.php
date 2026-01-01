
<style>
.sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 240px;
        background: linear-gradient(180deg, #1E3A8A);
        display: flex;
        flex-direction: column; /* Header, Menu, dan Footer tersusun vertikal */
        padding: 20px 0;
        z-index: 1050;
    }
    .sidebar-header {
        flex-shrink: 0; /* Mencegah header mengecil */
        text-align: center;
        margin-bottom: 20px;
    }
/* KONTEN MENU DENGAN SCROLL */
    .sidebar-menu {
        flex-grow: 1;
        overflow-y: auto; /* Mengaktifkan scroll vertikal */
        overflow-x: hidden;
        padding: 0 10px 0 15px; /* Memberi ruang sedikit di kanan untuk scrollbar */
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    /* KUSTOMISASI SCROLLBAR AGAR SELARAS */
    /* 1. Lebar Scrollbar */
    .sidebar-menu::-webkit-scrollbar {
        width: 6px;
    }

    /* 2. Jalur Scrollbar (Track) - dibuat hampir transparan agar menyatu dengan bg biru */
    .sidebar-menu::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    /* 3. Gagang Scrollbar (Thumb) - Menggunakan warna hijau stabilo agar tetap kelihatan */
    .sidebar-menu::-webkit-scrollbar-thumb {
        background: #22C55E;
        border-radius: 10px;
        transition: background 0.3s ease;
    }

    /* 4. Efek saat Gagang Scrollbar disentuh mouse */
    .sidebar-menu::-webkit-scrollbar-thumb:hover {
        background: rgba(34, 197, 94, 0.8); /* Hijau lebih terang saat hover */
    }
    .sidebar-header img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-bottom: 10px;
    }
    .sidebar-header h5 {
        color: #22C55E;
        font-weight: bold;
        margin: 0;
    }
    .sidebar-header small {
        color: #fff;
        font-size: 12px;
        display: block;
    }
    .sidebar-menu {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 0 15px;
    }
    .sidebar-menu a {
        color: #fff;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 6px;
        transition: background 0.3s ease;
        display: flex;
        align-items: center;
    }
    .sidebar-menu a:hover {
        background: #22C55E;
    }
    .sidebar-menu a.active {
        background: #2563EB;
    }
    .sidebar-footer {
        padding: 15px;
        text-align: center;
    }
</style>

<div class="sidebar">
    
    <div class="sidebar-header">
        <img src="<?php echo e(asset('images/Logo_PWM_DIY.png')); ?>" alt="Logo">
        <h5>PWM DIY</h5>
        <small>Lembaga Pengembang Usaha Mikro<br>Kecil dan Menengah</small>
    </div>

    
    <div class="sidebar-menu">
        <a class="<?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-tachometer-alt me-1"></i> Dashboard</a>
        <a class="<?php echo e(request()->routeIs('admin.kategori.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.kategori.index')); ?>"><i class="fas fa-tags me-1"></i> Kategori</a>
        <a class="<?php echo e(request()->routeIs('admin.users.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.users.index')); ?>"><i class="fas fa-users me-1"></i> Users</a>
        <a class="<?php echo e(request()->routeIs('profile.edit') ? 'active' : ''); ?>" href="<?php echo e(route('profile.edit')); ?>"><i class="fas fa-user me-1"></i> Profile</a>
        <a class="<?php echo e(request()->routeIs('admin.regulasi.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.regulasi.index')); ?>"><i class="fas fa-user-shield me-1"></i> Regulasi</a>
        <a class="<?php echo e(request()->routeIs('admin.daerah.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.daerah.index')); ?>"><i class="fas fa-map-marker-alt me-1"></i> Daerah</a>
        <a class="<?php echo e(request()->routeIs('admin.sektor.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.sektor.index')); ?>"><i class="fas fa-industry me-1"></i> Sektor</a>
        <a class="<?php echo e(request()->routeIs('admin.umkm.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.umkm.index')); ?>"><i class="fas fa-store me-1"></i> UMKM</a>
        <a class="<?php echo e(request()->routeIs('admin.news.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.news.index')); ?>"><i class="fas fa-file-alt me-1"></i> Berita</a>
        <a class="<?php echo e(request()->routeIs('admin.divisi.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.divisi.index')); ?>"><i class="fas fa-sitemap me-1"></i> Divisi</a>
        <a class="<?php echo e(request()->routeIs('admin.penguruses.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.penguruses.index')); ?>"><i class="fas fa-users-cog me-1"></i> Pengurus</a>
        <a class="<?php echo e(request()->routeIs('admin.lowongan.index') ? 'active' : ''); ?>" href="<?php echo e(route('admin.lowongan.index')); ?>"><i class="fas fa-briefcase me-1"></i> Lowongan</a>
    </div>

    
    <div class="sidebar-footer">
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger rounded-pill px-4">Logout</button>
        </form>
    </div>
</div>
<?php /**PATH C:\laragon\www\project-pwm-final\resources\views\layouts\sidebar.blade.php ENDPATH**/ ?>