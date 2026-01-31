@extends('layouts.app')
@section('title', 'Edit Lowongan')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e3c72 100%); !important;
        min-height: 100vh;
    }
    
    .edit-wrapper {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .page-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        color: black;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
    
    .page-header p {
        color: black;
        font-size: 1.5rem;
    }
    
    .form-container {
        background: white;
        border-radius: 16px;
        padding: 2.5rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        max-width: 900px;
        margin: 0 auto;
    }
    
    .form-section {
        margin-bottom: 2rem;
    }
    
    .form-section-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #764ba2;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 3px solid #667eea;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .form-section-title::before {
        content: '📝';
        font-size: 1.5rem;
    }
    
    .form-label {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 0.5rem;
        font-size: 1rem;
        display: flex;
        align-items: center;
        gap: 0.375rem;
    }
    
    .form-label.required::after {
        content: '*';
        color: #ef4444;
        margin-left: 0.25rem;
    }
    
    .form-control {
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }
    
    .form-control:focus {
        background: white;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        outline: none;
    }
    
    .form-control.is-invalid {
        border-color: #ef4444;
        background: #fef2f2;
    }
    
    .form-control.is-invalid:focus {
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
    }
    
    .invalid-feedback {
        display: block;
        color: #ef4444;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        font-weight: 500;
    }
    
    textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }
    
    .character-counter {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 0.5rem;
        font-size: 0.875rem;
    }
    
    .counter-text {
        color: #6b7280;
        font-weight: 500;
    }
    
    .counter-text.text-danger {
        color: #ef4444;
    }
    
    .counter-badge {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.8rem;
    }
    
    .counter-badge.danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    }
    
    .image-upload-wrapper {
        border: 2px dashed #cbd5e0;
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        background: #f8f9fa;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .image-upload-wrapper:hover {
        border-color: #667eea;
        background: #f0f4ff;
    }
    
    .image-upload-wrapper.has-file {
        border-color: #10b981;
        background: #f0fdf4;
    }
    
    .upload-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        opacity: 0.5;
    }
    
    .upload-text {
        color: #6b7280;
        font-size: 0.95rem;
        font-weight: 500;
    }
    
    .current-image-wrapper {
        margin-top: 1.5rem;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 10px;
        border: 2px solid #e2e8f0;
    }
    
    .current-image-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: #6b7280;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.375rem;
    }
    
    .current-image-label::before {
        content: '🖼️';
    }
    
    .current-image {
        border-radius: 8px;
        max-width: 200px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border: 3px solid white;
    }
    
    .input-icon {
        position: relative;
    }
    
    .input-icon .form-control {
        padding-left: 2.75rem;
    }
    
    .input-icon::before {
        content: attr(data-icon);
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        z-index: 1;
    }
    
    .date-input-wrapper {
        position: relative;
    }
    
    .date-input-wrapper::before {
        content: '📅';
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        pointer-events: none;
        z-index: 1;
    }
    
    .date-input-wrapper .form-control {
        padding-left: 2.75rem;
    }
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2.5rem;
        padding-top: 2rem;
        border-top: 2px solid #e2e8f0;
    }
    
    .btn-save {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: none;
        color: white;
        padding: 0.875rem 2.5rem;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }
    
    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        color: white;
    }
    
    .btn-save::before {
        content: '💾';
        font-size: 1.1rem;
    }
    
    .btn-cancel {
        background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        border: none;
        color: white;
        padding: 0.875rem 2.5rem;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(107, 114, 128, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }
    
    .btn-cancel:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(107, 114, 128, 0.4);
        color: white;
    }
    
    .btn-cancel::before {
        content: '↩️';
        font-size: 1.1rem;
    }
    
    .error-icon {
        display: inline-block;
        margin-right: 0.375rem;
    }
    
    .validation-icon {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
    }
    
    .validation-icon.valid {
        color: #10b981;
    }
    
    .validation-icon.invalid {
        color: #ef4444;
    }
    
    @media (max-width: 768px) {
        .form-container {
            padding: 1.5rem;
        }
        
        .page-header h1 {
            font-size: 2rem;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn-save, .btn-cancel {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<div class="edit-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Edit Lowongan Kerja</h1>
            <p>Perbarui informasi lowongan pekerjaan</p>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <form action="{{ route('admin.lowongan.update', $lowongan->id) }}" method="POST" enctype="multipart/form-data" id="editForm">
                @csrf
                @method('PUT')

                <!-- Informasi Dasar -->
                <div class="form-section">
                    <h3 class="form-section-title">Informasi Dasar</h3>
                    
                    <!-- Judul -->
                    <div class="mb-3">
                        <label class="form-label required">Judul Lowongan</label>
                        <div class="input-icon" data-icon="💼">
                            <input type="text" 
                                   name="judul" 
                                   class="form-control @error('judul') is-invalid @enderror" 
                                   value="{{ old('judul', $lowongan->judul) }}"
                                   placeholder="Contoh: Web Developer">
                            @error('judul') 
                                <div class="invalid-feedback">
                                    <span class="error-icon">⚠️</span> {{ $message }}
                                </div> 
                            @enderror
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label class="form-label required">Deskripsi Lowongan</label>
                        <textarea id="deskripsi"
                                  name="deskripsi" 
                                  class="form-control @error('deskripsi') is-invalid @enderror" 
                                  rows="6"
                                  minlength="100"
                                  maxlength="5000"
                                  placeholder="Jelaskan detail lowongan pekerjaan, kualifikasi, dan benefit yang ditawarkan...">{{ old('deskripsi', $lowongan->deskripsi) }}</textarea>
                        <div class="character-counter">
                            <small class="counter-text" id="deskripsiHelp">
                                Minimal 100 karakter
                            </small>
                            <span class="counter-badge" id="deskripsiCountBadge">
                                <span id="deskripsiCount">0</span>/5000
                            </span>
                        </div>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                <span class="error-icon">⚠️</span> {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Informasi Perusahaan -->
                <div class="form-section">
                    <h3 class="form-section-title">Informasi Perusahaan</h3>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required">Nama Perusahaan</label>
                            <div class="input-icon" data-icon="🏢">
                                <input type="text" 
                                       name="perusahaan" 
                                       class="form-control @error('perusahaan') is-invalid @enderror" 
                                       value="{{ old('perusahaan', $lowongan->perusahaan) }}"
                                       placeholder="PT Example Indonesia">
                                @error('perusahaan')
                                    <div class="invalid-feedback">
                                        <span class="error-icon">⚠️</span> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label required">Lokasi</label>
                            <div class="input-icon" data-icon="📍">
                                <input type="text" 
                                       name="lokasi" 
                                       class="form-control @error('lokasi') is-invalid @enderror" 
                                       value="{{ old('lokasi', $lowongan->lokasi) }}"
                                       placeholder="Jakarta Selatan">
                                @error('lokasi')
                                    <div class="invalid-feedback">
                                        <span class="error-icon">⚠️</span> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- No Telp -->
                    <div class="mb-3">
                        <label for="no_hp" class="form-label required">Nomor Telepon / WhatsApp</label>
                        <div class="input-icon" data-icon="📱">
                            <input 
                                type="text" 
                                id="no_hp"
                                name="no_hp" 
                                value="{{ old('no_hp', $lowongan->no_hp) }}" 
                                class="form-control @error('no_hp') is-invalid @enderror"
                                placeholder="08123456789"
                            >
                            <span class="validation-icon d-none" id="noHpIcon"></span>
                            @error('no_hp') 
                                <div class="invalid-feedback">
                                    <span class="error-icon">⚠️</span> {{ $message }}
                                </div> 
                            @enderror
                        </div>
                        <small id="noTelpError" class="text-danger d-none mt-2">
                            <span class="error-icon">⚠️</span> Nomor telepon hanya boleh berisi angka
                        </small>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="form-section">
                    <h3 class="form-section-title">Media</h3>
                    
                    <div class="mb-3">
                        <label class="form-label">Gambar Lowongan</label>
                        <div class="image-upload-wrapper" id="imageUploadWrapper">
                            <div class="upload-icon">🖼️</div>
                            <div class="upload-text">
                                <strong>Klik untuk upload gambar</strong><br>
                                <small>atau drag & drop file disini</small><br>
                                <small class="text-muted">Format: JPG, PNG, JPEG (Max: 2MB)</small>
                            </div>
                            <input type="file" 
                                   name="gambar" 
                                   id="gambarInput"
                                   class="form-control @error('gambar') is-invalid @enderror" 
                                   accept="image/*"
                                   style="display: none;">
                        </div>
                        @error('gambar')
                            <div class="invalid-feedback d-block mt-2">
                                <span class="error-icon">⚠️</span> {{ $message }}
                            </div>
                        @enderror
                        
                        @if($lowongan->gambar)
                            <div class="current-image-wrapper">
                                <div class="current-image-label">Gambar Saat Ini</div>
                                <img src="{{ asset('uploads/' . $lowongan->gambar) }}" 
                                     alt="Gambar Lowongan" 
                                     class="current-image">
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Periode Lowongan -->
                <div class="form-section">
                    <h3 class="form-section-title">Periode Lowongan</h3>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required">Tanggal Mulai</label>
                            <div class="date-input-wrapper">
                                <input type="datetime-local" 
                                       name="tanggal_mulai" 
                                       class="form-control @error('tanggal_mulai') is-invalid @enderror" 
                                       value="{{ old('tanggal_mulai', \Carbon\Carbon::parse($lowongan->tanggal_mulai)->format('Y-m-d\TH:i')) }}">
                                @error('tanggal_mulai')
                                    <div class="invalid-feedback">
                                        <span class="error-icon">⚠️</span> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label required">Tanggal Akhir</label>
                            <div class="date-input-wrapper">
                                <input type="datetime-local" 
                                       name="tanggal_akhir" 
                                       class="form-control @error('tanggal_akhir') is-invalid @enderror" 
                                       value="{{ old('tanggal_akhir', \Carbon\Carbon::parse($lowongan->tanggal_akhir)->format('Y-m-d\TH:i')) }}">
                                @error('tanggal_akhir')
                                    <div class="invalid-feedback">
                                        <span class="error-icon">⚠️</span> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="submit" class="btn-save">
                        Simpan Perubahan
                    </button>
                    <a href="{{ route('admin.lowongan.index') }}" class="btn-cancel">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // === Validasi realtime No Telp ===
    const noTelpInput = document.getElementById('no_hp');
    const noTelpError = document.getElementById('noTelpError');
    const noHpIcon = document.getElementById('noHpIcon');

    noTelpInput.addEventListener('input', function() {
        const regex = /^[0-9]*$/;

        if (this.value && !regex.test(this.value)) {
            noTelpError.classList.remove("d-none");
            noHpIcon.classList.remove("d-none", "valid");
            noHpIcon.classList.add("invalid");
            noHpIcon.textContent = "❌";
            this.classList.add("is-invalid");
        } else if (this.value) {
            noTelpError.classList.add("d-none");
            noHpIcon.classList.remove("d-none", "invalid");
            noHpIcon.classList.add("valid");
            noHpIcon.textContent = "✓";
            this.classList.remove("is-invalid");
        } else {
            noTelpError.classList.add("d-none");
            noHpIcon.classList.add("d-none");
            this.classList.remove("is-invalid");
        }
    });

    // === Counter Deskripsi ===
    const deskripsi = document.getElementById('deskripsi');
    const deskripsiCount = document.getElementById('deskripsiCount');
    const deskripsiHelp = document.getElementById('deskripsiHelp');
    const deskripsiCountBadge = document.getElementById('deskripsiCountBadge');

    function updateCount() {
        const length = deskripsi.value.length;
        deskripsiCount.textContent = length;

        if (length < 100) {
            deskripsiHelp.classList.add('text-danger');
            deskripsiHelp.classList.remove('text-muted');
            deskripsiCountBadge.classList.add('danger');
            deskripsiHelp.textContent = `Kurang ${100 - length} karakter lagi`;
        } else {
            deskripsiHelp.classList.remove('text-danger');
            deskripsiHelp.classList.add('text-muted');
            deskripsiCountBadge.classList.remove('danger');
            deskripsiHelp.textContent = 'Minimal 100 karakter ✓';
        }
    }

    deskripsi.addEventListener('input', updateCount);
    updateCount();

    // === Image Upload Handler ===
    const imageUploadWrapper = document.getElementById('imageUploadWrapper');
    const gambarInput = document.getElementById('gambarInput');

    imageUploadWrapper.addEventListener('click', function() {
        gambarInput.click();
    });

    gambarInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            imageUploadWrapper.classList.add('has-file');
            const fileName = this.files[0].name;
            imageUploadWrapper.querySelector('.upload-text').innerHTML = `
                <strong>✓ File dipilih</strong><br>
                <small>${fileName}</small><br>
                <small class="text-muted">Klik untuk mengganti</small>
            `;
        }
    });

    // Drag & Drop
    imageUploadWrapper.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.borderColor = '#667eea';
        this.style.background = '#f0f4ff';
    });

    imageUploadWrapper.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.style.borderColor = '#cbd5e0';
        this.style.background = '#f8f9fa';
    });

    imageUploadWrapper.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.borderColor = '#cbd5e0';
        this.style.background = '#f8f9fa';
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            gambarInput.files = files;
            gambarInput.dispatchEvent(new Event('change'));
        }
    });
</script>
@endsection