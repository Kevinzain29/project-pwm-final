@extends('layouts.app')

@section('title', 'User Management')

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
        color: white;
        margin-bottom: 1rem;
    }
    
    .page-title h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
        color: black;
    }
    
    .page-title h1::before {
        content: '👥 ';
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
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 120px;
        height: 120px;
        opacity: 0.1;
        background-size: cover;
        pointer-events: none;
    }
    
    .stat-card.pending::before {
        content: '🕒';
        font-size: 120px;
        line-height: 120px;
    }
    
    .stat-card.total::before {
        content: '👥';
        font-size: 120px;
        line-height: 120px;
    }
    
    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }
    
    .stat-icon-wrapper {
        width: 70px;
        height: 70px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        position: relative;
        z-index: 1;
    }
    
    .stat-icon-wrapper.warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }
    
    .stat-icon-wrapper.info {
        background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
    }
    
    .stat-icon-wrapper::before {
        font-size: 2.2rem;
    }
    
    .stat-icon-wrapper.warning::before {
        content: '🕒';
    }
    
    .stat-icon-wrapper.info::before {
        content: '👥';
    }
    
    .stat-label {
        font-size: 1rem;
        color: black;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 1;
    }
    
    .stat-value {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2d3748;
        margin: 0;
        position: relative;
        z-index: 1;
    }
    
    .stat-badge {
        display: inline-block;
        padding: 0.375rem 0.875rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-top: 0.75rem;
        position: relative;
        z-index: 1;
    }
    
    .stat-badge.warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
    }
    
    .stat-badge.info {
        background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
        color: white;
    }
    
    .action-section {
        margin-bottom: 2rem;
    }
    
    .action-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .btn-action-card {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.25rem 1.5rem;
        border-radius: 12px;
        border: none;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        color: white;
    }
    
    .btn-action-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        color: white;
    }
    
    .btn-add-user {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    
    .btn-pending {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }
    
    .btn-all-users {
        background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
    }
    
    .btn-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        flex-shrink: 0;
    }
    
    .btn-text {
        flex: 1;
        text-align: left;
    }
    
    .btn-text-main {
        display: block;
        font-size: 1.05rem;
        font-weight: 600;
    }
    
    .btn-text-sub {
        display: block;
        font-size: 0.85rem;
        opacity: 0.9;
        margin-top: 0.25rem;
    }
    
    .info-section {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
    }
    
    .info-header {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #e2e8f0;
    }
    
    .info-header::before {
        content: 'ℹ️ ';
        margin-right: 0.5rem;
    }
    
    .info-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .info-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid #e2e8f0;
        color: #4a5568;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .info-list li:last-child {
        border-bottom: none;
    }
    
    .info-list li::before {
        content: '✓';
        width: 24px;
        height: 24px;
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        flex-shrink: 0;
    }
    
    @media (max-width: 768px) {
        .action-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="dashboard-wrapper">
    <div class="container">
        <!-- Page Title -->
        <div class="page-title">
            <h1>User Management</h1>
        </div>
        <div class="page-subtitle">
            Kelola pengguna dan persetujuan akun dengan mudah
        </div>

        <!-- Stats Section -->
        <div class="stats-grid">
            <div class="stat-card pending">
                <div class="stat-icon-wrapper warning"></div>
                <div class="stat-label">Pending Approvals</div>
                <h2 class="stat-value">{{ $pendingUsers }}</h2>
                <span class="stat-badge warning">Menunggu Persetujuan</span>
            </div>

            <div class="stat-card total">
                <div class="stat-icon-wrapper info"></div>
                <div class="stat-label">Total Users</div>
                <h2 class="stat-value">{{ $totalUsers }}</h2>
                <span class="stat-badge info">Pengguna Terdaftar</span>
            </div>
        </div>

        <!-- Action Section -->
        <div class="action-section">
            <div class="action-grid">
                <a href="{{ route('admin.users.create') }}" class="btn-action-card btn-add-user">
                    <div class="btn-icon">➕</div>
                    <div class="btn-text">
                        <span class="btn-text-main">Add New User</span>
                        <span class="btn-text-sub">Tambah pengguna baru ke sistem</span>
                    </div>
                </a>

                <a href="{{ route('admin.users.pending') }}" class="btn-action-card btn-pending">
                    <div class="btn-icon">🕒</div>
                    <div class="btn-text">
                        <span class="btn-text-main">Pending Users</span>
                        <span class="btn-text-sub">Kelola persetujuan pengguna</span>
                    </div>
                </a>

                <a href="{{ route('admin.users.all') }}" class="btn-action-card btn-all-users">
                    <div class="btn-icon">📋</div>
                    <div class="btn-text">
                        <span class="btn-text-main">All Users</span>
                        <span class="btn-text-sub">Lihat semua pengguna aktif</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Info Section -->
        <div class="info-section">
            <h3 class="info-header">Fitur User Management</h3>
            <ul class="info-list">
                <li>Kelola dan tambahkan pengguna baru dengan mudah</li>
                <li>Review dan approve pengguna yang menunggu persetujuan</li>
                <li>Monitor total pengguna yang terdaftar dalam sistem</li>
                <li>Akses cepat ke semua data pengguna aktif</li>
                <li>Manajemen role dan permission pengguna</li>
            </ul>
        </div>
    </div>
</div>
@endsection