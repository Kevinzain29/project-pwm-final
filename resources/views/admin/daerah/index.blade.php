@extends('layouts.app')

@section('title', 'Daerah')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e3c72 100%) !important;
        min-height: 100vh;
    }
    
    .page-wrapper {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .page-header {
        text-align: center;
        color: white;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        color: black;
    }
    
    .page-header h1::before {
        content: '📍 ';
    }
    
    .page-subtitle {
        color: black;
        font-size: 1.5rem;
    }
    
    .content-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    .card-header-custom {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
        padding: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .card-header-title {
        font-weight: 600;
        font-size: 1.2rem;
    }
    
    .card-header-title::before {
        content: '📋 ';
        margin-right: 0.5rem;
    }
    
    .btn-add {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: none;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        text-decoration: none;
        display: inline-block;
    }
    
    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        color: white;
    }
    
    .btn-add::before {
        content: '➕ ';
        margin-right: 0.5rem;
    }
    
    .alert-success {
        background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
        border: 2px solid #10b981;
        color: #065f46;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        font-weight: 500;
    }
    
    .alert-success::before {
        content: '✅ ';
        margin-right: 0.5rem;
    }
    
    .card-body-custom {
        padding: 0;
    }
    
    .table-container {
        overflow-x: auto;
    }
    
    .table-modern {
        width: 100%;
        margin: 0;
        border-collapse: collapse;
    }
    
    .table-modern thead {
        background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
    }
    
    .table-modern thead th {
        padding: 1.25rem 1.5rem;
        font-weight: 700;
        color: #1e293b;
        text-align: left;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-bottom: 3px solid #2a5298;
    }
    
    .table-modern tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }
    
    .table-modern tbody tr:hover {
        background: #f8fafc;
    }
    
    .table-modern tbody tr:last-child {
        border-bottom: none;
    }
    
    .table-modern tbody td {
        padding: 1.25rem 1.5rem;
        color: #475569;
        font-size: 1rem;
    }
    
    .table-modern tbody td:first-child {
        font-weight: 600;
        color: #2a5298;
    }
    
    .badge-count {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
        padding: 0.375rem 0.875rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.875rem;
        display: inline-block;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    
    .btn-edit {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        border: none;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(245, 158, 11, 0.3);
        text-decoration: none;
        display: inline-block;
    }
    
    .btn-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
        color: white;
    }
    
    .btn-edit::before {
        content: '✏️ ';
        margin-right: 0.25rem;
    }
    
    .btn-delete {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
        cursor: pointer;
    }
    
    .btn-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
        color: white;
    }
    
    .btn-delete::before {
        content: '🗑️ ';
        margin-right: 0.25rem;
    }
    
    .delete-form {
        display: inline;
        margin: 0;
    }
    
    .pagination-wrapper {
        padding: 1.5rem;
        background: #f8fafc;
        border-top: 2px solid #e2e8f0;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: #64748b;
    }
    
    .empty-state::before {
        content: '📭';
        font-size: 4rem;
        display: block;
        margin-bottom: 1rem;
    }
    
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 2rem;
        }
        
        .card-header-custom {
            flex-direction: column;
            align-items: stretch;
        }
        
        .btn-add {
            width: 100%;
            text-align: center;
        }
        
        .table-modern thead th,
        .table-modern tbody td {
            padding: 1rem;
            font-size: 0.85rem;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .btn-edit,
        .btn-delete {
            width: 100%;
        }
    }
</style>

<div class="page-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Daftar Daerah</h1>
            <div class="page-subtitle">Kelola data daerah UMKM</div>
        </div>

        <!-- Success Alert -->
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <!-- Content Card -->
        <div class="content-card">
            <!-- Card Header -->
            <div class="card-header-custom">
                <div class="card-header-title">Data Daerah</div>
                <a href="{{ route('admin.daerah.create') }}" class="btn-add">Tambah Daerah</a>
            </div>

            <!-- Card Body -->
            <div class="card-body-custom">
                <div class="table-container">
                    <table class="table-modern">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Jumlah UMKM</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($daerahs as $daerah)
                                <tr>
                                    <td>{{ $daerah->id }}</td>
                                    <td>{{ $daerah->nama }}</td>
                                    <td>{{ $daerah->deskripsi }}</td>
                                    <td><span class="badge-count">{{ $daerah->umkms_count }}</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="{{ route('admin.daerah.edit', $daerah) }}" class="btn-edit">Edit</a>
                                            <form action="{{ route('admin.daerah.destroy', $daerah) }}" method="POST" class="delete-form">
                                                @csrf 
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete" onclick="return confirm('Yakin hapus daerah ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <div class="empty-state">
                                            <strong>Belum ada data daerah</strong>
                                            <p>Silakan tambah daerah baru untuk memulai</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($daerahs->hasPages())
                    <div class="pagination-wrapper">
                        {{ $daerahs->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection