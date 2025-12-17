@extends('layouts.app')
@section('title', 'History Lowongan')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e3c72 100%) !important;
        min-height: 100vh;
    }
    
    .history-wrapper {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .page-title {
        text-align: center;
        color: white;
        margin-bottom: 1rem;
    }
    
    .page-title h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        color: black;
    }
    
    .page-subtitle {
        text-align: center;
        color: black;
        font-size: 1.5rem;
        margin-bottom: 3rem;
    }
    
    .stats-banner {
        background: white;
        border-radius: 12px;
        padding: 1.5rem 2rem;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .stat-item {
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .stat-icon-box {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
    }
    
    .stat-info h3 {
        font-size: 2rem;
        font-weight: 700;
        color: #2d3748;
        margin: 0;
    }
    
    .stat-info p {
        font-size: 1rem;
        color: black;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    .search-section {
        flex: 1;
        max-width: 500px;
    }
    
    .search-wrapper {
        position: relative;
    }
    
    .search-input {
        width: 100%;
        padding: 0.875rem 1rem 0.875rem 3rem;
        border: 2px solid rgba(9, 9, 9, 0.3);
        border-radius: 10px;
        font-size: 1rem;
        background: rgba(255, 255, 255, 0.95);
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: black;
        background: white;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
    }
    
    .search-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        color: #6b7280;
    }
    
    .btn-back {
        background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        border: none;
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(107, 114, 128, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }
    
    .btn-back:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(107, 114, 128, 0.4);
        color: white;
    }
    
    .btn-back::before {
        content: '←';
        font-size: 1.3rem;
    }
    
    .content-section {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .section-header {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        padding: 1.25rem 1.5rem;
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .section-header::before {
        content: '🕒';
        font-size: 1.3rem;
    }
    
    .table-wrapper {
        overflow-x: auto;
    }
    
    .data-table {
        width: 100%;
        margin: 0;
        border-collapse: separate;
        border-spacing: 0;
    }
    
    .data-table thead {
        background: #f8f9fa;
    }
    
    .data-table thead th {
        padding: 1rem 1rem;
        font-weight: 600;
        font-size: 0.875rem;
        color: #4a5568;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 2px solid #e2e8f0;
        text-align: left;
        white-space: nowrap;
    }
    
    .data-table tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: background 0.2s ease;
    }
    
    .data-table tbody tr:hover {
        background: #fef2f2;
    }
    
    .data-table tbody tr:last-child {
        border-bottom: none;
    }
    
    .data-table tbody td {
        padding: 1rem 1rem;
        color: #2d3748;
        vertical-align: middle;
        font-size: 0.9rem;
    }
    
    .lowongan-id {
        font-weight: 700;
        color: #ef4444;
        font-size: 1.1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
        border-radius: 8px;
    }
    
    .lowongan-title {
        font-weight: 600;
        color: #2d3748;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .lowongan-title::before {
        content: '📄';
        font-size: 1.2rem;
    }
    
    .company-name {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #4b5563;
    }
    
    .company-name::before {
        content: '🏢';
        font-size: 1.1rem;
    }
    
    .location-text {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #4b5563;
    }
    
    .location-text::before {
        content: '📍';
        font-size: 1.1rem;
    }
    
    .phone-text {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #4b5563;
        font-family: monospace;
    }
    
    .phone-text::before {
        content: '📱';
        font-size: 1.1rem;
    }
    
    .date-badge {
        background: #f1f5f9;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        font-size: 0.85rem;
        font-weight: 600;
        color: #475569;
        display: inline-block;
        white-space: nowrap;
    }
    
    .date-badge.start {
        background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
        color: #1e40af;
    }
    
    .date-badge.end {
        background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
        color: #991b1b;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
    }
    
    .empty-icon {
        font-size: 5rem;
        margin-bottom: 1rem;
        opacity: 0.3;
        animation: float 3s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    
    .empty-text {
        color: #a0aec0;
        font-size: 1.1rem;
        font-weight: 500;
    }
    
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
        padding: 1rem;
    }
    
    .pagination {
        display: flex;
        gap: 0.5rem;
    }
    
    .pagination .page-link {
        background: white;
        border: 1px solid #e2e8f0;
        color: #4a5568;
        padding: 0.5rem 0.875rem;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    
    .pagination .page-link:hover {
        background: #1e3c72;
        color: white;
        border-color: #1e3c72;
        transform: translateY(-2px);
    }
    
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        border-color: #1e3c72;
        color: white;
        box-shadow: 0 4px 12px rgba(30, 60, 114, 0.4);
    }
    
    .loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
    }
    
    .loading-spinner {
        width: 50px;
        height: 50px;
        border: 4px solid #e2e8f0;
        border-top-color: #1e3c72;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }
    
    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }
    
    .info-badge {
        background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
        color: #1e40af;
        padding: 0.875rem 1.5rem;
        border-radius: 10px;
        font-size: 0.9rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 2rem;
    }
    
    .info-badge::before {
        content: 'ℹ️';
        font-size: 1.2rem;
    }
    
    @media (max-width: 768px) {
        .page-title h1 {
            font-size: 2rem;
        }
        
        .stats-banner {
            flex-direction: column;
            text-align: center;
        }
        
        .action-bar {
            flex-direction: column;
        }
        
        .search-section {
            width: 100%;
            max-width: 100%;
        }
        
        .btn-back {
            width: 100%;
            justify-content: center;
        }
        
        .data-table {
            font-size: 0.85rem;
        }
        
        .data-table thead th,
        .data-table tbody td {
            padding: 0.75rem 0.5rem;
        }
    }
</style>

<div class="history-wrapper">
    <div class="container">
        <!-- Page Title -->
        <div class="page-title">
            <h1>History Lowongan Kerja</h1>
        </div>
        <div class="page-subtitle">
            Daftar lowongan yang telah berakhir atau expired
        </div>

        <!-- Stats Banner -->
        <div class="stats-banner">
            <div class="stat-item">
                <div class="stat-icon-box">⏰</div>
                <div class="stat-info">
                    <h3>{{ $lowongans->total() }}</h3>
                    <p>Total Lowongan Berakhir</p>
                </div>
            </div>
            <div class="info-badge">
                Lowongan ini tidak dapat diedit atau dipulihkan
            </div>
        </div>

        <!-- Action Bar -->
        <div class="action-bar">
            <!-- Search Section -->
            <div class="search-section">
                <form method="GET" id="searchForm">
                    <div class="search-wrapper">
                        <span class="search-icon">🔍</span>
                        <input 
                            type="text" 
                            name="q" 
                            id="searchInput" 
                            value="{{ request('q') }}" 
                            class="search-input" 
                            placeholder="Cari judul lowongan...">
                    </div>
                </form>
            </div>

            <!-- Back Button -->
            <a href="{{ route('admin.lowongan.index') }}" class="btn-back">
                Kembali ke Dashboard
            </a>
        </div>

        <!-- Data Table Section -->
        <div class="content-section" style="position: relative;">
            <div class="section-header">
                Daftar History Lowongan
            </div>
            <div id="lowonganTable">
                <div class="table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>JUDUL</th>
                                <th>PERUSAHAAN</th>
                                <th>LOKASI</th>
                                <th>NO HP/WA</th>
                                <th>TANGGAL MULAI</th>
                                <th>TANGGAL AKHIR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($lowongans as $l)
                            <tr>
                                <td>
                                    <span class="lowongan-id">{{ $l->id }}</span>
                                </td>
                                <td>
                                    <div class="lowongan-title">{{ $l->judul }}</div>
                                </td>
                                <td>
                                    <div class="company-name">{{ $l->perusahaan }}</div>
                                </td>
                                <td>
                                    <div class="location-text">{{ $l->lokasi }}</div>
                                </td>
                                <td>
                                    <div class="phone-text">{{ $l->no_hp }}</div>
                                </td>
                                <td>
                                    <span class="date-badge start">
                                        {{ $l->tanggal_mulai?->format('d M Y, H:i') }}
                                    </span>
                                </td>
                                <td>
                                    <span class="date-badge end">
                                        {{ $l->tanggal_akhir?->format('d M Y, H:i') }}
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    <div class="empty-state">
                                        <div class="empty-icon">🕒</div>
                                        <div class="empty-text">
                                            Belum ada lowongan yang berakhir
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination-wrapper">
                    {{ $lowongans->withQueryString()->links('layouts.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let timer = null;
    let isLoading = false;

    // Show loading overlay
    function showLoading() {
        if (!isLoading) {
            isLoading = true;
            const loadingHtml = `
                <div class="loading-overlay">
                    <div class="loading-spinner"></div>
                </div>
            `;
            $('.content-section').css('position', 'relative');
            $('.content-section').append(loadingHtml);
        }
    }

    // Hide loading overlay
    function hideLoading() {
        isLoading = false;
        $('.loading-overlay').remove();
    }

    // Search with debounce
    $('#searchInput').on('keyup', function() {
        clearTimeout(timer);
        let keyword = $(this).val();

        timer = setTimeout(() => {
            showLoading();
            $.ajax({
                url: "{{ route('admin.lowongan.history') }}",
                type: "GET",
                data: { q: keyword },
                success: function(data) {
                    $('#lowonganTable').html($(data).find('#lowonganTable').html());
                    hideLoading();
                },
                error: function() {
                    hideLoading();
                    alert('Terjadi kesalahan saat mencari data');
                }
            });
        }, 400);
    });

    // Pagination AJAX
    $(document).on('click', '#lowonganTable .pagination a', function(e) {
        e.preventDefault();
        let url = $(this).attr('href');
        
        showLoading();
        $.get(url, function(data) {
            $('#lowonganTable').html($(data).find('#lowonganTable').html());
            hideLoading();
            
            // Smooth scroll to top of table
            $('html, body').animate({
                scrollTop: $('.content-section').offset().top - 100
            }, 300);
        }).fail(function() {
            hideLoading();
            alert('Terjadi kesalahan saat memuat halaman');
        });
    });

    // Auto-focus search on page load
    $(document).ready(function() {
        $('#searchInput').focus();
    });
</script>
@endsection