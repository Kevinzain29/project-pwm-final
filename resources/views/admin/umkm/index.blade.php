@extends('layouts.app')

@section('title', 'Data UMKM')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #ffffffff) !important;
        min-height: 100vh;
    }
    
    .dashboard-wrapper {
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
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
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
        background: linear-gradient(135deg, #3498db 0%, #76c8ffff 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
    
    .stat-icon-wrapper.umkm::before {
        content: '🏪';  
        font-size: 2.2rem;
    }
    
    .stat-icon-wrapper.karyawan::before {
        content: '👥';
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
    
    .chart-section {
        margin-bottom: 2rem;
    }
    
    .chart-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .chart-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
    }

    .chart-grid.single-center {
        justify-items: center;
    }

    .chart-title {
        font-size: 1rem;
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 1rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #e2e8f0;
    }
    
    .filter-section {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
    .filter-label {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 0.75rem;
        display: block;
        font-size: 0.95rem;
    }
    
    .filter-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 1.25rem;
    }
    
    .filter-btn {
        padding: 0.5rem 1.25rem;
        border-radius: 8px;
        border: 2px solid #e2e8f0;
        background: white;
        color: #4a5568;
        font-weight: 500;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }
    
    .filter-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .filter-btn.active-primary {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        border-color: #2a5298;
        color: white;
    }
    
    .filter-btn.active-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border-color: #10b981;
        color: white;
    }
    
    .filter-btn.active-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        border-color: #f59e0b;
        color: white;
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
        border: 2px solid rgba(7, 7, 7, 0.3);
        border-radius: 10px;
        font-size: 1rem;
        background: rgba(255, 255, 255, 0.95);
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: white;
        background: white;
        box-shadow: 0 0 0 3px rgba(6, 6, 6, 0.2);
    }
    
    .search-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        color: #6b7280;
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
    
    @media (max-width: 768px) {
        .chart-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="dashboard-wrapper">
    <div class="container">
        <!-- Page Title -->
        <div class="page-title">
            <h1>Dashboard UMKM</h1>
        </div>
        <div class="page-subtitle">
            Kelola dan pantau data UMKM dengan visualisasi statistik
        </div>

        <!-- Stats Section -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon-wrapper umkm"></div>
                <div class="stat-label">Total UMKM</div>
                <h2 class="stat-value">{{ $totalUmkm }}</h2>
            </div>
            <div class="stat-card">
                <div class="stat-icon-wrapper karyawan"></div>
                <div class="stat-label">Total Karyawan</div>
                <h2 class="stat-value">{{ $totalKaryawan }}</h2>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="chart-section">
            <div class="chart-grid">
                <div class="chart-card">
                    <h5 class="chart-title">📈 Grafik Pertumbuhan Bulanan ({{ $tahunSekarang }})</h5>
                    <canvas id="chartBulanan"></canvas>
                </div>
                <div class="chart-card">
                    <h5 class="chart-title">📊 Grafik Pertumbuhan Tahunan</h5>
                    <canvas id="chartTahunan"></canvas>
                </div>
            </div>

            <div class="chart-grid">
                <div class="chart-card">
                    <h5 class="chart-title">🗺️ Distribusi UMKM per Daerah</h5>
                    <canvas id="chartDaerah"></canvas>
                </div>
                <div class="chart-card">
                    <h5 class="chart-title">🏭 Distribusi UMKM per Sektor</h5>
                    <canvas id="chartSektor"></canvas>
                </div>
                <div class="chart-card">
                    <h5 class="chart-title">📋 Distribusi UMKM per Kategori</h5>
                    <canvas id="chartKategori"></canvas>
                </div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <!-- Filter Kategori -->
            <div>
                <label class="filter-label">🏷️ Filter Kategori</label>
                <div class="filter-buttons">
                    <a href="{{ route('admin.umkm.index') }}" 
                       class="filter-btn {{ request('kategori_id') ? '' : 'active-primary' }}">
                        Semua
                    </a>
                    @foreach ($kategoris as $kategori)
                        <a href="{{ route('admin.umkm.index', array_merge(request()->query(), ['kategori_id' => $kategori->id])) }}"
                           class="filter-btn {{ request('kategori_id') == $kategori->id ? 'active-primary' : '' }}">
                            {{ $kategori->nama }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Filter Daerah -->
            <div>
                <label class="filter-label">📍 Filter Daerah</label>
                <div class="filter-buttons">
                    <a href="{{ route('admin.umkm.index', ['kategori_id' => request('kategori_id')]) }}" 
                       class="filter-btn {{ request('daerah_id') ? '' : 'active-success' }}">
                        Semua
                    </a>
                    @foreach ($daerahs as $daerah)
                        <a href="{{ route('admin.umkm.index', array_merge(request()->query(), ['daerah_id' => $daerah->id])) }}"
                           class="filter-btn {{ request('daerah_id') == $daerah->id ? 'active-success' : '' }}">
                            {{ $daerah->nama }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Filter Sektor -->
            <div>
                <label class="filter-label">🏭 Filter Sektor</label>
                <div class="filter-buttons">
                    <a href="{{ route('admin.umkm.index', [
                        'kategori_id' => request('kategori_id'),
                        'daerah_id'   => request('daerah_id')
                    ]) }}" 
                    class="filter-btn {{ request('sektor_id') ? '' : 'active-warning' }}">
                        Semua
                    </a>
                    @foreach ($sektors as $sektor)
                        <a href="{{ route('admin.umkm.index', array_merge(request()->query(), ['sektor_id' => $sektor->id])) }}"
                        class="filter-btn {{ request('sektor_id') == $sektor->id ? 'active-warning' : '' }}">
                            {{ $sektor->nama }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Action Button -->
        <div class="action-section">
            <a href="{{ route('admin.umkm.create') }}" class="btn-add-primary">
                Tambah UMKM Baru
            </a>
        </div>

        <!-- Search Section -->
        <div class="search-section">
            <form method="GET" action="{{ route('admin.umkm.index') }}" id="searchForm">
                <div class="search-wrapper">
                    <span class="search-icon">🔍</span>
                    <input 
                        type="text" 
                        name="nama" 
                        id="searchInput" 
                        value="{{ request('nama') }}" 
                        class="search-input" 
                        placeholder="Cari UMKM...">
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

        <!-- Table Section -->
        <div id="umkmTable">
            @include('admin.umkm.table')
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                url: "{{ route('admin.umkm.index') }}",
                type: "GET",
                data: { nama: keyword },
                success: function(data) {
                    $('#umkmTable').html($(data).find('#umkmTable').html());
                }
            });
        }, 400); // debounce
    });

    // Pagination AJAX
    $(document).on('click', '#umkmTable .pagination a', function(e) {
        e.preventDefault();
        let url = $(this).attr('href');
        $.get(url, function(data) {
            $('#umkmTable').html($(data).find('#umkmTable').html());
        });
    });

    // Charts
    document.addEventListener('DOMContentLoaded', function () {
        // Data Bulanan
        let dataBulanan = Array(12).fill(0);
        const statistikBulanan = @json($statistikBulanan);

        for (const [bulan, total] of Object.entries(statistikBulanan)) {
            dataBulanan[bulan - 1] = total;
        }

        for (let i = 1; i < dataBulanan.length; i++) {
            dataBulanan[i] += dataBulanan[i - 1];
        }

        new Chart(document.getElementById('chartBulanan'), {
            type: 'line',
            data: {
                labels: [
                    'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
                ],
                datasets: [{
                    label: 'Total UMKM Akumulasi',
                    data: dataBulanan,
                    borderColor: 'rgba(42, 82, 152, 1)',
                    backgroundColor: 'rgba(42, 82, 152, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });

        // Data Tahunan
        const tahunLabels = Object.keys(@json($statistikTahunan));
        const tahunData   = Object.values(@json($statistikTahunan));

        new Chart(document.getElementById('chartTahunan'), {
            type: 'line',
            data: {
                labels: tahunLabels,
                datasets: [{
                    label: 'Total UMKM Tahunan',
                    data: tahunData,
                    borderColor: 'rgba(139, 92, 246, 1)',
                    backgroundColor: 'rgba(139, 92, 246, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });

        // Pie Chart Daerah
        const daerahLabels = @json($daerahs->pluck('nama'));
        const daerahData   = @json($daerahCounts);

        new Chart(document.getElementById('chartDaerah'), {
            type: 'pie',
            data: {
                labels: daerahLabels,
                datasets: [{
                    label: 'UMKM per Daerah',
                    data: daerahData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });

        // Bar Chart Sektor
        const sektorLabels = @json($sektors->pluck('nama'));
        const sektorData   = @json($sektorCounts);

        new Chart(document.getElementById('chartSektor'), {
            type: 'bar',
            data: {
                labels: sektorLabels,
                datasets: [{
                    label: 'UMKM per Sektor',
                    data: sektorData,
                    backgroundColor: 'rgba(245, 158, 11, 0.8)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });

        // Pie Chart Kategori
        const kategoriLabels = @json($kategoriLabels);
        const kategoriData   = @json($kategoriCounts);

        new Chart(document.getElementById('chartKategori'), {
            type: 'pie',
            data: {
                labels: kategoriLabels,
                datasets: [{
                    label: 'UMKM per Kategori',
                    data: kategoriData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });
    });
</script>
@endsection