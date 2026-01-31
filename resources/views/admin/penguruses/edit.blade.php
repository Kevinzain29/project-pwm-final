@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(180deg, #ffffffff) !important;
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
        content: '✏️ ';
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
        background: linear-gradient(135deg, #5b7fd4 0%, #4a67c7 100%);
        color: white;
        padding: 1.5rem;
        font-weight: 600;
        font-size: 1.2rem;
    }
    
    .form-card-header::before {
        content: '📝 ';
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
        border-color: #5b7fd4;
        background: white;
        box-shadow: 0 0 0 3px rgba(91, 127, 212, 0.1);
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
    
    .char-counter.d-none {
        display: none !important;
    }
    
    .char-counter-value {
        font-weight: 600;
        color: #5b7fd4;
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
    }
    
    .text-danger::before {
        content: '⚠️ ';
    }
    
    .text-danger.d-none {
        display: none !important;
    }
    
    .current-image-wrapper {
        margin-bottom: 1rem;
        padding: 1rem;
        background: #f0f4ff;
        border-radius: 8px;
        border: 2px solid #cbd5e0;
    }
    
    .current-image-label {
        font-size: 0.875rem;
        color: #4a5568;
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    .current-image-label::before {
        content: '🖼️ ';
    }
    
    .current-image {
        max-width: 250px;
        max-height: 250px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        border: 3px solid white;
        object-fit: cover;
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
        border-color: #5b7fd4;
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
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8f9fa;
        cursor: pointer;
    }
    
    input[type="file"]:focus {
        outline: none;
        border-color: #5b7fd4;
        background: white;
        box-shadow: 0 0 0 3px rgba(91, 127, 212, 0.1);
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
    
    .input-icon.icon-name::before {
        content: '👤';
    }
    
    .input-icon.icon-position::before {
        content: '🏆';
    }
    
    .input-icon input {
        padding-left: 3rem;
    }
    
    .file-change-note {
        font-size: 0.875rem;
        color: #718096;
        margin-top: 0.5rem;
        padding: 0.75rem;
        background: #fef3c7;
        border-left: 4px solid #f59e0b;
        border-radius: 4px;
    }
    
    .file-change-note::before {
        content: '💡 ';
    }
</style>

<div class="form-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Edit Pengurus</h1>
            <div class="page-subtitle">Perbarui informasi data pengurus</div>
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <div class="form-card-header">
                Form Edit Pengurus
            </div>
            <div class="form-card-body">
                <form action="{{ route('admin.penguruses.update', $pengurus->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Divisi -->
                    <div class="form-group">
                        <label for="divisi_id" class="form-label">Divisi</label>
                        <div class="input-icon icon-division">
                            <select
                                id="divisi_id"
                                name="divisi_id"
                                class="form-control-modern @error('divisi_id') is-invalid @enderror"
                            >
                                <option value="">-- Pilih Divisi --</option>
                                @foreach($divisis as $divisi)
                                    <option value="{{ $divisi->id }}"
                                        {{ old('divisi_id', $pengurus->divisi_id) == $divisi->id ? 'selected' : '' }}>
                                        {{ $divisi->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        @error('divisi_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama -->
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <div class="input-icon icon-name">
                            <input 
                                type="text" 
                                id="nama"
                                name="nama"
                                value="{{ old('nama', $pengurus->nama) }}"
                                class="form-control-modern @error('nama') is-invalid @enderror"
                                placeholder="Masukkan nama lengkap pengurus">
                        </div>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jabatan -->
                    <div class="form-group">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <div class="input-icon icon-position">
                            <input 
                                type="text" 
                                id="jabatan"
                                name="jabatan" 
                                class="form-control-modern @error('jabatan') is-invalid @enderror" 
                                value="{{ old('jabatan', $pengurus->jabatan) }}"
                                placeholder="Contoh: Ketua, Sekretaris, Bendahara">
                        </div>
                        @error('jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea 
                            id="deskripsi"
                            name="deskripsi" 
                            class="form-control-modern @error('deskripsi') is-invalid @enderror" 
                            rows="4"
                            minlength="3"
                            maxlength="500"
                            placeholder="Tulis deskripsi singkat tentang pengurus... (minimal 3 karakter)">{{ old('deskripsi', $pengurus->deskripsi) }}</textarea>

                        <small id="deskripsiHelp" class="char-counter d-none">
                            <span class="char-counter-value" id="deskripsiCount">0</span>/500 karakter (minimal 3 karakter)
                        </small>

                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Gambar -->
                    <div class="form-group">
                        <label for="gambar" class="form-label">Foto Pengurus</label>
                        
                        <!-- Current Image -->
                        @if($pengurus->gambar)
                            <div class="current-image-wrapper">
                                <span class="current-image-label">Foto Saat Ini:</span>
                                <div>
                                    <img src="{{ asset('uploads/' . $pengurus->gambar) }}" class="current-image" alt="{{ $pengurus->nama }}">
                                </div>
                            </div>
                        @endif

                        <!-- File Input -->
                        <input 
                            type="file" 
                            id="gambar"
                            name="gambar" 
                            accept="image/*">
                        
                        <div class="file-change-note">
                            Biarkan kosong jika tidak ingin mengubah foto
                        </div>
                        
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Actions -->
                    <div class="form-actions">
                        <button type="submit" class="btn-update">Update Pengurus</button>
                        <a href="{{ route('admin.penguruses.index') }}" class="btn-cancel">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Scripts --}}
<script>
    // Validasi Nama (Optional - dikomentari di kode asli)
    const namaInput = document.getElementById('nama');
    const namaError = document.getElementById('namaError');

    if (namaError) {
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
    }

    // Counter Deskripsi
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
                deskripsiHelp.classList.add('text-danger');
            } else {
                deskripsiHelp.classList.remove('text-danger');
            }
        }
    }

    deskripsi.addEventListener('input', updateCount);
    updateCount(); // Initialize on page load
</script>
@endsection