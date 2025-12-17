<?php $__env->startSection('title', 'Tambah UMKM'); ?>

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
    }
    
    .page-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        color: black;
    }
    
    .page-header h1::before {
        content: '🏪 ';
    }
    
    .page-subtitle {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.5rem;
        color: black;
    }
    
    .form-sections {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .form-section {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    .section-header {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 1.25rem 1.5rem;
        font-weight: 600;
        font-size: 1.1rem;
    }
    
    .section-body {
        padding: 2rem;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .form-row.three-cols {
        grid-template-columns: repeat(3, 1fr);
    }
    
    @media (max-width: 768px) {
        .form-row,
        .form-row.three-cols {
            grid-template-columns: 1fr;
        }
    }
    
    .form-group {
        margin-bottom: 1.5rem;
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
        min-height: 100px;
    }
    
    select.form-control-modern {
        cursor: pointer;
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
    
    .input-icon.icon-business::before {
        content: '🏪';
    }
    
    .input-icon.icon-person::before {
        content: '👤';
    }
    
    .input-icon.icon-phone::before {
        content: '📱';
    }
    
    .input-icon.icon-number::before {
        content: '🔢';
    }
    
    .input-icon input,
    .input-icon select {
        padding-left: 3rem;
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
            <h1>Tambah UMKM Baru</h1>
            <div class="page-subtitle">Lengkapi formulir pendaftaran UMKM</div>
        </div>

        <form action="<?php echo e(route('admin.umkm.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-sections">
                <!-- Section 1: Informasi Dasar -->
                <div class="form-section">
                    <div class="section-header">
                        📋 Informasi Dasar UMKM
                    </div>
                    <div class="section-body">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama UMKM</label>
                                <div class="input-icon icon-business">
                                    <input type="text" 
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
                                           placeholder="Masukkan nama UMKM">
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
                                <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                                <div class="input-icon icon-number">
                                    <input type="number" 
                                           id="tahun_berdiri"
                                           name="tahun_berdiri" 
                                           value="<?php echo e(old('tahun_berdiri')); ?>" 
                                           class="form-control-modern <?php $__errorArgs = ['tahun_berdiri'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                           min="1900" 
                                           max="<?php echo e(now()->year); ?>"
                                           placeholder="Contoh: 2020">
                                </div>
                                <?php $__errorArgs = ['tahun_berdiri'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-row three-cols">
                            <div class="form-group">
                                <label for="kategori_id" class="form-label">Kategori</label>
                                <select name="kategori_id" 
                                        id="kategori_id"
                                        class="form-control-modern <?php $__errorArgs = ['kategori_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($kategori->id); ?>" <?php echo e(old('kategori_id') == $kategori->id ? 'selected' : ''); ?>>
                                            <?php echo e($kategori->nama); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['kategori_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="daerah_id" class="form-label">Daerah</label>
                                <select name="daerah_id" 
                                        id="daerah_id"
                                        class="form-control-modern <?php $__errorArgs = ['daerah_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih Daerah --</option>
                                    <?php $__currentLoopData = $daerahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daerah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($daerah->id); ?>" <?php echo e(old('daerah_id') == $daerah->id ? 'selected' : ''); ?>>
                                            <?php echo e($daerah->nama); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['daerah_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="sektor_id" class="form-label">Sektor</label>
                                <select name="sektor_id" 
                                        id="sektor_id"
                                        class="form-control-modern <?php $__errorArgs = ['sektor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih Sektor --</option>
                                    <?php $__currentLoopData = $sektors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sektor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($sektor->id); ?>" <?php echo e(old('sektor_id') == $sektor->id ? 'selected' : ''); ?>>
                                            <?php echo e($sektor->nama); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['sektor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Data Pemilik -->
                <div class="form-section">
                    <div class="section-header">
                        👤 Data Pemilik
                    </div>
                    <div class="section-body">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="pemilik" class="form-label">Nama Pemilik</label>
                                <div class="input-icon icon-person">
                                    <input type="text" 
                                           id="pemilik"
                                           name="pemilik" 
                                           value="<?php echo e(old('pemilik')); ?>" 
                                           class="form-control-modern <?php $__errorArgs = ['pemilik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           placeholder="Masukkan nama pemilik">
                                </div>
                                <?php $__errorArgs = ['pemilik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" 
                                        id="jenis_kelamin"
                                        class="form-control-modern <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih --</option>
                                    <option value="laki-laki" <?php echo e(old('jenis_kelamin') == 'laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
                                    <option value="perempuan" <?php echo e(old('jenis_kelamin') == 'perempuan' ? 'selected' : ''); ?>>Perempuan</option>
                                </select>
                                <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="usia" class="form-label">Usia Pemilik</label>
                                <select name="usia" 
                                        id="usia"
                                        class="form-control-modern <?php $__errorArgs = ['usia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih --</option>
                                    <option value="<20" <?php echo e(old('usia') == '<20' ? 'selected' : ''); ?>>&lt; 20</option>
                                    <option value="20-29" <?php echo e(old('usia') == '20-29' ? 'selected' : ''); ?>>20-29</option>
                                    <option value="30-39" <?php echo e(old('usia') == '30-39' ? 'selected' : ''); ?>>30-39</option>
                                    <option value="40-49" <?php echo e(old('usia') == '40-49' ? 'selected' : ''); ?>>40-49</option>
                                    <option value=">50" <?php echo e(old('usia') == '>50' ? 'selected' : ''); ?>>&gt; 50</option>
                                </select>
                                <?php $__errorArgs = ['usia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                <select name="pendidikan_terakhir" 
                                        id="pendidikan_terakhir"
                                        class="form-control-modern <?php $__errorArgs = ['pendidikan_terakhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih --</option>
                                    <option value="SD/SMP" <?php echo e(old('pendidikan_terakhir') == 'SD/SMP' ? 'selected' : ''); ?>>SD/SMP</option>
                                    <option value="SMA/SMK" <?php echo e(old('pendidikan_terakhir') == 'SMA/SMK' ? 'selected' : ''); ?>>SMA/SMK</option>
                                    <option value="Diploma" <?php echo e(old('pendidikan_terakhir') == 'Diploma' ? 'selected' : ''); ?>>Diploma</option>
                                    <option value="S1" <?php echo e(old('pendidikan_terakhir') == 'S1' ? 'selected' : ''); ?>>S1</option>
                                    <option value="S2/S3" <?php echo e(old('pendidikan_terakhir') == 'S2/S3' ? 'selected' : ''); ?>>S2/S3</option>
                                </select>
                                <?php $__errorArgs = ['pendidikan_terakhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Operasional & Modal -->
                <div class="form-section">
                    <div class="section-header">
                        💰 Operasional & Modal
                    </div>
                    <div class="section-body">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="status_lokasi" class="form-label">Status Lokasi</label>
                                <select name="status_lokasi" 
                                        id="status_lokasi"
                                        class="form-control-modern <?php $__errorArgs = ['status_lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih --</option>
                                    <option value="Milik" <?php echo e(old('status_lokasi') == 'Milik' ? 'selected' : ''); ?>>Milik</option>
                                    <option value="Sewa" <?php echo e(old('status_lokasi') == 'Sewa' ? 'selected' : ''); ?>>Sewa</option>
                                </select>
                                <?php $__errorArgs = ['status_lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="sumber_modal" class="form-label">Sumber Modal</label>
                                <select name="sumber_modal" 
                                        id="sumber_modal"
                                        class="form-control-modern <?php $__errorArgs = ['sumber_modal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">-- Pilih --</option>
                                    <option value="modal pribadi" <?php echo e(old('sumber_modal') == 'modal pribadi' ? 'selected' : ''); ?>>Modal Pribadi</option>
                                    <option value="pinjaman keluarga" <?php echo e(old('sumber_modal') == 'pinjaman keluarga' ? 'selected' : ''); ?>>Pinjaman Keluarga</option>
                                    <option value="bank" <?php echo e(old('sumber_modal') == 'bank' ? 'selected' : ''); ?>>Bank</option>
                                    <option value="koperasi/leasing" <?php echo e(old('sumber_modal') == 'koperasi/leasing' ? 'selected' : ''); ?>>Koperasi/Leasing</option>
                                    <option value="program pemerintah/lainnya" <?php echo e(old('sumber_modal') == 'program pemerintah/lainnya' ? 'selected' : ''); ?>>Program Pemerintah/Lainnya</option>
                                </select>
                                <?php $__errorArgs = ['sumber_modal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_karyawan" class="form-label">Jumlah Karyawan</label>
                            <div class="input-icon icon-number">
                                <input type="number" 
                                       id="jumlah_karyawan"
                                       name="jumlah_karyawan" 
                                       value="<?php echo e(old('jumlah_karyawan')); ?>" 
                                       class="form-control-modern <?php $__errorArgs = ['jumlah_karyawan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       min="0"
                                       placeholder="Jumlah karyawan">
                            </div>
                            <?php $__errorArgs = ['jumlah_karyawan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Pemasaran & Pengembangan -->
                <div class="form-section">
                    <div class="section-header">
                        📢 Pemasaran & Pengembangan
                    </div>
                    <div class="section-body">
                        <div class="form-group">
                            <label for="metode_pemasaran" class="form-label">Metode Pemasaran</label>
                            <select name="metode_pemasaran" 
                                    id="metode_pemasaran"
                                    class="form-control-modern <?php $__errorArgs = ['metode_pemasaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="">-- Pilih --</option>
                                <option value="offline" <?php echo e(old('metode_pemasaran') == 'offline' ? 'selected' : ''); ?>>Offline</option>
                                <option value="online" <?php echo e(old('metode_pemasaran') == 'online' ? 'selected' : ''); ?>>Online</option>
                                <option value="offline&online" <?php echo e(old('metode_pemasaran') == 'offline&online' ? 'selected' : ''); ?>>Offline & Online</option>
                            </select>
                            <?php $__errorArgs = ['metode_pemasaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="hambatan_pemasaran" class="form-label">Hambatan Pemasaran</label>
                            <textarea name="hambatan_pemasaran" 
                                      id="hambatan_pemasaran"
                                      class="form-control-modern <?php $__errorArgs = ['hambatan_pemasaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                      placeholder="Jelaskan hambatan dalam pemasaran..."><?php echo e(old('hambatan_pemasaran')); ?></textarea>
                            <?php $__errorArgs = ['hambatan_pemasaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="kebutuhan_pengembangan" class="form-label">Kebutuhan Pengembangan</label>
                            <textarea name="kebutuhan_pengembangan" 
                                      id="kebutuhan_pengembangan"
                                      class="form-control-modern <?php $__errorArgs = ['kebutuhan_pengembangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                      placeholder="Jelaskan kebutuhan pengembangan..."><?php echo e(old('kebutuhan_pengembangan')); ?></textarea>
                            <?php $__errorArgs = ['kebutuhan_pengembangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Kontak & Alamat -->
                <div class="form-section">
                    <div class="section-header">
                        📍 Kontak & Alamat
                    </div>
                    <div class="section-body">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea name="alamat" 
                                      id="alamat"
                                      class="form-control-modern <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                      placeholder="Masukkan alamat lengkap UMKM..."><?php echo e(old('alamat')); ?></textarea>
                            <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="no_telp" class="form-label">No Telepon</label>
                            <div class="input-icon icon-phone">
                                <input type="text" 
                                       id="no_telp"
                                       name="no_telp" 
                                       value="<?php echo e(old('no_telp')); ?>" 
                                       class="form-control-modern <?php $__errorArgs = ['no_telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       pattern="[0-9]+" 
                                       placeholder="Contoh: 081234567890">
                            </div>
                            <small class="helper-text">Hanya boleh angka</small>
                            <?php $__errorArgs = ['no_telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-submit">Simpan UMKM</button>
                            <a href="<?php echo e(route('admin.umkm.index')); ?>" class="btn-cancel">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\umkm\create.blade.php ENDPATH**/ ?>