@extends('layouts.app')
@section('title', 'Lowongan')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e3c72 100%) !important;
        min-height: 100vh;
    }
    
    .dashboard-wrapper {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .page-title {
        text-align: center;
        color: black;
        margin-bottom: 1rem;
    }
    
    .page-title h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
        color: black;
    }
    
    .page-subtitle {
        text-align: center;
        color: black;
        font-size: 1.5rem;
        margin-bottom: 3rem;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }
    
    .stat-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
    
    .stat-icon-wrapper::before {
        content: '💼';
        font-size: 2.2rem;
    }
    
    .stat-label {
        font-size: 1rem;
        color: black;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }
    
    .stat-value {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2d3748;
        margin: 0;
    }
    
    .stat-date {
        font-size: 1rem;
        color: black;
        margin-top: 0.5rem;
    }
    
    .action-section {
        margin-bottom: 2rem;
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    .btn-add-primary {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: none;
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }
    
    .btn-add-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        color: white;
    }
    
    .btn-add-primary::before {
        content: '➕';
        font-size: 1.1rem;
    }
    
    .btn-history {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        border: none;
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(139, 92, 246, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }
    
    .btn-history:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(139, 92, 246, 0.4);
        color: white;
    }
    
    .btn-history::before {
        content: '🕒';
        font-size: 1.1rem;
    }
    
    .search-section {
        margin-bottom: 2rem;
    }
    
    .search-wrapper {
        position: relative;
        max-width: 500px;
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
    
    .content-section {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .section-header {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        padding: 1.25rem 1.5rem;
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
    }
    
    .section-header::before {
        content: '📋 ';
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
    }
    
    .data-table tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: background 0.2s ease;
    }
    
    .data-table tbody tr:hover {
        background: #f7fafc;
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
        color: #2a5298;
        font-size: 1.1rem;
    }
    
    .lowongan-title {
        font-weight: 600;
        color: #2d3748;
    }
    
    .badge-status {
        padding: 0.375rem 0.875rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        display: inline-block;
    }
    
    .badge-expired {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
    }
    
    .badge-active {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        justify-content: flex-start;
    }
    
    .btn-action-edit {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        border: none;
        color: white;
        padding: 0.5rem 1.25rem;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(245, 158, 11, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        text-decoration: none;
    }
    
    .btn-action-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
        color: white;
    }
    
    .btn-action-edit::before {
        content: '✏️';
    }
    
    .btn-action-delete {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        color: white;
        padding: 0.5rem 1.25rem;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(239, 68, 68, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
    }
    
    .btn-action-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
        color: white;
    }
    
    .btn-action-delete::before {
        content: '🗑️';
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
    }
    
    .empty-icon {
        font-size: 4rem;
        opacity: 0.3;
        margin-bottom: 1rem;
    }
    
    .empty-text {
        color: #a0aec0;
        font-size: 1rem;
    }
    
    .toast-notification {
        position: fixed;
        top: 2rem;
        right: 2rem;
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 1.25rem 2rem;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(16, 185, 129, 0.4);
        font-weight: 600;
        font-size: 1rem;
        z-index: 9999;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        animation: slideInRight 0.5s ease-out;
        min-width: 300px;
        max-width: 500px;
    }
    
    .toast-notification.hiding {
        animation: slideOutRight 0.5s ease-out forwards;
    }
    
    .toast-notification::before {
        content: '✅';
        font-size: 1.5rem;
    }
    
    .toast-close {
        margin-left: auto;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    
    .toast-close:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: rotate(90deg);
    }
    
    @keyframes slideInRight {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
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
        background: #2a5298;
        color: white;
        border-color: #2a5298;
        transform: translateY(-2px);
    }
    
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        border-color: #2a5298;
        color: white;
        box-shadow: 0 4px 12px rgba(42, 82, 152, 0.4);
    }
</style>

<div class="dashboard-wrapper">
    <div class="container">
        <!-- Page Title -->
        <div class="page-title">
            <h1>Dashboard Lowongan Kerja</h1>
        </div>
        <div class="page-subtitle">
            Kelola dan publikasikan lowongan pekerjaan dengan mudah
        </div>

        <!-- Stats Section -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon-wrapper"></div>
                <div class="stat-label">Total Lowongan</div>
                <h2 class="stat-value">{{ $lowongans->total() }}</h2>
                <div class="stat-date">Terakhir diperbarui: {{ date('d M Y') }}</div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-section">
            <a href="{{ route('admin.lowongan.create') }}" class="btn-add-primary">
                Tambah Lowongan Baru
            </a>
            <a href="{{ route('admin.lowongan.history') }}" class="btn-history">
                History Lowongan
            </a>
        </div>

        <!-- Search Section -->
        <div class="search-section">
            <form method="GET" action="{{ route('admin.lowongan.index') }}" id="searchForm">
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

        <!-- Toast Notification -->
        @if(session('success'))
            <div class="toast-notification" id="toastNotification">
                <span>{{ session('success') }}</span>
                <button class="toast-close" onclick="closeToast()">×</button>
            </div>
        @endif

        <!-- Data Table Section -->
        <div class="content-section">
            <div class="section-header">
                Daftar Lowongan Pekerjaan
            </div>
            <div id="lowonganTable">
                <div class="table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>JUDUL</th>
                                <th>PERUSAHAAN</th>
                                <th>LOKASI</th>
                                <th>NO HP/WA</th>
                                <th>TANGGAL MULAI</th>
                                <th>TANGGAL AKHIR</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
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
                                <td>{{ $l->perusahaan }}</td>
                                <td>{{ $l->lokasi }}</td>
                                <td>{{ $l->no_hp }}</td>
                                <td>{{ $l->tanggal_mulai?->format('d-m-Y H:i') }}</td>
                                <td>{{ $l->tanggal_akhir?->format('d-m-Y H:i') }}</td>
                                <td>
                                    @if($l->isExpired())
                                        <span class="badge-status badge-expired">Expired</span>
                                    @else
                                        <span class="badge-status badge-active">Aktif</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.lowongan.edit', $l) }}" class="btn-action-edit">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.lowongan.destroy', $l) }}" method="POST" style="display: inline;">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit" class="btn-action-delete" onclick="return confirm('Hapus lowongan ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9">
                                    <div class="empty-state">
                                        <div class="empty-icon">💼</div>
                                        <div class="empty-text">Belum ada lowongan. Mulai tambahkan lowongan pertama!</div>
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
    // Toast notification auto-hide
    const toast = document.getElementById('toastNotification');
    if (toast) {
        setTimeout(() => {
            closeToast();
        }, 5000);
    }
    
    function closeToast() {
        const toast = document.getElementById('toastNotification');
        if (toast) {
            toast.classList.add('hiding');
            setTimeout(() => {
                toast.remove();
            }, 500);
        }
    }

    // Search with debounce
    let timer = null;

    $('#searchInput').on('keyup', function() {
        clearTimeout(timer);
        let keyword = $(this).val();

        timer = setTimeout(() => {
            $.ajax({
                url: "{{ route('admin.lowongan.index') }}",
                type: "GET",
                data: { q: keyword },
                success: function(data) {
                    $('#lowonganTable').html($(data).find('#lowonganTable').html());
                }
            });
        }, 400); // debounce
    });

    // Pagination AJAX
    $(document).on('click', '#lowonganTable .pagination a', function(e) {
        e.preventDefault();
        let url = $(this).attr('href');
        $.get(url, function(data) {
            $('#lowonganTable').html($(data).find('#lowonganTable').html());
        });
    });
</script>
@endsection