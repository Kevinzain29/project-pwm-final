@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            {{-- AOS: Efek fade-up untuk seluruh container kartu --}}
            <div class="card shadow-lg border-0" data-aos="fade-up" data-aos-duration="1000">
                
                @if($mainNews->gambar)
                    {{-- AOS: Efek zoom-out agar gambar terlihat dinamis saat dibuka --}}
                    <div style="overflow: hidden; border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
                        <img src="{{ asset('uploads/' . $mainNews->gambar) }}" 
                            class="card-img-top"
                            alt="{{ $mainNews->judul }}"
                            data-aos="zoom-out" 
                            data-aos-delay="200"
                            style="height: 450px; width: 100%; object-fit: cover;">
                    </div>
                @endif

                <div class="card-body p-4 p-md-5">
                    {{-- AOS: Judul berita muncul dari kiri --}}
                    <h2 class="fw-bold mb-3" data-aos="fade-right" data-aos-delay="400">
                        {{ $mainNews->judul }}
                    </h2>

                    {{-- AOS: Metadata muncul sedikit lebih lambat --}}
                    <p class="text-muted mb-4" data-aos="fade-right" data-aos-delay="500">
                        <small>
                            <i class="fas fa-calendar-alt me-1"></i> {{ $mainNews->created_at->format('d M Y') }} 
                            <span class="mx-2">|</span> 
                            <i class="fas fa-user me-1"></i> {{ $mainNews->penulis }}
                        </small>
                    </p>

                    <hr class="mb-4" data-aos="fade-in" data-aos-delay="600">

                    {{-- AOS: Isi berita muncul perlahan --}}
                    <div class="card-text text-dark" 
                         style="white-space: pre-line; line-height: 1.8; font-size: 1.1rem;" 
                         data-aos="fade-up" 
                         data-aos-delay="700">
                        {!! nl2br(e($mainNews->deskripsi)) !!}
                    </div>

                    <div class="mt-5" data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ route('noauth.news.index') }}" class="btn btn-secondary px-4 rounded-pill">
                            <i class="fas fa-arrow-left me-2"></i> Kembali ke Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection