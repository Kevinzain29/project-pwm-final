@extends('layouts.app')
@section('title', 'Edit Kategori')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e3c72 100%) !important;
        min-height: 100vh;
    }
    
    .form-wrapper {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .page-header {
        text-align: center;
        color: white;
        margin-bottom: 3rem;
        animation: fadeInDown 0.6s ease;
    }
    
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .page-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        color: black;
    }
    
    .page-header h1::before {
        content: '✏️ ';
    }
    
    .page-subtitle {    
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.5rem;
        color: black;   
    }
    
    .form-container {
        max-width: 800px;
        margin: 0 auto;
        animation: fadeInUp 0.6s ease;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .form-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    .card-header-custom {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
        padding: 1.5rem;
        font-weight: 600;
        font-size: 1.2rem;
    }
    
    .card-header-custom::before {
        content: '📝 ';
        margin-right: 0.5rem;
    }
    
    .card-body-custom {
        padding: 2rem;
    }
    
    .form-group {
        margin-bottom: 2rem;
    }
    
    .form-label {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 0.5rem;
        font-size: 1rem;
        display: block;
    }
    
    .form-label::after {
        content: ' *';
        color: #ef4444;
    }
    
    .input-icon {
        position: relative;
    }
    
    .input-icon::before {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        color: #9ca3af;
        pointer-events: none;
        z-index: 1;
    }
    
    .input-icon.icon-category::before {
        content: '📂';
    }
    
    .input-icon.icon-description::before {
        content: '📝';
        top: 1.2rem;
        transform: none;
    }
    
    .form-control-modern {
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }
    
    .input-icon .form-control-modern {
        padding-left: 3rem;
    }
    
    .form-control-modern:focus {
        outline: none;
        border-color: #2a5298;
        background: white;
        box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
    }
    
    .form-control-modern.is-invalid {
        border-color: #ef4444;
        background: #fef2f2;
    }
    
    .form-control-modern.is-invalid:focus {
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
    }
    
    textarea.form-control-modern {
        resize: vertical;
        min-height: 120px;
    }
    
    .invalid-feedback {
        display: block;
        color: #ef4444;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        font-weight: 500;
    }
    
    .invalid-feedback::before {
        content: '⚠️ ';
    }
    
    .text-danger {
        color: #ef4444 !important;
        display: block;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        font-weight: 500;
    }
    
    .text-danger::before {
        content: '⚠️ ';
    }
    
    .text-danger.d-none {
        display: none !important;
    }
    
    .text-muted {
        color: #718096 !important;
        display: block;
        font-size: 0.875rem;
        margin-top: 0.5rem;
    }
    
    .text-muted::before {
        content: 'ℹ️ ';
        margin-right: 0.25rem;
    }
    
    .text-muted.d-none {
        display: none !important;
    }
    
    .helper-text {
        font-size: 0.875rem;
        color: #718096;
        margin-top: 0.5rem;
        display: block;
    }
    
    .helper-text::before {
        content: 'ℹ️ ';
        margin-right: 0.25rem;
    }
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 2px solid #e2e8f0;
    }
    
    .btn-update {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        border: none;
        color: white;
        padding: 0.875rem 2.5rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        cursor: pointer;
    }
    
    .btn-update:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
        color: white;
    }
    
    .btn-update::before {
        content: '🔄 ';
        margin-right: 0.5rem;
    }
    
    .btn-cancel {
        background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        border: none;
        color: white;
        padding: 0.875rem 2.5rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(107, 114, 128, 0.3);
        text-decoration: none;
        display: inline-block;
    }
    
    .btn-cancel:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(107, 114, 128, 0.4);
        color: white;
    }
    
    .btn-cancel::before {
        content: '◀️ ';
        margin-right: 0.5rem;
    }
    
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 2rem;
        }
        
        .form-wrapper {
            padding: 1rem 0;
        }
        
        .card-body-custom {
            padding: 1.5rem;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn-update,
        .btn-cancel {
            width: 100%;
            text-align: center;
        }
    }
</style>

<div class="form-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Edit Kategori</h1>
            <div class="page-subtitle">Perbarui informasi data kategori</div>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <div class="form-card">
                <!-- Card Header -->
                <div class="card-header-custom">
                    Form Edit Kategori
                </div>

                <!-- Card Body -->
                <div class="card-body-custom">
                    <form action="{{ route('admin.kategori.update', $kategori) }}" method="POST" novalidate>
                        @csrf 
                        @method('PUT')

                        {{-- Input Nama --}}
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Kategori</label>
                            <div class="input-icon icon-category">
                                <input 
                                    type="text" 
                                    id="nama"
                                    name="nama"
                                    value="{{ old('nama', $kategori->nama) }}"
                                    class="form-control-modern @error('nama') is-invalid @enderror"
                                    placeholder="Masukkan nama kategori"
                                >
                            </div>
                            <small id="namaError" class="text-danger d-none">Nama hanya boleh berisi huruf dan spasi.</small>
                            <small class="helper-text">Hanya huruf dan spasi yang diperbolehkan</small>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <div class="input-icon icon-description">
                                <textarea 
                                    id="deskripsi"
                                    name="deskripsi" 
                                    class="form-control-modern @error('deskripsi') is-invalid @enderror" 
                                    rows="5"
                                    minlength="3"
                                    maxlength="100"
                                    placeholder="Masukkan deskripsi kategori..."
                                >{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
                            </div>

                            {{-- Awalnya disembunyikan --}}
                            <small id="deskripsiHelp" class="text-muted d-none">
                                <span id="deskripsiCount">0</span>/100 karakter (min. 3)
                            </small>

                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Form Actions -->
                        <div class="form-actions">
                            <button type="submit" class="btn-update">Update Kategori</button>
                            <a href="{{ route('admin.kategori.index') }}" class="btn-cancel">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Script validasi & hitung huruf --}}
<script>
    // === Validasi realtime Nama ===
    const namaInput = document.getElementById('nama');
    const namaError = document.getElementById('namaError');

    namaInput.addEventListener('input', function() {
        const regex = /^[A-Za-z\s]*$/;

        if (!regex.test(this.value)) {
            namaError.textContent = "Nama hanya boleh berisi huruf dan spasi.";
            namaError.classList.remove("d-none");
            this.classList.add('is-invalid');
        } else {
            namaError.classList.add("d-none");
            this.classList.remove('is-invalid');
        }
    });

    // === Counter Deskripsi ===
    const deskripsi = document.getElementById('deskripsi');
    const deskripsiCount = document.getElementById('deskripsiCount');
    const deskripsiHelp = document.getElementById('deskripsiHelp');

    function updateCount() {
        const length = deskripsi.value.length;

        if (length === 0) {
            deskripsiHelp.classList.add('d-none');
        } else {
            deskripsiHelp.classList.remove('d-none');
            deskripsiCount.textContent = length;

            if (length < 3) {
                deskripsiHelp.classList.remove('text-muted');
                deskripsiHelp.classList.add('text-danger');
            } else {
                deskripsiHelp.classList.remove('text-danger');
                deskripsiHelp.classList.add('text-muted');
            }
        }
    }

    deskripsi.addEventListener('input', updateCount);
    updateCount(); // inisialisasi
</script>
@endsection