@extends('layouts.app')

@section('content')
<!-- Hero Background Section -->
<section class="container-fluid p-3" style="background: linear-gradient(135deg, #1e4db7 0%, #2563eb 100%); position: relative; overflow: hidden; padding: 60px 0;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.1) 0%, transparent 50%), radial-gradient(circle at 70% 80%, rgba(255,255,255,0.05) 0%, transparent 50%); opacity: 0.8;"></div>
    
    <!-- Floating Elements -->
    <div style="position: absolute; top: 20%; left: 10%; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
    <div style="position: absolute; top: 60%; right: 15%; width: 120px; height: 120px; background: rgba(255,255,255,0.03); border-radius: 50%; animation: float 8s ease-in-out infinite reverse;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Breadcrumb Navigation -->
                <nav class="mb-4">
                    <div class="d-flex align-items-center">
                        <a href="{{ route('noauth.lowongan.index') }}" class="text-white text-decoration-none me-3" style="opacity: 0.8; transition: opacity 0.3s;">
                            <i class="fas fa-arrow-left me-2"></i>
                            <span class="fw-semibold">Kembali ke Lowongan</span>
                        </a>
                        <div class="text-white" style="opacity: 0.6;">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <span class="text-white ms-3" style="opacity: 0.9;">Detail Lowongan</span>
                    </div>
                </nav>
                
                <!-- Main Job Card -->
                <article class="card border-0" style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.15), 0 5px 20px rgba(0,0,0,0.1); background: linear-gradient(145deg, #ffffff, #f8faff); animation: slideUp 0.8s ease-out;">
                    
                    <!-- Featured Image Section -->
                    @if($lowongan->gambar)
                        <div class="position-relative" style="overflow: hidden;">
                            <img src="{{ asset('storage/' . $lowongan->gambar) }}" 
                                class="card-img-top"
                                alt="{{ $lowongan->judul }}"
                                style="height: 400px; object-fit: cover; transition: transform 0.6s ease;"
                                onmouseover="this.style.transform='scale(1.02)';"
                                onmouseout="this.style.transform='scale(1)';">
                            
                            <!-- Gradient Overlay -->
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 100px; background: linear-gradient(transparent, rgba(0,0,0,0.3));"></div>
                            
                            <!-- Job Badge -->
                            <div class="position-absolute top-0 end-0 m-4">
                                <span class="badge bg-success px-3 py-2 rounded-pill fw-semibold" style="backdrop-filter: blur(10px); box-shadow: 0 4px 15px rgba(30, 77, 183, 0.3);">
                                    <i class="fas fa-briefcase me-2"></i>
                                    Lowongan Kerja
                                </span>
                            </div>
                        </div>
                    @endif
                    
                    <!-- Job Content -->
                    <div class="card-body" style="padding: 3rem;">
                        <!-- Job Header -->
<header class="mb-4">
    <div class="row align-items-center mb-4">
        <div class="col-md-8">
            <div class="d-flex align-items-center mb-3">
                <div class="me-3">
                    <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                        <i class="fas fa-building text-white" style="font-size: 16px;"></i>
                    </div>
                </div>
                <div>
                    <h6 class="mb-1 text-success fw-bold" style="font-size: 14px;">
                        {{ $lowongan->perusahaan }}
                    </h6>
                    <!-- Tambahan tanggal -->
                    <small class="text-muted d-block">
                        <i class="far fa-calendar-alt me-1"></i>
                        Dibuka: {{ \Carbon\Carbon::parse($lowongan->tanggal_mulai)->translatedFormat('d F Y') }}
                    </small>
                    <small class="text-muted d-block">
                        <i class="far fa-calendar-times me-1"></i>
                        Ditutup: {{ \Carbon\Carbon::parse($lowongan->tanggal_akhir)->translatedFormat('d F Y H:i') }}
                    </small>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-md-end">
            <!-- Status -->
            @if(\Carbon\Carbon::now()->greaterThan($lowongan->tanggal_akhir))
                <span class="badge bg-danger px-3 py-2 rounded-pill">
                    Sudah Berakhir
                </span>
            @else
                <span class="badge bg-success px-3 py-2 rounded-pill">
                    Aktif
                </span>
            @endif
        </div>
    </div>
    
    <!-- Job Title -->
    <h1 class="fw-bold mb-4 text-dark" style="font-family: 'Georgia', serif; font-size: 1rem; line-height: 1.3; color: #2c3e50 !important;">
        {{ $lowongan->judul }}
    </h1>
</header>

                        
                        <!-- Job Body -->
                        <div class="article-content" style="position: relative;">
                            <!-- Reading Progress Bar -->
                            <div class="position-fixed top-0 start-0 bg-primary" style="height: 3px; width: 0%; z-index: 1000; transition: width 0.3s;" id="reading-progress"></div>
                            
                            <div class="content-text" style="font-size: 1rem; line-height: 1.8; color: #4a5568; text-align: justify;">
                                {!! nl2br(e($lowongan->deskripsi)) !!}
                            </div>
                        </div>
                        
                        <!-- Job Footer -->
                        <footer class="mt-5 pt-4 border-top border-light">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted me-3" style="font-size: 14px;">Kontak:</span>
                                        <a href="https://wa.me/{{ $lowongan->no_hp }}" 
                                           class="btn btn-outline-success btn-sm rounded-pill px-3" style="font-size: 12px;">
                                            <i class="fab fa-whatsapp me-1"></i>
                                            {{ $lowongan->no_hp }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        
                        <!-- Navigation Buttons -->
                        <div class="mt-5 pt-4 border-top border-light">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <a href="{{ route('noauth.lowongan.index') }}" 
                                       class="btn btn-outline-success px-4 py-3 rounded-pill fw-semibold w-100"
                                       style="transition: all 0.3s ease;"
                                       onmouseover="this.style.background='#198754'; this.style.color='white'; this.style.transform='translateY(-2px)';"
                                       onmouseout="this.style.background=''; this.style.color=''; this.style.transform='translateY(0)';">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        Kembali ke Lowongan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<script>
// Reading Progress Bar
window.addEventListener('scroll', function() {
    const article = document.querySelector('.article-content');
    if (article) {
        const scrollTop = window.pageYOffset;
        const docHeight = document.body.offsetHeight - window.innerHeight;
        const scrollPercent = scrollTop / docHeight;
        const progressBar = document.getElementById('reading-progress');
        if (progressBar) {
            progressBar.style.width = Math.min(scrollPercent * 100, 100) + '%';
        }
    }
});
</script>
@endsection