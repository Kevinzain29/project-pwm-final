@extends('layouts.app')
@section('title', 'Lowongan Tersedia')

@section('content')
<!-- Hero Section -->
<div class="hero-section" style="background: linear-gradient(135deg, #1e4db7 0%, #2563eb 100%); position: relative; overflow: hidden;">
    <div class="hero-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.1);"></div>
    <div class="hero-pattern" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%);"></div>
    <div class="container py-5" style="position: relative; z-index: 2;">
        <div class="text-center text-white py-4">
            <h1 class="display-4 fw-bold mb-3" style="text-shadow: 0 2px 4px rgba(0,0,0,0.3);">Lowongan Tersedia</h1>
            <p class="lead mb-4" style="opacity: 0.9;">Temukan peluang karier terbaik untuk masa depan yang cerah</p>
            

            
            <!-- Statistics Cards -->
            <div class="row justify-content-center mt-4 mb-4">
                <div class="col-md-3 col-6 mb-3">
                    <div class="position-relative" style="background: rgba(244, 164, 96, 0.95); border-radius: 20px; padding: 2rem 1.5rem; border: 3px dashed rgba(255,255,255,0.6); transform: rotate(2deg); transition: all 0.3s ease;"
                         onmouseover="this.style.transform='rotate(0deg) scale(1.05)'; this.style.background='rgba(244, 164, 96, 1)';"
                         onmouseout="this.style.transform='rotate(2deg) scale(1)'; this.style.background='rgba(244, 164, 96, 0.95)';">
                        <div class="text-center">
                            <div class="mb-3">
                                <i class="fas fa-briefcase" style="font-size: 2.5rem; color: #1e4db7;"></i>
                            </div>
                            <h6 class="fw-bold mb-2" style="color: #1e4db7; font-size: 1rem;">Lowongan Kerja</h6>
                            <h2 class="fw-bold text-white mb-0" style="font-size: 2.5rem; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">{{ $lowongans->total() }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="bg-light" style="min-height: 100vh;">
    <div class="container py-5">
        
        <!-- Search Section -->
<div class="row justify-content-center mb-5">
    <div class="col-md-8 col-lg-6">
        <div class="" >
            <div class="card-body p-4">
                <h5 class="fw-bold text-center text-primary mb-3">
                    <i class="fas fa-search me-2"></i> Cari Lowongan
                </h5>

                <form method="GET" action="{{ route('noauth.lowongan.index') }}">
                    <div class="input-group">
                        <input type="text" 
                               name="q" 
                               value="{{ request('q') }}"
                               class="form-control px-4 py-3"
                               placeholder="Ketik judul lowongan yang dicari..."
                               style="border: 1px solid #dee2e6; border-right: none; border-radius: 30px 0 0 30px; font-size: 0.95rem; transition: all 0.3s ease;"
                               onfocus="this.style.boxShadow='0 0 0 0.25rem rgba(30,77,183,0.25)';"
                               onblur="this.style.boxShadow='none';">
                        <button class="btn fw-semibold px-4"
                                type="submit"
                                style="border-radius: 0 30px 30px 0; background: #1e4db7; border: none; color: white; font-size: 0.95rem; transition: all 0.3s ease;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Search Results Info -->
                @if(request('q'))
                <div class="mt-3 text-center">
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2">
                        <i class="fas fa-info-circle me-1"></i>
                        Hasil untuk: "<strong>{{ request('q') }}</strong>"
                        @if($lowongans->total() > 0)
                            - {{ $lowongans->total() }} ditemukan
                        @else
                            - Tidak ada hasil
                        @endif
                    </span>
                    <div class="mt-2">
                        <a href="{{ route('noauth.lowongan.index') }}" 
                           class="btn btn-outline-secondary btn-sm rounded-pill">
                            <i class="fas fa-times me-1"></i> Reset
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

        <!-- Job Cards Grid -->
        <div class="row g-4">
            @foreach($lowongans as $l)
                <div class="col-lg-4 col-md-6">
                    <article class="job-card">
                        <div class="card border shadow-sm rounded-3 h-100 overflow-hidden d-flex flex-column"
                            style="background: #ffffff; transition: all 0.3s ease; cursor: pointer; border: 1px solid #e9ecef !important;"
                            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(30, 77, 183, 0.2)'; this.style.borderColor='#1e4db7';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'; this.style.borderColor='#e9ecef';">
                            
                            <!-- Company Logo/Image Container -->
                            <div class="position-relative" style="height: 200px; background: linear-gradient(145deg, #f8f9fa, #ffffff); overflow: hidden;">
                                @if($l->gambar)
                                    <div class="d-flex align-items-center justify-content-center h-100 p-3">
                                        <img src="{{ asset('storage/'.$l->gambar) }}"
                                            alt="{{ $l->judul }}"
                                            style="width: 5cm; height: 5cm; object-fit: contain; transition: transform 0.3s ease;"
                                            class="rounded border border-light shadow-sm"
                                            onmouseover="this.style.transform='scale(1.05)';"
                                            onmouseout="this.style.transform='scale(1)';">
                                    </div>
                                @else
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <div class="text-center">
                                            <i class="fas fa-building text-primary mb-2" style="font-size: 3rem; opacity: 0.5;"></i>
                                            <p class="text-muted mb-0" style="font-size: 0.9rem;">Logo Perusahaan</p>
                                        </div>
                                    </div>
                                @endif
                                
                                <!-- Job Status Badge -->
                                <div class="position-absolute top-0 start-0 m-3">
                                    @if(\Carbon\Carbon::now()->greaterThan($l->tanggal_akhir))
                                        <span class="badge bg-danger bg-opacity-90 rounded-pill px-3 py-2 fw-semibold">
                                            <i class="fas fa-times-circle me-1"></i>Sudah Berakhir
                                        </span>
                                    @else
                                        <span class="badge bg-success bg-opacity-90 rounded-pill px-3 py-2 fw-semibold">
                                            <i class="fas fa-check-circle me-1"></i>Aktif
                                        </span>
                                    @endif
                                </div>
                                
                                <!-- Deadline Badge -->
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-warning text-dark rounded-pill px-3 py-2 fw-semibold">
                                        <i class="fas fa-clock me-1"></i>
                                        {{ \Carbon\Carbon::parse($l->tanggal_akhir)->translatedFormat('d F Y') }}
                                    </span>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body p-4 d-flex flex-column flex-grow-1">
                                <!-- Job Title Section -->
                                <div class="mb-3">
                                    <h2 class="card-title fw-bold text-dark lh-base mb-3"
                                        style="font-size: 1rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; min-height: 3rem;">
                                        @if(request('q'))
                                            {!! str_ireplace(request('q'), '<mark style="background-color: #fff3cd;">' . request('q') . '</mark>', $l->judul) !!}
                                        @else
                                            {{ $l->judul }}
                                        @endif
                                    </h2>
                                </div>

                                <!-- Company Info Section -->
                                <div class="mb-3 flex-grow-1">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-building text-primary me-2"></i>
                                        <p class="text-muted mb-0 fw-semibold" style="font-size: 0.9rem;">
                                            {{ $l->perusahaan }}
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                        <p class="text-muted mb-0" style="font-size: 0.85rem;">
                                            Lokasi: {{ $l->lokasi }}
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-calendar-alt text-primary me-2"></i>
                                        <p class="text-muted mb-0" style="font-size: 0.85rem;">
                                            Batas Waktu: {{ \Carbon\Carbon::parse($l->tanggal_akhir)->translatedFormat('d F Y H:i') }}
                                        </p>
                                    </div>
                                </div>

                                
                                <!-- Contact & Actions Section - Fixed Position at Bottom -->
                                <div class="mt-auto">
                                    <!-- Contact Info -->
                                    <div class="d-flex align-items-center pt-2 border-top border-light mb-2">
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <i class="fas fa-phone text-success me-2"></i>
                                            <span class="text-muted small">Kontak:</span>
                                            <a href="https://wa.me/{{ $l->no_hp }}" 
                                            class="text-success fw-semibold ms-2 text-decoration-none" 
                                            style="font-size: 0.85rem;"
                                            title="Hubungi via WhatsApp">
                                                <i class="fab fa-whatsapp me-1"></i>{{ $l->no_hp }}
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <!-- Action Buttons -->
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('noauth.lowongan.show', $l) }}" 
                                        class="btn btn-outline-primary btn-sm rounded-pill flex-grow-1 fw-semibold">
                                            <i class="fas fa-eye me-2"></i>
                                            Detail Kerja
                                        </a>
                                        <a href="https://wa.me/{{ $l->no_hp }}" 
                                        class="btn btn-success btn-sm rounded-pill px-3"
                                        title="Lamar via WhatsApp">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>


        <!-- Empty State -->
        @if($lowongans->isEmpty())
        <div class="text-center py-5">
            <div class="mb-4">
                <i class="fas fa-briefcase text-muted" style="font-size: 5rem; opacity: 0.3;"></i>
            </div>
            @if(request('q'))
                <h4 class="text-muted">Tidak ditemukan lowongan dengan kata kunci "{{ request('q') }}"</h4>
                <p class="text-muted">Coba gunakan kata kunci yang berbeda atau <a href="{{ route('noauth.lowongan.index') }}" class="text-primary">lihat semua lowongan</a></p>
            @else
                <h4 class="text-muted">Belum ada lowongan tersedia</h4>
                <p class="text-muted">Silakan cek kembali nanti untuk peluang karier terbaru</p>
            @endif
        </div>
        @endif

        <!-- Pagination -->
        <div class="row mt-5 pt-4 border-top border-light">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    {{ $lowongans->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection