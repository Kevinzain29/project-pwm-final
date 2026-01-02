<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?> - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- App CSS -->
    <!-- <link rel="stylesheet" href="<?php echo e(asset('resources/css/app.css')); ?>"> -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo $__env->yieldContent('styles'); ?>     
     
     <!-- AOS Animation -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 font-sans antialiased bg-gray-100">

    <!-- Navbar -->
    <?php if(!Request::is('login')): ?>
    <header>
        <!-- Top Section -->
         <?php if(auth()->guard()->guest()): ?>
            <div class="py-3" style="background: linear-gradient(90deg, #1E3A8A 0%);">
                <div class="container d-flex justify-content-between align-items-center">
                    <!-- Logo + Text -->
                    <div class="d-flex align-items-center">
                        <img src="<?php echo e(asset('images/Logo_PWM_DIY.png')); ?>" alt="Logo" class="me-2 rounded-circle" class="me-3" style="width:50px; height:50px;">
                        <div>
                            <h5 class="mb-0 fw-bold" style="color:#22C55E;">PWM DIY</h5>
                            <small class="text-white">Lembaga Pengembang Usaha Mikro Kecil dan Menengah<br>Pimpinan Pusat Muhammadiyah</small>
                        </div>
                    </div>

                    <!-- Login -->
                    <div>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-success rounded-pill px-4">Login</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Bottom Menu -->
        <?php if(auth()->guard()->guest()): ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container justify-content-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse justify-content-center" id="mainNavbar">
                    <?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
        <?php endif; ?>
                
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->user()->isAdmin()): ?>
                            <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
            </div>
        </nav>
    </header>
    <?php endif; ?>

    <!-- Main Content -->
    <main class="flex-grow-1" style="<?php if(auth()->guard()->check()): ?> <?php if(auth()->user()->isAdmin()): ?> margin-left:240px; <?php endif; ?> <?php endif; ?>">
        <div class="containe-fluid p-0">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>

    <!-- Footer -->
    <?php if(!Request::is('login')): ?>
    <?php if(auth()->guard()->guest()): ?>
     <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <?php endif; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
    
    <!-- App JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 1000, // Durasi animasi (ms)
            once: false,     // Animasi hanya berjalan sekali
            mirror: true,  // Objek tidak beranimasi mundur saat scroll ke atas
        });
    </script>
</body>
</html>
<?php /**PATH C:\laragon\www\project-pwm-final\resources\views/layouts/app.blade.php ENDPATH**/ ?>