@extends('layouts.app')

@section('title', 'Regulasi')

@section('content')

{{-- Background utama --}}
<div class="py-7 min-vh-100" 
     style="background: linear-gradient(135deg, #1d4ed8, #1e3a8a); padding-bottom: 80px;">
    <div class="container">

        {{-- =================== HEADER =================== --}}
        {{-- AOS: Fade Down --}}
        <div class="text-center text-white mb-5" data-aos="fade-down">
            <h1 class="fw-bold display-5 mb-2" style="padding-top: 50px;">
                📑 Regulasi
            </h1>
            <p class="fs-5 mb-0 text-white-75">
                Daftar regulasi dan peraturan resmi sebagai pedoman bersama
            </p>
        </div>

        {{-- =================== FORM FILTER =================== --}}
        {{-- AOS: Fade Up --}}
        <div class="card shadow-lg border-0 rounded-4 mb-5 p-4" data-aos="fade-up" data-aos-delay="200">
            <form method="GET" action="{{ route('noauth.regulasi.index') }}">
                <div class="row g-4">

                    {{-- Search --}}
                    <div class="col-12">
                        <label class="form-label fw-semibold text-secondary">
                            <i class="fas fa-search me-2"></i>Pencarian
                        </label>
                        <div class="input-group shadow-sm">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="fas fa-search text-primary"></i>
                            </span>
                            <input type="search"
                                name="search"
                                value="{{ $search }}"
                                class="form-control border-start-0 ps-0"
                                placeholder="Cari nama regulasi, penerbit, atau jenis..."
                                aria-label="Cari regulasi">
                        </div>
                    </div>

                    {{-- Filter Jenis --}}
                    <div class="col-md-4">
                        <label class="form-label fw-semibold text-secondary">
                            <i class="fas fa-certificate me-2"></i>Jenis Regulasi
                        </label>
                        <select name="jenis" class="form-select shadow-sm">
                            <option value="">Semua Jenis</option>
                            @foreach ($listJenis as $j)
                                <option value="{{ $j }}" {{ $jenis == $j ? 'selected' : '' }}>
                                    {{ $j }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Filter Penerbit --}}
                    <div class="col-md-4">
                        <label class="form-label fw-semibold text-secondary">
                            <i class="fas fa-building me-2"></i>Penerbit
                        </label>
                        <select name="penerbit" class="form-select shadow-sm">
                            <option value="">Semua Penerbit</option>
                            @foreach ($listPenerbit as $p)
                                <option value="{{ $p }}" {{ $penerbit == $p ? 'selected' : '' }}>
                                    {{ $p }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="col-md-4">
                        <label class="form-label fw-semibold text-secondary d-block">
                            <i class="fas fa-sliders-h me-2"></i>Aksi
                        </label>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary flex-fill shadow-sm">
                                <i class="fas fa-filter me-1"></i>Filter
                            </button>
                            <a href="{{ route('noauth.regulasi.index') }}"
                               class="btn btn-outline-secondary flex-fill shadow-sm">
                                <i class="fas fa-eraser me-1"></i>Reset
                            </a>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        {{-- =================== TABEL REGULASI =================== --}}
        {{-- AOS: Fade Up dengan delay lebih lama agar muncul setelah filter --}}
        <div class="card shadow-xl border-0 rounded-4 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
            
            {{-- HEADER TABEL --}}
            <div class="card-header bg-white border-0 py-4 px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-semibold text-primary">
                        <i class="fas fa-list-alt me-2"></i>Daftar Regulasi Terkini
                    </h5>
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                        <i class="fas fa-database me-1"></i>{{ $regulasi->total() }} Regulasi
                    </span>
                </div>
            </div>

            {{-- BODY TABEL --}}
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="regulationTable">
                        <thead class="table-primary text-white">
                            <tr>
                                <th class="fw-bold ps-4">Nama Regulasi</th>
                                <th class="fw-bold text-center">Tanggal Terbit</th>
                                <th class="fw-bold text-center">Penerbit</th>
                                <th class="fw-bold text-center">Jenis</th>
                                <th class="fw-bold text-center">File</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($regulasi as $index => $item)
                                {{-- Menambahkan AOS pada setiap baris untuk efek cascading (opsional) --}}
                                <tr class="regulation-row" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 50) }}" data-aos-anchor-placement="top-bottom">
                                    {{-- Nama Regulasi --}}
                                    <td class="ps-4">
                                        <i class="fas fa-file-alt text-primary me-2"></i>
                                        <a href="{{ route('noauth.regulasi.show', $item->id) }}"
                                           class="fw-semibold text-dark text-decoration-none hover-link">
                                            {{ $item->nama }}
                                        </a>
                                    </td>

                                    {{-- Tanggal Terbit --}}
                                    <td class="text-center text-muted">
                                        <i class="far fa-calendar-alt text-primary me-1"></i>
                                        {{ $item->tanggal_terbit ? $item->tanggal_terbit->format('d M Y') : '-' }}
                                    </td>

                                    {{-- Penerbit --}}
                                    <td class="text-center">
                                        <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                                            {{ $item->penerbit ?? '-' }}
                                        </span>
                                    </td>

                                    {{-- Jenis --}}
                                    <td class="text-center">
                                        <span class="badge bg-info-subtle text-info px-3 py-2 rounded-pill">
                                            {{ $item->jenis ?? '-' }}
                                        </span>
                                    </td>

                                    {{-- File --}}
                                    <td class="text-center">
                                        @if ($item->file)
                                            <a href="{{ asset('uploads/'.$item->file) }}"
                                               target="_blank"
                                               class="btn btn-sm btn-outline-primary rounded-pill px-3 shadow-sm">
                                                <i class="fas fa-eye me-1"></i>Lihat
                                            </a>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5">
                                        <div class="text-muted">
                                            <i class="fas fa-inbox fa-3x mb-3 opacity-25"></i>
                                            <p class="fw-semibold mb-1">Tidak ada regulasi ditemukan</p>
                                            <small>Coba ubah filter pencarian Anda</small>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                @if($regulasi->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $regulasi->appends(request()->query())->links() }}
                    </div>
                @endif

            </div>
        </div>

    </div>
</div>
@endsection