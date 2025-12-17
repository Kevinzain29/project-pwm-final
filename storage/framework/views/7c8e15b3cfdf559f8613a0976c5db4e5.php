<?php $__env->startSection('title', 'Tambah Berita'); ?>

<?php $__env->startSection('content'); ?>
<style>
    body {
        background: linear-gradient(180deg, #3b5998 0%, #2d4373 100%) !important;
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
        content: '📝 ';
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
        min-height: 150px;
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
    
    .alert-success-custom {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: none;
        color: white;
        border-radius: 8px;
        padding: 1rem 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        font-weight: 500;
    }
    
    .alert-success-custom::before {
        content: '✅ ';
        margin-right: 0.5rem;
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
        content: '📰';
    }
    
    .input-icon.icon-author::before {
        content: '✍️';
    }
    
    .input-icon input {
        padding-left: 3rem;
    }
</style>

<div class="form-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Tambah Berita Baru</h1>
            <div class="page-subtitle">Buat dan publikasikan berita terbaru Anda</div>
        </div>

        <!-- Success Alert -->
        <?php if(session('success')): ?>
            <div class="alert-success-custom">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Form Card -->
        <div class="form-card">
            <div class="form-card-header">
                Form Berita
            </div>
            <div class="form-card-body">
                <form action="<?php echo e(route('admin.news.store')); ?>" method="POST" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>

                    <!-- Judul -->
                    <div class="form-group">
                        <label for="judul" class="form-label">Judul Berita</label>
                        <div class="input-icon icon-title">
                            <input 
                                type="text" 
                                name="judul" 
                                id="judul" 
                                class="form-control-modern <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                value="<?php echo e(old('judul')); ?>"
                                placeholder="Masukkan judul berita yang menarik">
                        </div>
                        <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Penulis -->
                    <div class="form-group">
                        <label for="penulis" class="form-label">Nama Penulis</label>
                        <div class="input-icon icon-author">
                            <input 
                                type="text" 
                                id="penulis"
                                name="penulis" 
                                value="<?php echo e(old('penulis')); ?>" 
                                class="form-control-modern <?php $__errorArgs = ['penulis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Masukkan nama penulis">
                        </div>
                        <small id="penulisError" class="text-danger d-none">Penulis hanya boleh huruf dan spasi.</small>
                        <?php $__errorArgs = ['penulis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                            <div class="invalid-feedback"><?php echo e($message); ?></div> 
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi" class="form-label">Deskripsi / Konten Berita</label>
                        <textarea 
                            name="deskripsi" 
                            id="deskripsi" 
                            class="form-control-modern <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            minlength="100"
                            maxlength="3000"
                            placeholder="Tulis konten berita Anda di sini... (minimal 100 karakter)"><?php echo e(old('deskripsi')); ?></textarea>
                        <small id="deskripsiHelp" class="char-counter">
                            <span class="char-counter-value" id="deskripsiCount">0</span>/3000 karakter (minimal 100 karakter)
                        </small>
                        <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Gambar -->
                    <div class="form-group">
                        <label for="gambar" class="form-label">Gambar Berita</label>
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
                                name="gambar" 
                                id="gambar" 
                                accept="image/*">
                            <input type="hidden" name="gambar_temp" id="gambar_temp" value="<?php echo e(old('gambar_temp')); ?>">
                        </div>
                        <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        <!-- Preview -->
                        <div class="preview-wrapper">
                            <img id="preview" 
                                 src="<?php echo e(old('gambar_temp') ? asset('storage/tmp/' . old('gambar_temp')) : ''); ?>" 
                                 class="preview-image <?php echo e(old('gambar_temp') ? '' : 'd-none'); ?>" 
                                 alt="Preview">
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">Simpan Berita</button>
                        <a href="<?php echo e(route('admin.news.index')); ?>" class="btn-cancel">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // Validasi Penulis
    const penulisInput = document.getElementById('penulis');
    const penulisError = document.getElementById('penulisError');

    penulisInput.addEventListener('input', function() {
        const regex = /^[A-Za-z\s]*$/;

        if (!regex.test(this.value)) {
            penulisError.textContent = "Penulis hanya boleh huruf dan spasi.";
            penulisError.classList.remove("d-none");
            this.classList.add('is-invalid');
        } else {
            penulisError.classList.add("d-none");
            this.classList.remove('is-invalid');
        }
    });

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
    updateCount();

    // Preview Gambar & Upload Temp
    const gambarInput = document.getElementById('gambar');
    const preview = document.getElementById('preview');
    const gambarTemp = document.getElementById('gambar_temp');
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

        const formData = new FormData();
        formData.append('gambar', file);

        fetch("<?php echo e(route('admin.news.upload.temp')); ?>", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(res => res.json())
        .then(data => {
            gambarTemp.value = data.filename;

            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            }
            reader.readAsDataURL(file);
        })
        .catch(err => console.error(err));
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\news\create.blade.php ENDPATH**/ ?>