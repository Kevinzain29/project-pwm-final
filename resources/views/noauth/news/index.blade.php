@extends('layouts.app')
@section('content')
<section class="container-fluid p-3" style="background: linear-gradient(135deg, #1e4db7 0%, #2563eb 100%); position: relative; overflow: hidden; padding: 70px 0;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.1) 0%, transparent 50%), radial-gradient(circle at 70% 80%, rgba(255,255,255,0.05) 0%, transparent 50%); opacity: 0.8;"></div>
    
    <div style="position: absolute; top: 20%; left: 10%; width: 100px; height: 100px; background: rgba(255,255,255,0.05); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
    <div style="position: absolute; top: 60%; right: 15%; width: 150px; height: 150px; background: rgba(255,255,255,0.03); border-radius: 50%; animation: float 8s ease-in-out infinite reverse;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        {{-- Header: AOS Fade Down --}}
        <div class="d-flex justify-content-between align-items-center mb-5" data-aos="fade-down">
            <div>
                <h4 class="fw-bold text-white mb-2" style="text-shadow: 0 2px 8px rgba(0,0,0,0.3); font-size: 2.2rem;">
                    <i class="fas fa-newspaper me-3" style="color: rgba(255,255,255,0.9);"></i>
                    Berita Terbaru
                </h4>
                <p class="text-white mb-0" style="opacity: 0.85; font-size: 1.1rem;">Informasi terkini dan terpercaya untuk Anda</p>
            </div>
            @if($totalNews > 6)
            <a href="{{ route('noauth.news.all') }}" 
               class="btn btn-outline-light px-4 py-3 rounded-pill fw-semibold shadow-lg border-2"
               style="transition: all 0.3s ease; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1);"
               onmouseover="this.style.background='rgba(255,255,255,0.9)'; this.style.color='#1e4db7'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(255,255,255,0.3)';"
               onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.color=''; this.style.transform='translateY(0)'; this.style.boxShadow='';">
                Lihat Semua Berita 
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
            @endif
        </div>

        <div class="row">
            {{-- Kolom Kiri (Berita Utama): AOS Fade Right --}}
            <div class="col-lg-7 mb-4" data-aos="fade-right" data-aos-delay="200">
                @if($news->isNotEmpty())
                    @php $mainNews = $news->first(); @endphp
                    <article class="position-relative">
                        <a href="{{ route('noauth.news.show', $mainNews->id) }}" 
                           class="text-decoration-none d-block" 
                           style="border-radius: 20px; background: #fff; overflow: hidden; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); box-shadow: 0 15px 35px rgba(0,0,0,0.15), 0 5px 15px rgba(0,0,0,0.1); transform-style: preserve-3d;"
                           onmouseover="this.style.transform='translateY(-10px) rotateX(5deg)'; this.style.boxShadow='0 25px 50px rgba(30, 77, 183, 0.25), 0 10px 25px rgba(0,0,0,0.15)';"
                           onmouseout="this.style.transform='translateY(0) rotateX(0deg)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15), 0 5px 15px rgba(0,0,0,0.1)';">
                           
                            <div class="position-absolute" style="top: 20px; left: 20px; z-index: 10;">
                                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold" style="backdrop-filter: blur(10px); box-shadow: 0 4px 15px rgba(255,193,7,0.4);">
                                    <i class="fas fa-star me-1"></i>Utama
                                </span>
                            </div>
                            
                            @if($mainNews->gambar)
                                <div class="position-relative" style="overflow: hidden;">
                                    <img src="{{ asset('storage/' . $mainNews->gambar) }}" 
                                         alt="{{ $mainNews->judul }}" 
                                         style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.6s ease;"
                                         onmouseover="this.style.transform='scale(1.08)';"
                                         onmouseout="this.style.transform='scale(1)';">
                                    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 80px; background: linear-gradient(transparent, rgba(0,0,0,0.3));"></div>
                                </div>
                            @endif
                            
                            <div class="p-4" style="background: linear-gradient(145deg, #ffffff, #f8faff);">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                            <i class="fas fa-user text-white" style="font-size: 14px;"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-primary fw-bold d-block" style="font-size: 13px;">
                                            {{ $mainNews->penulis }}
                                        </small>
                                        <small class="text-muted" style="font-size: 12px;">
                                            <i class="fas fa-calendar-alt me-1"></i>
                                            {{ $mainNews->created_at->format('d M Y') }}
                                        </small>
                                    </div>
                                </div>
                                
                                <h5 class="fw-bold mb-3 text-dark lh-base" style="font-family: 'Georgia', serif; font-size: 1.4rem; color: #2c3e50 !important;">
                                    {{ $mainNews->judul }}
                                </h5>
                                
                                <p class="text-muted mb-3" style="line-height: 1.7; font-size: 0.95rem;">
                                    {{ Str::limit(strip_tags($mainNews->deskripsi), 120, '...') }}
                                </p>
                                
                                <div class="d-flex align-items-center">
                                    <span class="btn btn-primary btn-sm rounded-pill px-3" style="font-size: 12px;">
                                        Baca Selengkapnya
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </article>
                @endif
            </div>

            {{-- Kolom Kanan (List Berita): AOS Fade Left dengan Staggered Delay --}}
            <div class="col-lg-5">
                <div class="d-flex flex-column gap-4">
                    @foreach($news->skip(1) as $index => $item)
                        <article class="news-item-{{ $index }}" data-aos="fade-left" data-aos-delay="{{ 300 + ($index * 100) }}">
                            <a href="{{ route('noauth.news.show', $item->id) }}" 
                               class="d-flex text-decoration-none" 
                               style="background: linear-gradient(145deg, #ffffff, #f8faff); border-radius: 16px; overflow: hidden; transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94); box-shadow: 0 8px 25px rgba(0,0,0,0.1), 0 3px 10px rgba(0,0,0,0.05); height: 100px; border: 1px solid rgba(30, 77, 183, 0.1);"
                               onmouseover="this.style.transform='translateY(-5px) translateX(5px)'; this.style.boxShadow='0 15px 35px rgba(30, 77, 183, 0.15), 0 5px 15px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(30, 77, 183, 0.3)';"
                               onmouseout="this.style.transform='translateY(0) translateX(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1), 0 3px 10px rgba(0,0,0,0.05)'; this.style.borderColor='rgba(30, 77, 183, 0.1)';">
                               
                                @if($item->gambar)
                                    <div style="flex: 0 0 35%; height: 100%; position: relative; overflow: hidden;">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" 
                                             alt="{{ $item->judul }}" 
                                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                                             onmouseover="this.style.transform='scale(1.1)';"
                                             onmouseout="this.style.transform='scale(1)';">
                                        <div class="position-absolute top-0 start-0">
                                            <div class="bg-primary text-white rounded-end-3 px-2 py-1" style="font-size: 11px; font-weight: 600;">
                                                {{ $index + 1 }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                
                                <div class="p-3 d-flex flex-column justify-content-center" style="flex: 1;">
                                    <div class="mb-2">
                                        <small class="text-primary fw-semibold d-block" style="font-size: 11px;">
                                            {{ $item->penulis }}
                                        </small>
                                        <small class="text-muted" style="font-size: 10px;">
                                            <i class="fas fa-calendar-alt me-1"></i>
                                            {{ $item->created_at->format('d M Y') }}
                                        </small>
                                    </div>
                                    
                                    <h6 class="fw-bold mb-0 text-dark lh-sm" style="font-size: 13px; font-family: 'Segoe UI', sans-serif; color: #2c3e50 !important;">
                                        {{ Str::limit($item->judul, 50, '...') }}
                                    </h6>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection