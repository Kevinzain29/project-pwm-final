@extends('layouts.app')
@section('title', 'Tambah Lowongan')

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
    }
    
    .page-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        color: black;
    }
    
    .page-header h1::before {
        content: '💼 ';
    }
    
    .page-subtitle {
        color: black;
        font-size: 1.5rem;
    }
    
    .form-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 2rem;
    }
    
    .form-card-header {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 1.5rem;
        font-weight: 600;
        font-size: 1.2rem;
    }
    
    .form-card-header::before {
        content: '✍️ ';
        margin-right: 0.5rem;
    }
    
    .form-card-body {
        padding: 2rem;
    }
    
    .form-group {
        margin-bottom: 1.75rem;
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
    
    .form-control-modern {
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8f9fa;
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
        min-height: 150px;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
    
    .char-counter {
        display: block;
        margin-top: 0.5rem;
        font-size: 0.875rem;
        color: #718096;
    }
    
    .char-counter.text-danger {
        color: #ef4444 !important;
        font-weight: 500;
    }
    
    .char-counter-value {
        font-weight: 600;
        color: #2a5298;
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
    
    .file-input-wrapper {
        position: relative;
    }
    
    .file-input-custom {
        display: block;
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px dashed #cbd5e0;
        border-radius: 8px;
        background: #f8f9fa;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }
    
    .file-input-custom:hover {
        border-color: #2a5298;
        background: #f0f4ff;
    }
    
    .file-input-custom.has-file {
        border-color: #10b981;
        background: #f0fdf4;
    }
    
    .file-input-label {
        color: #718096;
        font-size: 0.95rem;
    }
    
    .file-input-label::before {
        content: '📁 ';
        font-size: 1.5rem;
        display: block;
        margin-bottom: 0.5rem;
    }
    
    input[type="file"] {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        cursor: pointer;
    }
    
    .preview-wrapper {
        margin-top: 1rem;
        text-align: center;
    }
    
    .preview-image {
        max-width: 300px;
        max-height: 300px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        border: 3px solid white;
        object-fit: cover;
    }
    
    .preview-image.d-none {
        display: none;
    }
    
    .btn-submit {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: none;
        color: white;
        padding: 0.875rem 2.5rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        cursor: pointer;
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        color: white;
    }
    
    .btn-submit::before {
        content: '💾 ';
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
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 2px solid #e2e8f0;
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
    }
    
    .input-icon.icon-title::before {
        content: '📋';
    }
    
    .input-icon.icon-company::before {
        content: '🏢';
    }
    
    .input-icon.icon-location::before {
        content: '📍';
    }
    
    .input-icon.icon-phone::before {
        content: '📱';
    }
    
    .input-icon input {
        padding-left: 3rem;
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
</style>

<div class="form-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Tambah Lowongan Baru</h1>
            <div class="page-subtitle">Publikasikan lowongan pekerjaan terbaru</div>
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <div class="form-card-header">
                Form Lowongan Pekerjaan
            </div>
            <div class="form-card-body">
                <form action="{{ route('admin.lowongan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Judul -->
                    <div class="form-group">
                        <label for="judul" class="form-label">Judul Lowongan</label>
                        <div class="input-icon icon-title">
                            <input 
                                type="text" 
                                id="judul"
                                name="judul" 
                                class="form-control-modern @error('judul') is-invalid @enderror" 
                                value="{{ old('judul') }}"
                                placeholder="Contoh: Web Developer, Marketing Manager">
                        </div>
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi" class="form-label">Deskripsi Pekerjaan</label>
                        <textarea 
                            name="deskripsi" 
                            id="deskripsi"
                            class="form-control-modern @error('deskripsi') is-invalid @enderror" 
                            rows="4" 
                            minlength="100"
                            maxlength="5000"
                            placeholder="Tulis deskripsi lengkap tentang pekerjaan... (minimal 100 karakter)">{{ old('deskripsi') }}</textarea>
                        <small id="deskripsiHelp" class="char-counter">
                            <span class="char-counter-value" id="deskripsiCount">0</span>/5000 karakter (minimal 100 karakter)
                        </small>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Perusahaan & Lokasi -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="perusahaan" class="form-label">Nama Perusahaan</label>
                            <div class="input-icon icon-company">
                                <input 
                                    type="text" 
                                    id="perusahaan"
                                    name="perusahaan" 
                                    class="form-control-modern @error('perusahaan') is-invalid @enderror" 
                                    value="{{ old('perusahaan') }}"
                                    placeholder="Nama perusahaan">
                            </div>
                            @error('perusahaan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <div class="input-icon icon-location">
                                <input 
                                    type="text" 
                                    id="lokasi"
                                    name="lokasi" 
                                    class="form-control-modern @error('lokasi') is-invalid @enderror" 
                                    value="{{ old('lokasi') }}"
                                    placeholder="Kota, Provinsi">
                            </div>
                            @error('lokasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- No HP/WA -->
                    <div class="form-group">
                        <label for="no_hp" class="form-label">No HP/WhatsApp</label>
                        <div class="input-icon icon-phone">
                            <input 
                                type="number" 
                                id="no_hp"
                                name="no_hp" 
                                class="form-control-modern @error('no_hp') is-invalid @enderror" 
                                value="{{ old('no_hp') }}" 
                                pattern="[0-9]{10,13}" 
                                placeholder="Contoh: 081234567890">
                        </div>
                        <small class="helper-text">Gunakan format: 08xxxxxxxxxx (10-13 digit)</small>
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Gambar -->
                    <div class="form-group">
                        <label for="gambar" class="form-label">Gambar Lowongan</label>
                        <div class="file-input-wrapper">
                            <div class="file-input-custom" id="fileInputCustom">
                                <div class="file-input-label" id="fileInputLabel">
                                    Klik atau drag & drop gambar di sini
                                    <div style="font-size: 0.8rem; margin-top: 0.5rem; color: #9ca3af;">
                                        Format: JPG, PNG, GIF (Max: 2MB)
                                    </div>
                                </div>
                            </div>
                            <input 
                                type="file" 
                                id="gambar"
                                name="gambar" 
                                accept="image/*">
                        </div>
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        
                        <!-- Preview -->
                        <div class="preview-wrapper">
                            <img id="preview" class="preview-image d-none" alt="Preview">
                        </div>
                    </div>

                    <!-- Tanggal Mulai & Akhir -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                            <input 
                                type="datetime-local" 
                                id="tanggal_mulai"
                                name="tanggal_mulai" 
                                class="form-control-modern @error('tanggal_mulai') is-invalid @enderror" 
                                value="{{ old('tanggal_mulai') }}">
                            @error('tanggal_mulai')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                            <input 
                                type="datetime-local" 
                                id="tanggal_akhir"
                                name="tanggal_akhir" 
                                class="form-control-modern @error('tanggal_akhir') is-invalid @enderror" 
                                value="{{ old('tanggal_akhir') }}">
                            @error('tanggal_akhir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">Simpan Lowongan</button>
                        <a href="{{ route('admin.lowongan.index') }}" class="btn-cancel">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Scripts --}}
<script>
    // Counter Deskripsi
    const deskripsi = document.getElementById('deskripsi');
    const deskripsiCount = document.getElementById('deskripsiCount');
    const deskripsiHelp = document.getElementById('deskripsiHelp');

    function updateCount() {
        const length = deskripsi.value.length;
        deskripsiCount.textContent = length;

        if (length < 100) {
            deskripsiHelp.classList.add('text-danger');
        } else {
            deskripsiHelp.classList.remove('text-danger');
        }
    }

    deskripsi.addEventListener('input', updateCount);
    updateCount(); // Initialize

    // File Input Preview
    const gambarInput = document.getElementById('gambar');
    const preview = document.getElementById('preview');
    const fileInputCustom = document.getElementById('fileInputCustom');
    const fileInputLabel = document.getElementById('fileInputLabel');

    gambarInput.addEventListener('change', function() {
        const file = this.files[0];
        if (!file) return;

        // Update UI
        fileInputCustom.classList.add('has-file');
        fileInputLabel.innerHTML = `
            <div style="color: #10b981; font-weight: 600;">✓ ${file.name}</div>
            <div style="font-size: 0.8rem; margin-top: 0.5rem; color: #059669;">
                Gambar berhasil dipilih
            </div>
        `;

        // Preview
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('d-none');
        }
        reader.readAsDataURL(file);
    });
</script>
@endsection