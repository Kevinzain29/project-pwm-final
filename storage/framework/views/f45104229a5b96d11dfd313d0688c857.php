<?php $__env->startSection('title', 'Tambah Kategori'); ?>

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
    
    .input-icon.icon-number::before {
        content: '🔢';
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
    
    .btn-save::before {
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
        
        .btn-save,
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
            <h1>Tambah Kategori</h1>
            <div class="page-subtitle">Tambahkan data kategori baru untuk UMKM</div>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <div class="form-card">
                <!-- Card Header -->
                <div class="card-header-custom">
                    Form Tambah Kategori
                </div>

                <!-- Card Body -->
                <div class="card-body-custom">
                    <form action="<?php echo e(route('admin.kategori.store')); ?>" method="POST" novalidate>
                        <?php echo csrf_field(); ?>

                        
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Kategori</label>
                            <div class="input-icon icon-category">
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
                                    placeholder="Masukkan nama kategori"
                                >
                            </div>
                            <small id="namaError" class="text-danger d-none">Nama hanya boleh huruf dan spasi.</small>
                            <small class="helper-text">Hanya huruf dan spasi yang diperbolehkan</small>
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
                                    rows="5"
                                    minlength="3"
                                    maxlength="100"
                                    placeholder="Masukkan deskripsi kategori..."
                                ><?php echo e(old('deskripsi')); ?></textarea>
                            </div>
                            
                            
                            <small id="deskripsiHelp" class="text-muted d-none">
                                <span id="deskripsiCount">0</span>/100 karakter (min. 3)
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

                        
                        <div class="form-group">
                            <label for="jumlah_umkm" class="form-label">Jumlah UMKM</label>
                            <div class="input-icon icon-number">
                                <input 
                                    type="number" 
                                    id="jumlah_umkm" 
                                    name="jumlah_umkm" 
                                    value="<?php echo e(old('jumlah_umkm')); ?>" 
                                    class="form-control-modern <?php $__errorArgs = ['jumlah_umkm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Masukkan jumlah UMKM"
                                    min="0"
                                >
                            </div>
                            <small class="helper-text">Masukkan jumlah UMKM yang terdaftar</small>
                            <?php $__errorArgs = ['jumlah_umkm'];
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

                        <!-- Form Actions -->
                        <div class="form-actions">
                            <button type="submit" class="btn-save">Simpan Kategori</button>
                            <a href="<?php echo e(route('admin.kategori.index')); ?>" class="btn-cancel">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const namaInput = document.getElementById('nama');
    const namaError = document.getElementById('namaError');

    namaInput.addEventListener('input', function() {
        const regex = /^[A-Za-z\s]*$/;

        if (!regex.test(this.value)) {
            namaError.textContent = "Nama hanya boleh huruf dan spasi.";
            namaError.classList.remove("d-none");
            this.classList.add('is-invalid');
        } 
        else {
            namaError.classList.add("d-none");
            this.classList.remove('is-invalid');
        }
    });

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
    updateCount();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\kategori\create.blade.php ENDPATH**/ ?>