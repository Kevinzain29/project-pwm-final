<style>
    .navbar-nav .nav-link {
    color: #333;
    transition: color 0.3s ease, background-color 0.3s ease;
    border-radius: 6px;
    padding: 8px 18px; /* atur jarak antar menu */
    font-weight: 500;
    }

    /* Hover effect */
    .navbar-nav .nav-link:hover {
        background-color: #1E3A8A;
        color: #fff !important;
    }

    /* Active menu */
    .navbar-nav .nav-link.active {
        background-color: #3B82F6;
        color: #fff !important;
    }

    /* Navbar center */
    .navbar-nav {
        display: flex;
        justify-content: center; /* posisi ke tengah */
        gap: 30px; /* jarak antar menu */
        width: 100%;
    }
    .content {
        margin-left: 220px; /* kasih space biar konten tidak ketutup sidebar */
        padding: 20px;
    }
</style>


<?php if(auth()->guard()->guest()): ?>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('noauth.pengurus.index') ? 'active' : ''); ?>" href="<?php echo e(route('noauth.pengurus.index')); ?>">Profile</a></li>
        <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('noauth.regulasi.index') ? 'active' : ''); ?>" href="<?php echo e(route('noauth.regulasi.index')); ?>">Regulasi</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo e(request()->routeIs('noauth.umkm.index') ? 'active' : ''); ?>"
                    href="<?php echo e(route('noauth.umkm.index')); ?>"
                    id="navbarUmkm"
                    role="button"
                    data-bs-toggle="<?php echo e(request()->routeIs('noauth.umkm.index') ? 'dropdown' : ''); ?>"
                    aria-expanded="false">
                        UMKM
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarUmkm">
                        <li>
                            <a class="dropdown-item <?php echo e(request('daerah_id') ? '' : 'active'); ?>" 
                            href="<?php echo e(route('noauth.umkm.index', ['kategori_id' => request('kategori_id')])); ?>">
                                Semua Daerah
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <?php $__currentLoopData = $daerahList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daerah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a class="dropdown-item <?php echo e(request('daerah_id') == $daerah->id ? 'active' : ''); ?>" 
                                href="<?php echo e(route('noauth.umkm.index', [
                                        'daerah_id' => $daerah->id,
                                        'kategori_id' => null
                                ])); ?>">
                                    <?php echo e($daerah->nama); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>        
        <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('noauth.news.index') ? 'active' : ''); ?>" href="<?php echo e(route('noauth.news.index')); ?>">Berita</a></li>
        <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('noauth.lowongan.index') ? 'active' : ''); ?>" href="<?php echo e(route('noauth.lowongan.index')); ?>">Lowongan</a></li>
    </ul>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->isUser()): ?>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('user.dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('user.dashboard')); ?>"><i class="fas fa-tachometer-alt me-1"></i>Dashboard</a></li>
            <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('profile.edit') ? 'active' : ''); ?>" href="<?php echo e(route('profile.edit')); ?>"><i class="fas fa-user me-1"></i>Profile</a></li>
        </ul>
    <?php endif; ?>
    <?php endif; ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>