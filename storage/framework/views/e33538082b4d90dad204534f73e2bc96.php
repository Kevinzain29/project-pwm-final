<?php $__env->startSection('title', 'Tambah Divisi'); ?>

<?php $__env->startSection('content'); ?>
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
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .page-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        color: black;
    }
    
    .page-header h1::before {
        content: '➕ ';
    }
    
    .page-subtitle {
        color: black;
        font-size: 1.5rem;
    }
    
    .form-container {
        max-width: 800px;
        margin: 0 auto;
        animation: fadeInUp 0.6s ease;
    }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .form-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
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
        content: '👥 ';
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
    
    .input-icon.icon-division::before {
        content: '📑';
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

    .alert-danger-custom {
        background: #fef2f2;
        border: 1px solid #fee2e2;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
    }

    .alert-danger-custom li {
        color: #b91c1c;
        font-size: 0.875rem;
        list-style: none;
    }
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 2px solid #e2e8f0;
    }
    
    .btn-save {
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
    
    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        color: white;
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
    
    @media (max-width: 768px) {
        .page-header h1 { font-size: 2rem; }
        .form-actions { flex-direction: column; }
        .btn-save, .btn-cancel { width: 100%; text-align: center; }
    }
</style>

<div class="form-wrapper">
    <div class="container">
        <div class="page-header">
            <h1>Tambah Divisi</h1>
            <div class="page-subtitle">Buat departemen baru untuk struktur kepengurusan</div>
        </div>

        <div class="form-container">
            <?php if($errors->any()): ?>
                <div class="alert-danger-custom">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>⚠️ <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <div class="form-card">
                <div class="card-header-custom">
                    Form Tambah Divisi
                </div>

                <div class="card-body-custom">
                    <form action="<?php echo e(route('admin.divisi.store')); ?>" method="POST" novalidate>
                        <?php echo csrf_field(); ?>

                        
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Divisi</label>
                            <div class="input-icon icon-division">
                                <input 
                                    type="text" 
                                    id="nama"
                                    name="nama" 
                                    value="<?php echo e(old('nama')); ?>" 
                                    class="form-control-modern <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Contoh: Divisi Hubungan Masyarakat"
                                    required
                                >
                            </div>
                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <div class="input-icon icon-description">
                                <textarea 
                                    id="deskripsi"
                                    name="deskripsi" 
                                    class="form-control-modern <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    placeholder="Jelaskan peran dan tanggung jawab divisi ini..."
                                ><?php echo e(old('deskripsi')); ?></textarea>
                            </div>
                            <small id="deskripsiHelp" class="text-muted" style="display:none; font-size: 0.8rem; margin-top: 5px;">
                                <span id="deskripsiCount">0</span> karakter dimasukkan
                            </small>
                            <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-save">💾 Simpan Divisi</button>
                            <a href="<?php echo e(route('admin.divisi.index')); ?>" class="btn-cancel">◀️ Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Validasi Real-time sederhana untuk nama
    const namaInput = document.getElementById('nama');
    namaInput.addEventListener('input', function() {
        if(this.value.length > 0) {
            this.classList.remove('is-invalid');
        }
    });

    // Character counter untuk deskripsi
    const deskripsi = document.getElementById('deskripsi');
    const deskripsiCount = document.getElementById('deskripsiCount');
    const deskripsiHelp = document.getElementById('deskripsiHelp');

    deskripsi.addEventListener('input', function() {
        const length = this.value.length;
        if (length > 0) {
            deskripsiHelp.style.display = 'block';
            deskripsiCount.textContent = length;
        } else {
            deskripsiHelp.style.display = 'none';
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\divisi\create.blade.php ENDPATH**/ ?>