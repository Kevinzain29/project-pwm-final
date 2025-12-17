<?php $__env->startSection('styles'); ?>
<style>
    /* Hero Section Styles */
    .carousel-slide {
        opacity: 0;
        transition: opacity 700ms ease-in-out;
    }
    
    .carousel-slide.active {
        opacity: 1;
    }
    
    /* Fade in animation */
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    a
    /* Glass effect - backdrop blur */
    .backdrop-blur-md {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
    
    /* Gradient text effect */
    .bg-clip-text {
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .text-transparent {
        color: transparent;
    }
    
    /* Group hover effect for button shine */
    .btn-shine {
        position: relative;
        overflow: hidden;
    }
    
    .btn-shine-effect {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transform: translateX(-100%);
        transition: transform 1s;
    }
    
    .btn-shine:hover .btn-shine-effect {
        transform: translateX(100%);
    }
    
    /* Custom responsive utilities for mobile */
    @media (max-width: 1023px) {
        .hero-section {
            height: 670px;
        }
    }



    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-0.25rem);
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .animate-bounce {
        animation: bounce 1s infinite;
    }

    .hover-scale:hover {
        transform: scale(1.05);
        box-shadow: 0 20px 25px -5px rgba(52, 211, 153, 0.3);
    }

    .btn:active {
    transform: translateY(0) scale(0.95);
    }

    .btn:hover {
    transform: translateY(-0.25rem) scale(1.0);
    }

    .modal-content:not(.show) {
        animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

     /* Hover effects untuk service cards */
    .service-card:hover {
        background-color: rgba(71, 85, 105, 0.5) !important;
        transform: translateY(-4px);
    }
    
    .service-card:hover .icon-service {
        transform: scale(1.1);
    }
    
    /* Button hover effect */
    .btn.hover-scale:hover {
        background-color: #F3F4F6 !important;
        transform: scale(1.05);
    }
    
    /* Smooth transitions */
    .service-card,
    .icon-service,
    .btn.hover-scale {
        transition: all 0.3s ease;
    }
    
    /* Text white opacity untuk deskripsi */
    .text-white-50 {
        color: rgba(255, 255, 255, 0.7) !important;
    }
    
    /* Responsive adjustments */
    @media (max-width: 991.98px) {
        .display-4 {
            font-size: 2rem;
        }
    }
    
    @media (max-width: 575.98px) {
        .display-4 {
            font-size: 1.75rem;
        }
        
        .display-6 {
            font-size: 1.25rem;
        }
    }

    /* Slider Animation */
    .slider-track-custom {
        animation: scroll-logos 30s linear infinite;
        width: max-content;
    }
    
    .logo-set-custom {
        gap: 2rem;
    }
    
    .logo-item-custom {
        min-width: 200px;
        flex-shrink: 0;
    }
    
    @keyframes scroll-logos {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    
    /* Pause animation on hover */
    .slider-track-custom:hover {
        animation-play-state: paused;
    }
    
    /* Logo hover effect */
    .logo-item-custom:hover .rounded-circle {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
    
    .logo-item-custom .rounded-circle {
        transition: transform 0.3s ease;
    }
    
    /* Responsive adjustments */
    @media (max-width: 767.98px) {
        .logo-item-custom {
            min-width: 150px;
        }
        
        .logo-item-custom .rounded-circle {
            width: 80px !important;
            height: 80px !important;
        }
        
        .logo-item-custom img {
            width: 48px !important;
            height: 48px !important;
        }
        
        .display-5 {
            font-size: 2rem;
        }
    }

    .carousel-nav:hover {
        background: rgba(255,255,255,1) !important;
        transform: translateY(-50%) scale(1.1);
    }
    
    .dot.active {
        background: #fff !important;
        width: 30px !important;
        border-radius: 6px !important;
    }
    
    .hover-scale:hover {
        transform: scale(1.05);
    }
</style>
<?php $__env->stopSection(); ?>
  
<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="position-relative d-flex align-items-center justify-content-center overflow-hidden hero-section" 
         style="height: 670px; background: linear-gradient(90deg, #3B82F6 0%, #1D4ED8 50%, #1E3A8A 100%);">
    
    <!-- Carousel Foto (Fullscreen) -->
    <div class="position-relative w-100 h-100" style="z-index: 0;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
            <div class="carousel-slide active position-absolute w-100 h-100">
                <img src="https://www.mediamu.com/media/images/2025/01/116794d5656e954.jpeg?location=1&width=&height=&quality=90&fit=1" 
                    class="w-100 h-100 object-fit-cover" style="filter: brightness(0.75);">
            </div>
            <div class="carousel-slide position-absolute w-100 h-100">
                <img src="https://www.mu.or.id/media/images/2024/09/13566d544aebc951.jpeg?location=1&width=&height=&quality=90&fit=1" 
                    class="w-100 h-100 object-fit-cover" style="filter: brightness(0.75);">
            </div>
            <div class="carousel-slide position-absolute w-100 h-100">
                <img src="https://www.mediamu.com/media/images/2024/03/1165ebe26be51e1.jpeg?location=1&width=&height=&quality=90&fit=1" 
                    class="w-100 h-100 object-fit-cover" style="filter: brightness(0.75);">
            </div>
        </div>
    </div>

    <!-- Overlay Hitam Transparan -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-black" style="opacity: 0.5;"></div>

    <!-- Teks di atas semuanya - Mobile Optimized Version -->
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center py-3 py-md-4" style="z-index: 10;">
        <div class="text-center text-white px-3 px-sm-4 w-100" style="max-width: 1024px;">
            
            <!-- Welcome Badge -->
            <div class="d-inline-block mb-2 mb-sm-3 animate-fade-in">
                <span class="backdrop-blur-md px-4 px-sm-5 py-1 rounded-pill fw-semibold text-uppercase border border-white" 
                      style="background-color: rgba(255, 255, 255, 0.1); font-size: 10px; letter-spacing: 0.1em; color: #DBEAFE; border-color: rgba(255, 255, 255, 0.2) !important;">
                    Selamat Datang
                </span>
            </div>

            <!-- Main Heading -->
            <h1 class="fw-bold mb-2 mb-sm-3" style="font-size: clamp(1.875rem, 5vw, 3.75rem); text-shadow: 0 25px 50px rgba(0, 0, 0, 0.25); letter-spacing: -0.025em; line-height: 1.2;">
                <span class="d-block bg-clip-text" style="background: linear-gradient(90deg, #FFFFFF 0%, #DBEAFE 50%, #FFFFFF 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">
                    LP UMKM PWM DIY
                </span>
            </h1>

            <!-- Subtitle -->
            <h2 class="fw-bold mb-2 mb-sm-3 px-2" style="font-size: clamp(0.875rem, 2vw, 1.25rem); color: #DBEAFE; text-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); letter-spacing: 0.025em;">
                Lembaga Pengembangan Usaha Mikro Kecil dan Menengah
            </h2>

            <!-- Description -->
            <p class="mb-2 mb-sm-3 mx-auto px-2 fw-light" style="font-size: clamp(0.75rem, 1.5vw, 1rem); color: #EFF6FF; line-height: 1.625; text-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); max-width: 768px;">
                Mendukung pertumbuhan UMKM yang inovatif, mandiri, dan berdaya saing global.
            </p>

            <!-- Divider Line -->
            <div class="d-flex align-items-center justify-content-center gap-2 mb-2 mb-sm-3">
                <div style="width: 3rem; height: 2px; background: linear-gradient(90deg, transparent, #BFDBFE, transparent);"></div>
                <svg style="width: 0.875rem; height: 0.875rem; color: #BFDBFE;" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <div style="width: 3rem; height: 2px; background: linear-gradient(90deg, transparent, #BFDBFE, transparent);"></div>
            </div>

            <!-- Tagline - Hidden on very small screens -->
            <p class="fst-italic mb-3 mb-sm-4 fw-light d-none d-sm-block" style="font-size: clamp(0.75rem, 1.5vw, 1rem); color: #DBEAFE; text-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);">
                "UMKM adalah tulang punggung ekonomi bangsa"
            </p>

            <!-- Statistik singkat dengan Glass Effect -->
            <div class="d-flex flex-wrap justify-content-center gap-2 gap-sm-3 gap-md-4 mb-3 mb-sm-4 px-2">
                <div class="backdrop-blur-md rounded-3 border hover-scale" 
                     style="background-color: rgba(255, 255, 255, 0.1); padding: 0.5rem 1rem; border-color: rgba(255, 255, 255, 0.2) !important; transition: all 0.3s; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
                    <h3 class="fw-bold text-white mb-0" style="font-size: clamp(1.25rem, 3vw, 1.875rem);">500+</h3>
                    <p class="mb-0 fw-medium text-nowrap" style="font-size: clamp(10px, 1.5vw, 0.875rem); color: #DBEAFE;">UMKM Binaan</p>
                </div>
                <div class="backdrop-blur-md rounded-3 border hover-scale" 
                     style="background-color: rgba(255, 255, 255, 0.1); padding: 0.5rem 1rem; border-color: rgba(255, 255, 255, 0.2) !important; transition: all 0.3s; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
                    <h3 class="fw-bold text-white mb-0" style="font-size: clamp(1.25rem, 3vw, 1.875rem);">30+</h3>
                    <p class="mb-0 fw-medium text-nowrap" style="font-size: clamp(10px, 1.5vw, 0.875rem); color: #DBEAFE;">Program Pelatihan</p>
                </div>
                <div class="backdrop-blur-md rounded-3 border hover-scale" 
                     style="background-color: rgba(255, 255, 255, 0.1); padding: 0.5rem 1rem; border-color: rgba(255, 255, 255, 0.2) !important; transition: all 0.3s; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
                    <h3 class="fw-bold text-white mb-0" style="font-size: clamp(1.25rem, 3vw, 1.875rem);">10</h3>
                    <p class="mb-0 fw-medium text-nowrap" style="font-size: clamp(10px, 1.5vw, 0.875rem); color: #DBEAFE;">Tahun Pengabdian</p>
                </div>
            </div>

            <!-- CTA Buttons dengan Improved Design -->
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-2 gap-sm-3 mb-3 mb-sm-4 px-2">
                <a href="#tentang" 
                   class="btn btn-shine fw-bold rounded-pill hover-scale text-decoration-none" 
                   style="background: linear-gradient(90deg, #2563EB, #1D4ED8); color: white; padding: 0.625rem 1.5rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); transition: all 0.3s; font-size: clamp(0.75rem, 1.5vw, 0.875rem);">
                    <span class="position-relative d-flex align-items-center justify-content-center gap-2" style="z-index: 10;">
                        <svg style="width: 1rem; height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Tentang Kami</span>
                    </span>
                    <div class="btn-shine-effect"></div>
                </a>
                
                <a href="#program&layanan" 
                   class="btn bg-white fw-bold rounded-pill hover-scale text-decoration-none" 
                   style="color: #111827; padding: 0.625rem 1.5rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); transition: all 0.3s; font-size: clamp(0.75rem, 1.5vw, 0.875rem);">
                    <span class="d-flex align-items-center justify-content-center gap-2">
                        <svg style="width: 1rem; height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        <span>Program & Layanan</span>
                    </span>
                </a>
            </div>

            <!-- Trust Badge / Additional Info -->
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 gap-sm-4" style="font-size: clamp(10px, 1.5vw, 0.75rem); color: #DBEAFE;">
                <div class="d-flex align-items-center gap-1 gap-sm-2">
                    <svg style="width: 1rem; height: 1rem; color: #4ADE80;" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Terpercaya</span>
                </div>
                <div class="d-flex align-items-center gap-1 gap-sm-2">
                    <svg style="width: 1rem; height: 1rem; color: #FBBF24;" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span>Berpengalaman</span>
                </div>
                <div class="d-flex align-items-center gap-1 gap-sm-2">
                    <svg style="width: 1rem; height: 1rem; color: #60A5FA;" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Bersertifikat</span>
                </div>
            </div>
        </div>
    </div>

    <!-- RESPONSIVE WAVE DIVIDER -->
    <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="line-height: 0; z-index: 10;">
        <!-- Mobile Wave (< 640px) -->
        <svg class="d-block d-sm-none position-relative w-100" style="height: 50px;" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <defs>
                <linearGradient id="waveGradientMobile" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#3b82f6" />
                    <stop offset="50%" stop-color="#1d4ed8" />
                    <stop offset="100%" stop-color="#1e3a8a" />
                </linearGradient>
            </defs>
            <path 
                d="M0,40 Q300,80 600,40 T1200,40 L1200,120 L0,120 Z"
                fill="url(#waveGradientMobile)" />
        </svg>
        <!-- Desktop Wave (≥ 1024px) -->
        <svg class="d-none d-lg-block position-relative w-100" style="height: 80px;" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <defs>
                <linearGradient id="waveGradientDesktop" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#3b82f6" />
                    <stop offset="50%" stop-color="#1d4ed8" />
                    <stop offset="100%" stop-color="#1e3a8a" />
                </linearGradient>
            </defs>
            <path 
                d="M985.66 92.83C906.67 72 823.78 31 743.84 14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84 11.73-114 31.07-172 41.86A600.21 600.21 0 0 1 0 27.35V120H1200V95.8C1132.19 118.92 1055.71 111.31 985.66 92.83Z"
                fill="url(#waveGradientDesktop)" />
        </svg>
    </div>
</section>


<!-- Information Section -->
<section id="tentang" class="py-16" style="background: linear-gradient(90deg, #3B82F6 0%, #1D4ED8 50%, #1E3A8A 100%);">
    <div class="container-fluid px-3 px-md-5" style="max-width: 1280px; margin: 0 auto;">
        <!-- Grid untuk teks & gambar -->
        <div class="row align-items-center py-4 py-lg-5 g-4 g-lg-5">
            <!-- Left Content (slide in from left) -->
            <div class="col-12 col-lg-6 opacity-0 -translate-x-8 transition-all duration-700" data-animate="left" style="transition: all 0.7s ease;">
                <div class="d-flex flex-column gap-4">
                    <h2 class="text-white fw-bold d-flex align-items-center gap-3" style="font-size: clamp(1.5rem, 4vw, 1.875rem);">
                        <span class="bg-success rounded" style="width: 0.375rem; height: 2rem;"></span>
                        INFORMASI LP UMKM PWM DIY
                    </h2>
                    <p class="text-white-50 lh-base text-justify" style="font-size: clamp(0.875rem, 2vw, 1.125rem); color: #d1fae5 !important;">
                        <span class="fw-semibold" style="color: #86efac !important;">Winariyati, S.Si</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<span class="fw-semibold" style="color: #86efac !important;">bayam Brasil</span>, yang kemudian diolah menjadi berbagai produk inovatif seperti mie, jus, dan keripik.
                    </p>
                </div>
            </div>

            <!-- Right Content - Image Carousel (slide in from right) -->
<div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end opacity-0 translate-x-8 transition-all duration-700" data-animate="right" style="transition: all 0.7s ease;">
    <div class="position-relative" style="width: 100%; max-width: 600px;">
        <!-- Carousel Container -->
        <div class="carousel-container rounded-3 shadow-lg overflow-hidden" style="width: 100%; height: auto; position: relative;">
            <!-- Slide 1 -->
            <div class="carousel-slide-item active" style="display: block;">
                <img src="https://www.mediamu.com/media/images/2023/10/115653a6e823fb95.jpeg?location=1&width=&height=&quality=90&fit=1" 
                    alt="Kegiatan UMKM PWM DIY 1" 
                    class="img-fluid hover-scale" 
                    style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.5s ease;">
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-slide-item" style="display: none;">
                <img src="https://www.mediamu.com/media/images/2024/03/1165ebe26be51e1.jpeg?location=1&width=&height=&quality=90&fit=1" 
                    alt="Kegiatan UMKM PWM DIY 2" 
                    class="img-fluid hover-scale" 
                    style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.5s ease;">
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-slide-item" style="display: none;">
                <img src="https://www.mediamu.com/media/images/2023/10/115653a6e823fb95.jpeg?location=1&width=&height=&quality=90&fit=1" 
                    alt="Kegiatan UMKM PWM DIY 3" 
                    class="img-fluid hover-scale" 
                    style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.5s ease;">
            </div>
        </div>
        
        <!-- Navigation Arrows -->
        <button onclick="changeSlide(-1)" class="carousel-nav prev" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.8); border: none; border-radius: 50%; width: 40px; height: 40px; cursor: pointer; z-index: 10; transition: all 0.3s ease;">
            <i class="fas fa-chevron-left" style="color: #333;"></i>
        </button>
        <button onclick="changeSlide(1)" class="carousel-nav next" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.8); border: none; border-radius: 50%; width: 40px; height: 40px; cursor: pointer; z-index: 10; transition: all 0.3s ease;">
            <i class="fas fa-chevron-right" style="color: #333;"></i>
        </button>
        
        <!-- Dots Indicator -->
        <div class="carousel-dots" style="position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px; z-index: 10;">
            <span class="dot active" onclick="currentSlideSet(0)" style="width: 12px; height: 12px; border-radius: 50%; background: #fff; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>
            <span class="dot" onclick="currentSlideSet(1)" style="width: 12px; height: 12px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; transition: all 0.3s ease;"></span>
            <span class="dot" onclick="currentSlideSet(2)" style="width: 12px; height: 12px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; transition: all 0.3s ease;"></span>
        </div>
    </div>
</div>
        </div>

        <!-- Bottom Cards -->
        <div class="row g-4 mt-4">
            <!-- Daftar Card -->
            <div class="col-12 col-md-4">
                <button onclick="openModal('modalDaftar')" class="btn w-100 bg-white p-4 rounded-4 shadow-sm text-center position-relative border-0" style="transition: all 0.2s ease;">
                    <!-- Mobile tap indicator -->
                    <div class="position-absolute top-0 end-0 mt-2 me-2 d-md-none" style="opacity: 0.7;">
                        <div class="bg-success text-white px-2 py-1 rounded-pill fw-bold" style="font-size: 0.625rem; animation: pulse 2s infinite;">
                            TAP
                        </div>
                    </div>
                    <div class="rounded-circle mx-auto mb-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #d1fae5 0%, #86efac 100%); transition: transform 0.3s ease;">
                        <img src="images/daftar.png" alt="Voting Icon" class="w-50 h-50" style="object-fit: contain;">
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-2 d-flex align-items-center justify-content-center gap-2">
                        Daftar
                        <span class="text-success d-inline-block" style="animation: bounce 1s infinite;">➔</span>
                    </h3>
                    <p class="text-muted mb-3" style="font-size: 0.875rem;">Daftarkan UMKM Anda untuk bergabung</p>
                    <!-- Mobile-specific call to action -->
                    <div class="text-success fw-semibold text-uppercase d-md-none" style="font-size: 0.625rem; letter-spacing: 0.05em; opacity: 0.6; animation: pulse 2s infinite;">
                        📱 Sentuh untuk membuka
                    </div>
                </button>
            </div>

            <!-- Tentang Kami Card -->
            <div class="col-12 col-md-4">
                <button onclick="openModal('modalTentang')" class="btn w-100 bg-white p-4 rounded-4 shadow-sm text-center position-relative border-0" style="transition: all 0.2s ease;">
                    <!-- Mobile tap indicator -->
                    <div class="position-absolute top-0 end-0 mt-2 me-2 d-md-none" style="opacity: 0.7;">
                        <div class="bg-primary text-white px-2 py-1 rounded-pill fw-bold" style="font-size: 0.625rem; animation: pulse 2s infinite;">
                            TAP
                        </div>
                    </div>
                    <div class="rounded-circle mx-auto mb-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #dbeafe 0%, #93c5fd 100%); transition: transform 0.3s ease;">
                        <img src="images/team.png" alt="Audience Icon" class="w-50 h-50" style="object-fit: contain;">
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-2 d-flex align-items-center justify-content-center gap-2">
                        Tentang Kami
                        <span class="text-primary d-inline-block" style="animation: bounce 1s infinite;">➔</span>
                    </h3>
                    <p class="text-muted mb-3" style="font-size: 0.875rem;">Pelajari lebih lanjut tentang kami</p>
                    <!-- Mobile-specific call to action -->
                    <div class="text-primary fw-semibold text-uppercase d-md-none" style="font-size: 0.625rem; letter-spacing: 0.05em; opacity: 0.6; animation: pulse 2s infinite;">
                        📱 Sentuh untuk membuka
                    </div>
                </button>
            </div>

            <!-- Visi dan Misi Card -->
            <div class="col-12 col-md-4">
                <button onclick="openModal('modalVisi')" class="btn w-100 bg-white p-4 rounded-4 shadow-sm text-center position-relative border-0" style="transition: all 0.2s ease;">
                    <!-- Mobile tap indicator -->
                    <div class="position-absolute top-0 end-0 mt-2 me-2 d-md-none" style="opacity: 0.7;">
                        <div class="text-white px-2 py-1 rounded-pill fw-bold" style="background-color: #a855f7; font-size: 0.625rem; animation: pulse 2s infinite;">
                            TAP
                        </div>
                    </div>
                    <div class="rounded-circle mx-auto mb-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #e9d5ff 0%, #c084fc 100%); transition: transform 0.3s ease;">
                        <img src="images/program.png" alt="Book Icon" class="w-50 h-50" style="object-fit: contain;">
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-2 d-flex align-items-center justify-content-center gap-2">
                        Program Kegiatan
                        <span class="d-inline-block" style="color: #a855f7; animation: bounce 1s infinite;">➔</span>
                    </h3>
                    <p class="text-muted mb-3" style="font-size: 0.875rem;">Mengetahui Program kerja LP UMKM PWM DIY</p>
                    <!-- Mobile-specific call to action -->
                    <div class="fw-semibold text-uppercase d-md-none" style="color: #a855f7; font-size: 0.625rem; letter-spacing: 0.05em; opacity: 0.6; animation: pulse 2s infinite;">
                        📱 Sentuh untuk membuka
                    </div>
                </button>
            </div>
        </div>

        <!-- Modal Daftar -->
        <div id="modalDaftar" class="modal fade" tabindex="-1" style="display: none; background-color: rgba(0, 0, 0, 0.5);">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                <div class="modal-content rounded-4 shadow-lg" style="background: linear-gradient(135deg, #d1fae5 0%, #5eead4 100%);">
                    <div class="modal-body p-4 p-md-5 position-relative">
                        <button onclick="closeModal('modalDaftar')" class="btn-close position-absolute top-0 end-0 m-3" style="font-size: 1.5rem;"></button>
                        <div class="text-center mb-4">
                            <img src="images/voting_3160562.png" alt="Daftar Icon" style="width: 4rem; height: 4rem;">
                        </div>
                        <h2 class="h3 fw-bold text-dark mb-4 text-center">Daftar UMKM Bersama LP PWM DIY</h2>
                        <div class="bg-white rounded-3 p-4 mb-4" style="background-color: rgba(255, 255, 255, 0.7) !important;">
                            <p class="text-dark text-center mb-3 lh-base fw-medium">
                                <strong>Lembaga Perekonomian Pimpinan Wilayah Muhammadiyah DIY</strong> mengundang UMKM untuk bergabung dalam ekosistem ekonomi syariah yang berkelanjutan dan berdampak positif.
                            </p>
                        </div>

                        <!-- Alur Pendaftaran Section -->
                        <div class="rounded-4 p-4 mb-4 border" style="background: linear-gradient(to right, #eff6ff 0%, #e0e7ff 100%); border-color: #93c5fd !important;">
                            <h3 class="h4 fw-bold text-center text-dark mb-4 d-flex align-items-center justify-content-center">
                                <span class="me-2" style="background: linear-gradient(to right, #3b82f6, #9333ea); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">🛤️</span>
                                Alur Pendaftaran UMKM
                            </h3>
                            <div class="position-relative">
                                <!-- Timeline Line -->
                                <div class="position-absolute start-0 top-0 bottom-0 rounded-pill d-none d-md-block" style="left: 2rem; width: 0.25rem; background: linear-gradient(to bottom, #60a5fa 0%, #c084fc 50%, #4ade80 100%);"></div>

                                <!-- Step 1 -->
                                <div class="d-flex align-items-start mb-4 position-relative">
                                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-lg" style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #3b82f6, #2563eb); font-size: 1.25rem; z-index: 10;">
                                        1
                                    </div>
                                    <div class="ms-3 ms-md-4 bg-white rounded-3 p-3 shadow-sm flex-grow-1" style="background-color: rgba(255, 255, 255, 0.8) !important;">
                                        <h4 class="fw-bold text-dark h6 mb-2">Kontak Awal</h4>
                                        <p class="text-dark mb-2" style="font-size: 0.875rem;">Hubungi kami melalui WhatsApp atau telepon untuk menyatakan minat bergabung</p>
                                        <div class="text-primary fw-medium" style="font-size: 0.875rem;">⏱️ Estimasi: 5 menit</div>
                                    </div>
                                </div>

                                <!-- Step 2 -->
                                <div class="d-flex align-items-start mb-4 position-relative">
                                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-lg" style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #a855f7, #9333ea); font-size: 1.25rem; z-index: 10;">
                                        2
                                    </div>
                                    <div class="ms-3 ms-md-4 bg-white rounded-3 p-3 shadow-sm flex-grow-1" style="background-color: rgba(255, 255, 255, 0.8) !important;">
                                        <h4 class="fw-bold text-dark h6 mb-2">Konsultasi & Penilaian</h4>
                                        <p class="text-dark mb-2" style="font-size: 0.875rem;">Tim kami akan melakukan konsultasi untuk memahami profil usaha dan kebutuhan UMKM Anda</p>
                                        <div class="fw-medium" style="font-size: 0.875rem; color: #a855f7;">⏱️ Estimasi: 30-60 menit (via telepon/tatap muka)</div>
                                    </div>
                                </div>

                                <!-- Step 3 -->
                                <div class="d-flex align-items-start mb-4 position-relative">
                                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-lg" style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #6366f1, #4f46e5); font-size: 1.25rem; z-index: 10;">
                                        3
                                    </div>
                                    <div class="ms-3 ms-md-4 bg-white rounded-3 p-3 shadow-sm flex-grow-1" style="background-color: rgba(255, 255, 255, 0.8) !important;">
                                        <h4 class="fw-bold text-dark h6 mb-2">Pengisian Formulir</h4>
                                        <p class="text-dark mb-2" style="font-size: 0.875rem;">Lengkapi formulir pendaftaran dengan data usaha yang diperlukan:</p>
                                        <ul class="text-muted mb-2" style="font-size: 0.875rem;">
                                            <li>• Data pemilik usaha</li>
                                            <li>• Profil usaha dan produk</li>
                                            <li>• Dokumen legalitas (NIB, NPWP, dll)</li>
                                        </ul>
                                        <div class="fw-medium" style="font-size: 0.875rem; color: #6366f1;">⏱️ Estimasi: 15-30 menit</div>
                                    </div>
                                </div>

                                <!-- Step 4 -->
                                <div class="d-flex align-items-start mb-4 position-relative">
                                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-lg" style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #14b8a6, #0d9488); font-size: 1.25rem; z-index: 10;">
                                        4
                                    </div>
                                    <div class="ms-3 ms-md-4 bg-white rounded-3 p-3 shadow-sm flex-grow-1" style="background-color: rgba(255, 255, 255, 0.8) !important;">
                                        <h4 class="fw-bold text-dark h6 mb-2">Verifikasi & Validasi</h4>
                                        <p class="text-dark mb-2" style="font-size: 0.875rem;">Tim LP PWM DIY akan melakukan verifikasi dokumen dan validasi data yang telah disubmit</p>
                                        <div class="fw-medium" style="font-size: 0.875rem; color: #14b8a6;">⏱️ Estimasi: 1-3 hari kerja</div>
                                    </div>
                                </div>

                                <!-- Step 5 -->
                                <div class="d-flex align-items-start position-relative">
                                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-lg" style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #22c55e, #16a34a); font-size: 1.25rem; z-index: 10;">
                                        5
                                    </div>
                                    <div class="ms-3 ms-md-4 bg-white rounded-3 p-3 shadow-sm flex-grow-1" style="background-color: rgba(255, 255, 255, 0.8) !important;">
                                        <h4 class="fw-bold text-dark h6 mb-2">Persetujuan & Onboarding</h4>
                                        <p class="text-dark mb-2" style="font-size: 0.875rem;">Selamat! UMKM Anda resmi terdaftar dan akan mendapat akses ke semua program dan layanan</p>
                                        <div class="d-flex align-items-center gap-3 mt-2 flex-wrap">
                                            <div class="text-success fw-medium" style="font-size: 0.875rem;">🎉 Selamat bergabung!</div>
                                            <div class="px-2 py-1 rounded-pill" style="font-size: 0.75rem; background-color: #dcfce7; color: #15803d;">Status: Aktif</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Time -->
                            <div class="mt-4 rounded-3 p-3 border" style="background: linear-gradient(to right, #fef3c7 0%, #fed7aa 100%); border-color: #fbbf24 !important;">
                                <div class="text-center">
                                    <p class="text-dark fw-medium mb-1" style="font-size: 0.875rem;">⚡ Total Waktu Proses Pendaftaran</p>
                                    <p class="h4 fw-bold mb-1" style="color: #d97706;">Maksimal 5 Hari Kerja</p>
                                    <p class="text-muted mb-0" style="font-size: 0.875rem;">*Dari kontak awal hingga aktivasi akun</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h3 class="h6 fw-semibold text-dark mb-3 text-center">Manfaat Bergabung dengan LP PWM DIY:</h3>
                            <ul class="list-unstyled text-dark">
                                <li class="d-flex align-items-start mb-3">
                                    <span class="text-success me-3 fs-5">✅</span>
                                    <span><strong>Jaringan Pemasaran:</strong> Akses ke platform pemasaran digital dan offline yang luas</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <span class="text-success me-3 fs-5">✅</span>
                                    <span><strong>Pembinaan Usaha:</strong> Program mentoring dan konsultasi bisnis berkelanjutan</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <span class="text-success me-3 fs-5">✅</span>
                                    <span><strong>Pelatihan Berkualitas:</strong> Workshop manajemen, keuangan, dan digital marketing</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <span class="text-success me-3 fs-5">✅</span>
                                    <span><strong>Akses Permodalan:</strong> Informasi program pembiayaan dan investasi syariah</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <span class="text-success me-3 fs-5">✅</span>
                                    <span><strong>Sertifikasi Halal:</strong> Pendampingan proses sertifikasi produk halal</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <span class="text-success me-3 fs-5">✅</span>
                                    <span><strong>Komunitas Solid:</strong> Networking dengan sesama pengusaha Muslim DIY</span>
                                </li>
                            </ul>
                        </div>

                        <div class="rounded-3 p-3 mb-4 border-start border-4 border-primary" style="background-color: #eff6ff;">
                            <p class="text-dark text-center fst-italic mb-0" style="font-size: 0.875rem;">
                                "Bersama LP PWM DIY, wujudkan UMKM yang tidak hanya menguntungkan secara ekonomi, tetapi juga membawa berkah dan manfaat bagi umat."
                            </p>
                        </div>

                        <hr class="my-4">

                        <div class="text-center mb-3">
                            <p class="text-muted mb-2" style="font-size: 0.875rem;">Siap bergabung dengan ekosistem UMKM LP PWM DIY?</p>
                            <p class="text-muted mb-0" style="font-size: 0.75rem;">*Pendaftaran gratis dan proses verifikasi maksimal 3 hari kerja</p>
                        </div>

                        <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                            <a href="https://wa.me/6284151689959?text=Halo%20saya%20ingin%20mendaftar%20UMKM" target="_blank" class="btn btn-lg text-white rounded-3 shadow-lg fw-semibold text-center" style="background: linear-gradient(to right, #22c55e, #16a34a); transition: all 0.3s ease;">
                                📱 Mulai Pendaftaran via WhatsApp
                            </a>
                        </div>

                        <div class="text-center mt-3">
                            <p class="text-muted mb-0" style="font-size: 0.75rem;">
                                Atau hubungi langsung: <strong>(0274) XXX-XXXX</strong><br>
                                Email: <strong>lpumkm@pwmdiy.org</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tentang -->
        <div id="modalTentang" class="modal fade" tabindex="-1" style="display: none; background-color: rgba(0, 0, 0, 0.5);">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-4 shadow-lg" style="background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);">
                    <div class="modal-body p-4 p-md-5 position-relative">
                        <button onclick="closeModal('modalTentang')" class="btn-close position-absolute top-0 end-0 m-3" style="font-size: 1.5rem;"></button>
                        <div class="text-center mb-4">
                            <img src="images/audience_1040005.png" alt="Tentang Icon" style="width: 4rem; height: 4rem;">
                        </div>
                        <h2 class="h4 fw-bold text-dark mb-4 text-center">Tentang LP PWM DIY</h2>
                        <div class="bg-white rounded-3 p-4 mb-4" style="background-color: rgba(255, 255, 255, 0.7) !important;">
                            <h3 class="h6 fw-semibold text-dark mb-3 text-center">Lembaga Perekonomian Pimpinan Wilayah Muhammadiyah DIY</h3>
                            <p class="text-dark lh-base text-justify mb-0">
                                LP PWM DIY adalah lembaga resmi di bawah naungan Pimpinan Wilayah Muhammadiyah Daerah Istimewa Yogyakarta yang berkomitmen membangun ekosistem ekonomi umat yang berkelanjutan, berkeadilan, dan berlandaskan nilai-nilai Islam. Sejak didirikan, kami telah menjadi mitra terpercaya dalam pemberdayaan ekonomi masyarakat, khususnya pelaku UMKM di wilayah DIY.
                            </p>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-12 col-md-6">
                                <div class="rounded-3 p-3 border-start border-4 border-success" style="background-color: #f0fdf4;">
                                    <h4 class="fw-semibold text-dark mb-2" style="font-size: 0.875rem;">📍 Visi</h4>
                                    <p class="text-dark mb-0" style="font-size: 0.875rem;">
                                        Menjadi lembaga perekonomian terdepan dalam membangun ekonomi umat yang maju, mandiri, dan berkah.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="rounded-3 p-3 border-start border-4 border-primary" style="background-color: #eff6ff;">
                                    <h4 class="fw-semibold text-dark mb-2" style="font-size: 0.875rem;">🎯 Misi</h4>
                                    <p class="text-dark mb-0" style="font-size: 0.875rem;">
                                        Memberdayakan ekonomi umat melalui pembinaan, pendampingan, dan pengembangan jejaring usaha yang berkelanjutan.
                                    </p>
                                </div>
                            </div>
                        </div>

                <div class="mb-4">
                            <h3 class="h6 fw-semibold text-dark mb-3 text-center">Program & Layanan Unggulan:</h3>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-start bg-white rounded-3 p-3" style="background-color: rgba(255, 255, 255, 0.5) !important;">
                                    <span class="me-3 fs-5" style="color: #059669;">🌱</span>
                                    <div>
                                        <span class="fw-medium">Pemberdayaan UMKM:</span>
                                        <span class="text-dark ms-1" style="font-size: 0.875rem;">Pelatihan manajemen, pemasaran digital, dan pengembangan produk</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start bg-white rounded-3 p-3" style="background-color: rgba(255, 255, 255, 0.5) !important;">
                                    <span class="me-3 fs-5" style="color: #059669;">🤝</span>
                                    <div>
                                        <span class="fw-medium">Jaringan Kolaborasi:</span>
                                        <span class="text-dark ms-1" style="font-size: 0.875rem;">Menghubungkan sesama pengusaha Muslim untuk saling mendukung</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start bg-white rounded-3 p-3" style="background-color: rgba(255, 255, 255, 0.5) !important;">
                                    <span class="me-3 fs-5" style="color: #059669;">💼</span>
                                    <div>
                                        <span class="fw-medium">Konsultasi Bisnis:</span>
                                        <span class="text-dark ms-1" style="font-size: 0.875rem;">Pendampingan strategis dan solusi permasalahan usaha</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start bg-white rounded-3 p-3" style="background-color: rgba(255, 255, 255, 0.5) !important;">
                                    <span class="me-3 fs-5" style="color: #059669;">📜</span>
                                    <div>
                                        <span class="fw-medium">Sertifikasi Halal:</span>
                                        <span class="text-dark ms-1" style="font-size: 0.875rem;">Fasilitasi proses sertifikasi halal untuk produk UMKM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start bg-white rounded-3 p-3" style="background-color: rgba(255, 255, 255, 0.5) !important;">
                                    <span class="me-3 fs-5" style="color: #059669;">💰</span>
                                    <div>
                                        <span class="fw-medium">Akses Permodalan:</span>
                                        <span class="text-dark ms-1" style="font-size: 0.875rem;">Informasi dan fasilitasi pembiayaan syariah</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start bg-white rounded-3 p-3" style="background-color: rgba(255, 255, 255, 0.5) !important;">
                                    <span class="me-3 fs-5" style="color: #059669;">🎓</span>
                                    <div>
                                        <span class="fw-medium">Pendidikan Ekonomi Syariah:</span>
                                        <span class="text-dark ms-1" style="font-size: 0.875rem;">Sosialisasi dan edukasi prinsip ekonomi Islam</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3 p-3 mb-4 border" style="background: linear-gradient(to right, #fef9e7 0%, #fed7aa 100%); border-color: #fbbf24 !important;">
                            <div class="text-center">
                                <h4 class="fw-semibold text-dark mb-3" style="font-size: 0.875rem;">🏆 Pencapaian</h4>
                                <div class="row g-3">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <div class="fw-bold h5 text-primary">500+</div>
                                            <div class="text-dark" style="font-size: 0.75rem;">UMKM Binaan</div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-center">
                                            <div class="fw-bold h5 text-success">50+</div>
                                            <div class="text-dark" style="font-size: 0.75rem;">Pelatihan/Tahun</div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-center">
                                            <div class="fw-bold h5" style="color: #a855f7;">25+</div>
                                            <div class="text-dark" style="font-size: 0.75rem;">Mitra Strategis</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-3">

                        <div class="text-center">
                            <p class="text-dark fst-italic mb-2" style="font-size: 0.875rem;">
                                "Membangun ekonomi umat dengan semangat Al-Ma'un dan keberkahan yang nyata"
                            </p>
                            <div class="d-flex flex-column flex-md-row justify-content-center gap-2 text-muted flex-wrap" style="font-size: 0.75rem;">
                                <span>📧 lpumkm@pwmdiy.org</span>
                                <span class="d-none d-md-inline">|</span>
                                <span>📞 (0274) XXX-XXXX</span>
                                <span class="d-none d-md-inline">|</span>
                                <span>📍 Yogyakarta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Program Kegiatan -->
        <div id="modalVisi" class="modal fade" tabindex="-1" style="display: none; background-color: rgba(0, 0, 0, 0.5);">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-4 shadow-lg" style="background: linear-gradient(135deg, #f3e8ff 0%, #fbdff8 100%);">
                    <div class="modal-body p-4 p-md-5 position-relative">
                        <button onclick="closeModal('modalVisi')" class="btn-close position-absolute top-0 end-0 m-3" style="font-size: 1.5rem;"></button>
                        <div class="text-center mb-4">
                            <img src="images/open-book_2280151.png" alt="Program Icon" style="width: 4rem; height: 4rem;">
                        </div>
                        <h2 class="h4 fw-bold text-dark mb-4 text-center">Program Kegiatan</h2>
                        <div class="bg-white rounded-3 p-4 mb-4" style="background-color: rgba(255, 255, 255, 0.7) !important;">
                            <p class="text-dark text-center lh-base fw-medium mb-0">
                                <strong>Lembaga Perekonomian PWM DIY</strong> menyelenggarakan berbagai program pemberdayaan UMKM yang berkelanjutan dan berdampak nyata bagi kemajuan ekonomi umat.
                            </p>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <!-- Program Pembinaan -->
                            <div class="bg-white rounded-3 p-3 border-start border-4" style="border-color: #a855f7 !important; background-color: rgba(255, 255, 255, 0.6) !important;">
                                <h3 class="fw-bold text-dark mb-2 d-flex align-items-center" style="font-size: 0.875rem;">
                                    <span style="color: #a855f7;" class="me-2">📚</span>
                                    Program Pembinaan & Pelatihan
                                </h3>
                                <ul class="text-dark mb-0" style="font-size: 0.875rem; margin-left: 1.5rem;">
                                    <li>• Workshop manajemen keuangan syariah</li>
                                    <li>• Pelatihan digital marketing dan e-commerce</li>
                                    <li>• Seminar pengembangan produk halal</li>
                                    <li>• Kursus kepemimpinan bisnis Islami</li>
                                </ul>
                            </div>

                            <!-- Program Pendampingan -->
                            <div class="bg-white rounded-3 p-3 border-start border-4" style="border-color: #22c55e !important; background-color: rgba(255, 255, 255, 0.6) !important;">
                                <h3 class="fw-bold text-dark mb-2 d-flex align-items-center" style="font-size: 0.875rem;">
                                    <span style="color: #22c55e;" class="me-2">🤝</span>
                                    Program Pendampingan Usaha
                                </h3>
                                <ul class="text-dark mb-0" style="font-size: 0.875rem; margin-left: 1.5rem;">
                                    <li>• Konsultasi bisnis dan strategi pemasaran</li>
                                    <li>• Pendampingan legalitas dan perizinan</li>
                                    <li>• Mentoring pengembangan jaringan distribusi</li>
                                    <li>• Coaching personal branding dan networking</li>
                                </ul>
                            </div>

                            <!-- Program Akses Pasar -->
                            <div class="bg-white rounded-3 p-3 border-start border-4" style="border-color: #3b82f6 !important; background-color: rgba(255, 255, 255, 0.6) !important;">
                                <h3 class="fw-bold text-dark mb-2 d-flex align-items-center" style="font-size: 0.875rem;">
                                    <span style="color: #3b82f6;" class="me-2">🛍️</span>
                                    Program Akses Pasar & Pameran
                                </h3>
                                <ul class="text-dark mb-0" style="font-size: 0.875rem; margin-left: 1.5rem;">
                                    <li>• Pameran produk UMKM Muhammadiyah DIY</li>
                                    <li>• Bazaar berkala di masjid dan sekolah</li>
                                    <li>• Marketplace online khusus produk halal</li>
                                    <li>• Kerjasama dengan retail modern</li>
                                </ul>
                            </div>

                            <!-- Program Permodalan -->
                            <div class="bg-white rounded-3 p-3 border-start border-4" style="border-color: #eab308 !important; background-color: rgba(255, 255, 255, 0.6) !important;">
                                <h3 class="fw-bold text-dark mb-2 d-flex align-items-center" style="font-size: 0.875rem;">
                                    <span style="color: #ca8a04;" class="me-2">💰</span>
                                    Program Akses Permodalan
                                </h3>
                                <ul class="text-dark mb-0" style="font-size: 0.875rem; margin-left: 1.5rem;">
                                    <li>• Fasilitasi pembiayaan syariah</li>
                                    <li>• Program hibah modal usaha</li>
                                    <li>• Kerjasama dengan BMT dan koperasi</li>
                                    <li>• Edukasi literasi keuangan syariah</li>
                                </ul>
                            </div>

                            <!-- Program Sertifikasi -->
                            <div class="bg-white rounded-3 p-3 border-start border-4" style="border-color: #f97316 !important; background-color: rgba(255, 255, 255, 0.6) !important;">
                                <h3 class="fw-bold text-dark mb-2 d-flex align-items-center" style="font-size: 0.875rem;">
                                    <span style="color: #f97316;" class="me-2">🏆</span>
                                    Program Sertifikasi & Standardisasi
                                </h3>
                                <ul class="text-dark mb-0" style="font-size: 0.875rem; margin-left: 1.5rem;">
                                    <li>• Pendampingan sertifikasi halal MUI</li>
                                    <li>• Pelatihan standar keamanan pangan</li>
                                    <li>• Sertifikasi Good Manufacturing Practice</li>
                                    <li>• Workshop branding dan kemasan produk</li>
                                </ul>
                            </div>

                            <!-- Program Komunitas -->
                            <div class="bg-white rounded-3 p-3 border-start border-4" style="border-color: #06b6d4 !important; background-color: rgba(255, 255, 255, 0.6) !important;">
                                <h3 class="fw-bold text-dark mb-2 d-flex align-items-center" style="font-size: 0.875rem;">
                                    <span style="color: #06b6d4;" class="me-2">👥</span>
                                    Program Komunitas & Networking
                                </h3>
                                <ul class="text-dark mb-0" style="font-size: 0.875rem; margin-left: 1.5rem;">
                                    <li>• Forum diskusi bulanan UMKM</li>
                                    <li>• Silaturahmi pengusaha Muhammadiyah</li>
                                    <li>• Program mentoring sesama anggota</li>
                                    <li>• Sharing session success story</li>
                                </ul>
                            </div>
                        </div>

                        <div class="rounded-3 p-3 mt-4 mb-4 border" style="background: linear-gradient(to right, #f3e8ff 0%, #fce7f3 100%); border-color: #c084fc !important;">
                            <div class="text-center">
                                <h4 class="fw-semibold text-dark mb-2" style="font-size: 0.875rem;">📅 Jadwal Rutin</h4>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="bg-white rounded p-2" style="background-color: rgba(255, 255, 255, 0.7) !important;">
                                            <div class="fw-medium" style="color: #a855f7; font-size: 0.75rem;">Setiap Bulan</div>
                                            <div class="text-dark" style="font-size: 0.625rem;">Workshop & Pelatihan</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-white rounded p-2" style="background-color: rgba(255, 255, 255, 0.7) !important;">
                                            <div class="fw-medium text-success" style="font-size: 0.75rem;">Setiap Quartal</div>
                                            <div class="text-dark" style="font-size: 0.625rem;">Pameran & Bazaar</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-3">

                        <div class="text-center">
                            <p class="text-dark fst-italic mb-2" style="font-size: 0.875rem;">
                                "Bersama membangun ekonomi umat yang berkah dan berkelanjutan"
                            </p>
                            <p class="text-muted mb-0" style="font-size: 0.75rem;">
                                Info lengkap: <strong>lpumkm@pwmdiy.org</strong> | <strong>WA: 084151689959</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Program dan Layanan Section -->
<section id="program&layanan" class="position-relative py-5 overflow-hidden" style="background: linear-gradient(90deg, #3B82F6 0%, #1D4ED8 50%, #1E3A8A 100%);">
    <!-- Background Pattern -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="opacity: 0.1;">
        <div class="position-absolute rounded-circle" style="top: 80px; left: 40px; width: 128px; height: 128px; background-color: #4ADE80; filter: blur(48px);"></div>
        <div class="position-absolute rounded-circle" style="bottom: 80px; right: 40px; width: 160px; height: 160px; background-color: #93C5FD; filter: blur(48px);"></div>
        <div class="position-absolute rounded-circle" style="top: 50%; left: 33%; width: 80px; height: 80px; background-color: #86EFAC; filter: blur(32px);"></div>
    </div>

    <div class="container position-relative" style="max-width: 1280px; z-index: 10;">
        <!-- Header Section -->
        <div class="row g-5 mb-5">
            <!-- Left Content -->
            <div class="col-12 col-lg-6 text-white">
                
                <h2 class="display-4 fw-bold mb-4" style="line-height: 1.2;">
                    Program dan Layanan<br>
                    <span style="color: #4ADE80;">Melalui LP UMKM PWM DIY</span>
                </h2>
                
                <div class="mb-4" style="color: #D1D5DB; font-size: 1.125rem; line-height: 1.625;">
                    <p class="mb-3">
                        <strong class="text-white">Serikat Usaha Muhammadiyah (SUMU)</strong> adalah wadah untuk 
                        para pegiat usaha yang merupakan platform/komunitas 
                        berbagi dan sinergi bagi para anggotanya untuk semakin 
                        memajukan usaha, membuka lebih banyak lapangan kerja, 
                        dan berkontribusi positif untuk Indonesia.
                    </p>
                    
                    <p class="mb-0">
                        SUMU beranggotakan para pelaku yang sudah atau akan 
                        menjalankan usaha yang terbuka untuk warga 
                        Muhammadiyah maupun non-Muhammadiyah (termasuk 
                        non-Muslim). SUMU berkomitmen untuk menciptakan 
                        sebuah komunitas yang inklusif.
                    </p>
                </div>
                
                <button onclick="openModal('modalDaftar')" 
                    class="btn rounded-pill fw-semibold px-4 py-3 border-0 hover-scale"
                    style="background-color: #4ADE80; color: #0F172A; transition: all 0.3s;">
                    Daftar Sekarang
                </button>

            </div>
            
            <!-- Right Content - Services Grid -->
            <div class="col-12 col-lg-6">
                <div class="row g-4">
                    <!-- Mentoring Bisnis -->
                    <div class="col-12 col-sm-6">
                        <div class="rounded-4 p-4 border service-card h-100" 
                             style="background-color: rgba(51, 65, 85, 0.5); backdrop-filter: blur(8px); border-color: rgba(71, 85, 105, 0.5) !important; transition: all 0.3s;">
                            <div class="rounded-4 d-flex align-items-center justify-content-center mb-3 icon-service" 
                                 style="width: 64px; height: 64px; background: linear-gradient(135deg, #60A5FA, #2563EB); transition: transform 0.3s;">
                                <img src="<?php echo e(asset('images/mentoring.png')); ?>" alt="Mentoring Icon" class="img-fluid" style="width: 32px; height: 32px; object-fit: contain;">
                            </div>
                            <h3 class="h5 fw-bold text-white mb-2">Mentoring Bisnis</h3>
                            <p class="text-white-50 small mb-0" style="line-height: 1.625;">
                                Belajar dari sesama anggota, pelaku bisnis dan profesional untuk mempercepat pembelajaran dan mengurangi trial error.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Permodalan Usaha -->
                    <div class="col-12 col-sm-6">
                        <div class="rounded-4 p-4 border service-card h-100" 
                             style="background-color: rgba(51, 65, 85, 0.5); backdrop-filter: blur(8px); border-color: rgba(71, 85, 105, 0.5) !important; transition: all 0.3s;">
                            <div class="rounded-4 d-flex align-items-center justify-content-center mb-3 icon-service" 
                                 style="width: 64px; height: 64px; background: linear-gradient(135deg, #60A5FA, #2563EB); transition: transform 0.3s;">
                                <img src="<?php echo e(asset('images/blockchain.png')); ?>" alt="Blockchain Icon" class="img-fluid" style="width: 32px; height: 32px; object-fit: contain;">
                            </div>
                            <h3 class="h5 fw-bold text-white mb-2">Permodalan Usaha</h3>
                            <p class="text-white-50 small mb-0" style="line-height: 1.625;">
                                Asistensi akses permodalan dan investasi baik dari perbankan dan non perbankan.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Izin Usaha dan Badan Hukum -->
                    <div class="col-12 col-sm-6">
                        <div class="rounded-4 p-4 border service-card h-100" 
                             style="background-color: rgba(51, 65, 85, 0.5); backdrop-filter: blur(8px); border-color: rgba(71, 85, 105, 0.5) !important; transition: all 0.3s;">
                            <div class="rounded-4 d-flex align-items-center justify-content-center mb-3 icon-service" 
                                 style="width: 64px; height: 64px; background: linear-gradient(135deg, #60A5FA, #2563EB); transition: transform 0.3s;">
                                <img src="<?php echo e(asset('images/user.png')); ?>" alt="User Icon" class="img-fluid" style="width: 32px; height: 32px; object-fit: contain;">
                            </div>
                            <h3 class="h5 fw-bold text-white mb-2">Izin Usaha dan Badan Hukum</h3>
                            <p class="text-white-50 small mb-0" style="line-height: 1.625;">
                                Asistensi pendirian badan hukum usaha, izin, dan legalitas lainnya (PT, CV, Koperasi, dll).
                            </p>
                        </div>
                    </div>
                    
                    <!-- Akses dan Informasi -->
                    <div class="col-12 col-sm-6">
                        <div class="rounded-4 p-4 border service-card h-100" 
                             style="background-color: rgba(51, 65, 85, 0.5); backdrop-filter: blur(8px); border-color: rgba(71, 85, 105, 0.5) !important; transition: all 0.3s;">
                            <div class="rounded-4 d-flex align-items-center justify-content-center mb-3 icon-service" 
                                 style="width: 64px; height: 64px; background: linear-gradient(135deg, #60A5FA, #2563EB); transition: transform 0.3s;">
                                <img src="<?php echo e(asset('images/informative.png')); ?>" alt="Info Icon" class="img-fluid" style="width: 32px; height: 32px; object-fit: contain;">
                            </div>
                            <h3 class="h5 fw-bold text-white mb-2">Akses dan Informasi</h3>
                            <p class="text-white-50 small mb-0" style="line-height: 1.625;">
                                Akses informasi terhadap program-program pemerintah dan swasta untuk Usaha. Informasi adalah mata uang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Image/Logo -->
        <div class="text-center">
            <div class="d-inline-block">
                <h3 class="display-6 fw-bold" style="background: linear-gradient(90deg, #4ADE80, #3B82F6); -webkit-background-clip: text; background-clip: text; color: transparent; opacity: 0.5;">
                    PUSAT DAKWAH MUHAMMADIYAH
                </h3>
            </div>
        </div>
    </div>
</section>

<!-- Mitra & Kolaborasi Section -->
<section class="py-5" style="background: linear-gradient(90deg, #3B82F6 0%, #1D4ED8 50%, #1E3A8A 100%);">
    <div class="container" style="max-width: 1280px;">
        <!-- Header -->
        <div class="text-center mb-4 mb-md-5">
            <h2 class="display-5 fw-bold text-white mb-3" style="font-size: clamp(1.5rem, 5vw, 3rem);">
                Mitra & Kolaborasi
            </h2>
            <p class="text-white mx-auto px-3" style="max-width: 768px; color: #DBEAFE; font-size: clamp(0.875rem, 2vw, 1.25rem);">
                LP UMKM PWM DIY bekerja sama dengan berbagai lembaga terpercaya untuk memberikan layanan terbaik bagi UMKM
            </p>
            <div class="mx-auto mt-3 rounded-pill" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4ADE80, #93C5FD);"></div>
        </div>

        <!-- Sliding Logo Container -->
        <div class="position-relative rounded-4 py-4 py-md-5 shadow" style="background-color: rgba(51, 65, 85, 0.3); backdrop-filter: blur(8px); border: 1px solid rgba(71, 85, 105, 0.3); overflow: hidden;">
            <!-- Gradient Overlay untuk efek fade -->
            <div class="position-absolute top-0 start-0 h-100 d-none d-md-block" style="width: 128px; background: linear-gradient(90deg, rgba(51, 65, 85, 0.3), rgba(51, 65, 85, 0.2), transparent); z-index: 10; pointer-events: none;"></div>
            <div class="position-absolute top-0 end-0 h-100 d-none d-md-block" style="width: 128px; background: linear-gradient(270deg, rgba(51, 65, 85, 0.3), rgba(51, 65, 85, 0.2), transparent); z-index: 10; pointer-events: none;"></div>
            
            <!-- Gradient Overlay Mobile (lebih kecil) -->
            <div class="position-absolute top-0 start-0 h-100 d-md-none" style="width: 40px; background: linear-gradient(90deg, rgba(51, 65, 85, 0.3), rgba(51, 65, 85, 0.2), transparent); z-index: 10; pointer-events: none;"></div>
            <div class="position-absolute top-0 end-0 h-100 d-md-none" style="width: 40px; background: linear-gradient(270deg, rgba(51, 65, 85, 0.3), rgba(51, 65, 85, 0.2), transparent); z-index: 10; pointer-events: none;"></div>
            
            <!-- Sliding Content -->
            <div class="slider-track-custom d-flex">
                <!-- Set Pertama -->
                <div class="logo-set-custom d-flex">
                    <!-- PWM DIY -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/Lp umkm.png')); ?>" 
                                    alt="Logo PWM" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">
                            Pimpinan Wilayah<br>Muhammadiyah DIY
                        </p>
                    </div>

                    <!-- AUM -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/Lp umkm.png')); ?>" 
                                    alt="Logo AUM" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Amal Usaha<br>Muhammadiyah</p>
                    </div>

                    <!-- Lazizmu DIY -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/Lazismu.png')); ?>" 
                                    alt="Logo Lazismu" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Lazizmu<br>DIY</p>
                    </div>

                    <!-- Kemenag -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/kementrian.png')); ?>" 
                                    alt="Logo Kemenag" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Kementerian<br>Agama RI</p>
                    </div>

                    <!-- MUI DIY -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/mui.png')); ?>" 
                                    alt="Logo MUI" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Majelis Ulama<br>Indonesia DIY</p>
                    </div>

                    <!-- UMY -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/umy1.png')); ?>" 
                                    alt="Logo UMY" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Universitas<br>Muhammadiyah Yogya</p>
                    </div>

                    <!-- Bank Muamalat -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/bank1.png')); ?>" 
                                    alt="Logo Bank Muamalat" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Bank<br>Muamalat</p>
                    </div>

                    <!-- BMT -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/bmt.png')); ?>" 
                                    alt="Logo BMT" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Baitul Maal<br>Wat Tamwil</p>
                    </div>

                    <!-- Koperasi -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/blockchain.png')); ?>" 
                                    alt="Logo Koperasi" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Koperasi<br>Syariah</p>
                    </div>

                    <!-- Dinkop UMKM -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/dinaskop.png')); ?>" 
                                    alt="Logo Dinkop" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Dinas Koperasi<br>& UMKM DIY</p>
                    </div>
                </div>

                <!-- Set Kedua - Duplikat untuk Kontinuitas -->
                <div class="logo-set-custom d-flex">
                    <!-- PWM DIY -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/Lp umkm.png')); ?>" 
                                    alt="Logo PWM" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Pimpinan Wilayah<br>Muhammadiyah DIY</p>
                    </div>

                    <!-- AUM -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/Lp umkm.png')); ?>" 
                                    alt="Logo AUM" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Amal Usaha<br>Muhammadiyah</p>
                    </div>

                    <!-- Pemda DIY -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/blockchain.png')); ?>" 
                                    alt="Logo Pemda" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Pemerintah Daerah<br>DIY</p>
                    </div>

                    <!-- Kemenag -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/Lazismu.png')); ?>" 
                                    alt="Logo Lazismu" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">LazizMU<br>DIY</p>
                    </div>

                    <!-- MUI DIY -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/mui.png')); ?>" 
                                    alt="Logo MUI" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Majelis Ulama<br>Indonesia DIY</p>
                    </div>

                    <!-- UMY -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/umy1.png')); ?>" 
                                    alt="Logo UMY" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Universitas<br>Muhammadiyah Yogya</p>
                    </div>

                    <!-- Bank Muamalat -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/bank1.png')); ?>" 
                                    alt="Logo Bank Muamalat" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Bank<br>Muamalat</p>
                    </div>

                    <!-- BMT -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/bmt.png')); ?>" 
                                    alt="Logo BMT" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Baitul Maal<br>Wat Tamwil</p>
                    </div>

                    <!-- Koperasi -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/blockchain.png')); ?>" 
                                    alt="Logo Koperasi" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Koperasi<br>Syariah</p>
                    </div>

                    <!-- Dinkop UMKM -->
                    <div class="logo-item-custom d-flex flex-column align-items-center">
                        <div class="p-4">
                            <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center overflow-hidden" style="width: 96px; height: 96px;">
                                <img src="<?php echo e(asset('images/dinaskop.png')); ?>" 
                                    alt="Logo Dinkop" 
                                    class="img-fluid" style="width: 64px; height: 64px; object-fit: contain;">
                            </div>
                        </div>
                        <p class="small text-center fw-medium mt-2 mb-0" style="color: #DBEAFE;">Dinas Koperasi<br>& UMKM DIY</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Stats -->
        <div class="row g-4 mt-5 text-center" id="statsSection">
            <div class="col-6 col-md-3">
                <div class="mb-2">
                    <div class="display-5 fw-bold counter-number" data-target="10" data-suffix="+" style="color: #DBEAFE;">0+</div>
                    <div class="small" style="color: #BFDBFE;">Mitra Strategis</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="mb-2">
                    <div class="display-5 fw-bold counter-number" data-target="5" style="color: #86EFAC;">0</div>
                    <div class="small" style="color: #BFDBFE;">Tahun Pengalaman</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="mb-2">
                    <div class="display-5 fw-bold counter-number" data-target="500" data-suffix="+" style="color: #E9D5FF;">0+</div>
                    <div class="small" style="color: #BFDBFE;">UMKM Binaan</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="mb-2">
                    <div class="display-5 fw-bold counter-number" data-target="95" data-suffix="%" style="color: #FED7AA;">0%</div>
                    <div class="small" style="color: #BFDBFE;">Tingkat Kepuasan</div>
                </div>
            </div>
        </div>
    </div>
</section>

                            

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    // Carousel functionality
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.carousel-slide');
        let currentSlide = 0;
        
        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }
        
        // Change slide every 5 seconds
        setInterval(nextSlide, 5000);
    });

    //untuk animasi scroll bawah
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll("[data-animate]");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.dataset.animate === "left") {
                        entry.target.classList.remove("opacity-0", "-translate-x-8");
                    } else if (entry.target.dataset.animate === "right") {
                        entry.target.classList.remove("opacity-0", "translate-x-8");
                    }
                    entry.target.classList.add("opacity-100", "translate-x-0");
                    observer.unobserve(entry.target); // hanya animasi sekali
                }
            });
        }, { threshold: 0.2 });

        elements.forEach(el => observer.observe(el));
    });

    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.style.display = 'flex';
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.style.display = 'none';
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    // ========================================
    // COUNTER ANIMATION - TAMBAHAN BARU
    // ========================================
    document.addEventListener('DOMContentLoaded', function() {
        // Counter Animation Function
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const suffix = element.getAttribute('data-suffix') || '';
            const duration = 2000; // 2 detik
            const increment = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current) + suffix;
            }, 16);
        }
        
        // Intersection Observer untuk Counter
        const counterObserverOptions = {
            threshold: 0.3,
            rootMargin: '0px'
        };
        
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.counter-number');
                    counters.forEach(counter => {
                        const suffix = counter.getAttribute('data-suffix') || '';
                        counter.textContent = '0' + suffix;
                        
                        setTimeout(() => {
                            animateCounter(counter);
                        }, 200);
                    });
                    
                    counterObserver.unobserve(entry.target);
                }
            });
        }, counterObserverOptions);
        
        // Observe stats section
        const statsSection = document.getElementById('statsSection');
        if (statsSection) {
            counterObserver.observe(statsSection);
        }
    });

    // ========================================
    // IMAGE CAROUSEL - BARU
    // ========================================
    let currentImageSlide = 0;
    const imageSlides = document.querySelectorAll('.carousel-slide-item');
    const dots = document.querySelectorAll('.dot');
    
    function showSlide(n) {
        if (n >= imageSlides.length) { currentImageSlide = 0; }
        if (n < 0) { currentImageSlide = imageSlides.length - 1; }
        
        // Hide all slides
        imageSlides.forEach(slide => {
            slide.style.display = 'none';
        });
        
        // Remove active from all dots
        dots.forEach(dot => {
            dot.classList.remove('active');
            dot.style.background = 'rgba(255,255,255,0.5)';
            dot.style.width = '12px';
            dot.style.borderRadius = '50%';
        });
        
        // Show current slide
        imageSlides[currentImageSlide].style.display = 'block';
        dots[currentImageSlide].classList.add('active');
        dots[currentImageSlide].style.background = '#fff';
        dots[currentImageSlide].style.width = '30px';
        dots[currentImageSlide].style.borderRadius = '6px';
    }
    
    function changeSlide(n) {
        currentImageSlide += n;
        showSlide(currentImageSlide);
    }
    
    function currentSlideSet(n) {
        currentImageSlide = n;
        showSlide(currentImageSlide);
    }
    
    // Auto slide every 5 seconds
    setInterval(() => {
        currentImageSlide++;
        showSlide(currentImageSlide);
    }, 5000);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/welcome.blade.php ENDPATH**/ ?>