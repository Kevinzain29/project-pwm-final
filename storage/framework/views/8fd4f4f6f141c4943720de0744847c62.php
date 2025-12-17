

<?php $__env->startSection('title', $regulasi->exists ? 'Edit Regulasi' : 'Tambah Regulasi'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .form-container {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .form-header {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
    .form-title {
        color: #1e3c72;
        font-size: 2rem;
        font-weight: 700;
        margin: 0;
    }
    
    .form-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        padding: 2.5rem;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
    }
    
    .form-label {
        color: #1e3c72;
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }
    
    .form-control, .form-select {
        border: 2px solid #e0e7ff;
        border-radius: 10px;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #2a5298;
        box-shadow: 0 0 0 0.25rem rgba(42, 82, 152, 0.15);
        outline: none;
    }
    
    .form-control.is-invalid {
        border-color: #dc3545;
    }
    
    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.15);
    }
    
    .invalid-feedback {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        font-weight: 500;
    }
    
    .file-info {
        background: #f8f9ff;
        border: 2px dashed #2a5298;
        border-radius: 10px;
        padding: 1rem;
        margin-top: 0.75rem;
    }
    
    .file-info.success {
        background: #d4edda;
        border-color: #28a745;
    }
    
    .file-link {
        color: #2a5298;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .file-link:hover {
        color: #1e3c72;
        text-decoration: underline;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        border: none;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(42, 82, 152, 0.3);
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(42, 82, 152, 0.4);
    }
    
    .btn-secondary {
        background: #6c757d;
        border: none;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
        background: #5a6268;
        transform: translateY(-2px);
    }
    
    .form-section {
        margin-bottom: 1.5rem;
    }
    
    textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }
    
    .action-buttons {
        padding-top: 1.5rem;
        border-top: 2px solid #e0e7ff;
        margin-top: 2rem;
    }
    
    .form-icon {
        font-size: 1.2rem;
        margin-right: 0.5rem;
    }
    
    input[type="file"] {
        cursor: pointer;
    }
    
    input[type="file"]::-webkit-file-upload-button {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 0.5rem 1.25rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    input[type="file"]::-webkit-file-upload-button:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(42, 82, 152, 0.3);
    }
</style>

<div class="form-container">
    <div class="container">
        
        <div class="form-header">
            <h1 class="form-title">
                <?php echo e($regulasi->exists ? '✏️ Edit Regulasi' : '➕ Tambah Regulasi Baru'); ?>

            </h1>
            <p class="text-muted mb-0">
                <?php echo e($regulasi->exists ? 'Perbarui informasi regulasi yang sudah ada' : 'Lengkapi form di bawah untuk menambahkan regulasi baru'); ?>

            </p>
        </div>

        
        <div class="form-card">
            <form action="<?php echo e($regulasi->exists ? route('admin.regulasi.update', $regulasi->id) : route('admin.regulasi.store')); ?>"
                  method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if($regulasi->exists): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>

                
                <div class="form-section">
                    <label for="nama" class="form-label">
                        <span class="form-icon">📋</span>Nama Regulasi
                    </label>
                    <input type="text" 
                           name="nama" 
                           id="nama"
                           class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('nama', $regulasi->nama)); ?>"
                           placeholder="Contoh: Peraturan Daerah Nomor 1 Tahun 2024">
                    <?php $__errorArgs = ['nama'];
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

                
                <div class="form-section">
                    <label for="tanggal_terbit" class="form-label">
                        <span class="form-icon">📅</span>Tanggal Terbit
                    </label>
                    <input type="date" 
                           name="tanggal_terbit" 
                           id="tanggal_terbit"
                           class="form-control <?php $__errorArgs = ['tanggal_terbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('tanggal_terbit', optional($regulasi->tanggal_terbit)->format('Y-m-d'))); ?>">
                    <?php $__errorArgs = ['tanggal_terbit'];
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

                
                <div class="form-section">
                    <label for="penerbit" class="form-label">
                        <span class="form-icon">🏢</span>Penerbit
                    </label>
                    <input type="text" 
                           name="penerbit" 
                           id="penerbit"
                           class="form-control <?php $__errorArgs = ['penerbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('penerbit', $regulasi->penerbit)); ?>"
                           placeholder="Contoh: Pemerintah Daerah DIY">
                    <?php $__errorArgs = ['penerbit'];
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

                
                <div class="form-section">
                    <label for="jenis" class="form-label">
                        <span class="form-icon">🏷️</span>Jenis Regulasi
                    </label>
                    <input type="text" 
                           name="jenis" 
                           id="jenis"
                           class="form-control <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('jenis', $regulasi->jenis)); ?>"
                           placeholder="Contoh: Peraturan Daerah, Undang-Undang, dll">
                    <?php $__errorArgs = ['jenis'];
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

                
                <div class="form-section">
                    <label for="deskripsi" class="form-label">
                        <span class="form-icon">📝</span>Deskripsi
                    </label>
                    <textarea name="deskripsi" 
                              id="deskripsi"
                              class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                              rows="4"
                              placeholder="Masukkan deskripsi atau ringkasan regulasi..."><?php echo e(old('deskripsi', $regulasi->deskripsi)); ?></textarea>
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

                
                <div class="form-section">
                    <label for="file" class="form-label">
                        <span class="form-icon">📄</span>File Regulasi (PDF)
                    </label>
                    <input type="file" 
                           name="file" 
                           id="file"
                           class="form-control <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           accept="application/pdf">
                    <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    
                    <?php if(old('file_tmp')): ?>
                        <div class="file-info success">
                            <small class="text-success fw-semibold">
                                ✅ File sudah diupload sebelumnya:
                                <a href="<?php echo e(asset('storage/tmp/' . old('file_tmp'))); ?>" target="_blank" class="file-link">
                                    Lihat File Sementara
                                </a>
                            </small>
                        </div>
                        <input type="hidden" name="file_tmp" value="<?php echo e(old('file_tmp')); ?>">
                    
                    
                    <?php elseif($regulasi->file): ?>
                        <div class="file-info">
                            <small class="text-primary fw-semibold">
                                📄 File saat ini:
                                <a href="<?php echo e(asset('storage/' . $regulasi->file)); ?>" target="_blank" class="file-link">
                                    Lihat File
                                </a>
                            </small>
                            <p class="mb-0 mt-1 text-muted" style="font-size: 0.85rem;">
                                Upload file baru untuk mengganti file yang ada
                            </p>
                        </div>
                    <?php endif; ?>
                </div>

                
                <div class="action-buttons">
                    <button type="submit" class="btn btn-primary">
                        <?php echo e($regulasi->exists ? '💾 Update Regulasi' : '💾 Simpan Regulasi'); ?>

                    </button>
                    <a href="<?php echo e(route('admin.regulasi.index')); ?>" class="btn btn-secondary">
                        ❌ Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\regulasi\form.blade.php ENDPATH**/ ?>