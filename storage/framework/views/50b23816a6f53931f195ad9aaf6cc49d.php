<style>
    .content-section {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
    }
    
    .section-header {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        padding: 1.25rem 1.5rem;
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
    }
    
    .section-header::before {
        content: '📊 ';
    }
    
    .table-wrapper {
        overflow-x: auto;
    }
    
    .data-table {
        width: 300%;
        margin: 0;
        border-collapse: separate;
        border-spacing: 0;
        font-size: 0.875rem;
    }
    
    .data-table thead {
        background: #f8f9fa;
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .data-table thead th {
        padding: 0.875rem 1rem;
        font-weight: 600;
        font-size: 0.8rem;
        color: #4a5568;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 2px solid #e2e8f0;
        text-align: left;
        white-space: nowrap;
    }
    
    .data-table tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: background 0.2s ease;
    }
    
    .data-table tbody tr:hover {
        background: #f7fafc;
    }
    
    .data-table tbody tr:last-child {
        border-bottom: none;
    }
    
    .data-table tbody td {
        padding: 1rem 1rem;
        color: #2d3748;
        vertical-align: middle;
        max-width: 200px;
    }
    
    .umkm-id {
        font-weight: 700;
        color: #2a5298;
        font-size: 1rem;
    }
    
    .umkm-name {
        font-weight: 600;
        color: #2d3748;
        white-space: nowrap;
    }
    
    .badge-gender {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    
    .badge-male {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
    }
    
    .badge-female {
        background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);
        color: white;
    }
    
    .badge-age,
    .badge-education,
    .badge-status,
    .badge-marketing {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        color: white;
    }
    
    .badge-education {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    
    .badge-status {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }
    
    .badge-marketing {
        background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
    }
    
    .text-truncate-cell {
        max-width: 150px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: nowrap;
    }
    
    .btn-action-edit {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        border: none;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(245, 158, 11, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        text-decoration: none;
        white-space: nowrap;
    }
    
    .btn-action-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
        color: white;
    }
    
    .btn-action-edit::before {
        content: '✏️';
    }
    
    .btn-action-delete {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.8rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(239, 68, 68, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        white-space: nowrap;
    }
    
    .btn-action-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
        color: white;
    }
    
    .btn-action-delete::before {
        content: '🗑️';
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
    }
    
    .empty-icon {
        font-size: 4rem;
        opacity: 0.3;
        margin-bottom: 1rem;
    }
    
    .empty-text {
        color: #a0aec0;
        font-size: 1rem;
    }
    
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
        padding: 1rem;
    }
    
    .pagination {
        display: flex;
        gap: 0.5rem;
    }
    
    .pagination .page-link {
        background: white;
        border: 1px solid #e2e8f0;
        color: #4a5568;
        padding: 0.5rem 0.875rem;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    
    .pagination .page-link:hover {
        background: #2a5298;
        color: white;
        border-color: #2a5298;
        transform: translateY(-2px);
    }
    
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        border-color: #2a5298;
        color: white;
        box-shadow: 0 4px 12px rgba(42, 82, 152, 0.4);
    }
    
    .karyawan-count {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-weight: 600;
        color: #2a5298;
    }
    
    .karyawan-count::before {
        content: '👥';
    }
</style>

<div class="content-section">
    <div class="section-header">
        Data UMKM Terdaftar
    </div>
    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA UMKM</th>
                    <th>PEMILIK</th>
                    <th>NO. TELP</th>
                    <th>GENDER</th>
                    <th>USIA</th>
                    <th>PENDIDIKAN</th>
                    <th>BERDIRI</th>
                    <th>ALAMAT</th>
                    <th>LOKASI</th>
                    <th>PEMASARAN</th>
                    <th>KARYAWAN</th>
                    <th>KATEGORI</th>
                    <th>DAERAH</th>
                    <th>SEKTOR</th>
                    <th>MODAL</th>
                    <th>HAMBATAN</th>
                    <th>KEBUTUHAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $umkms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $umkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td>
                            <span class="umkm-id"><?php echo e($umkm->id); ?></span>
                        </td>
                        <td>
                            <div class="umkm-name"><?php echo e($umkm->nama); ?></div>
                        </td>
                        <td><?php echo e($umkm->pemilik); ?></td>
                        <td>
                            <span style="white-space: nowrap;"><?php echo e($umkm->no_telp); ?></span>
                        </td>
                        <td>
                            <?php if($umkm->jenis_kelamin == 'laki-laki'): ?>
                                <span class="badge-gender badge-male">♂ Laki-laki</span>
                            <?php else: ?>
                                <span class="badge-gender badge-female">♀ Perempuan</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <span class="badge-age"><?php echo e($umkm->usia); ?></span>
                        </td>
                        <td>
                            <span class="badge-education"><?php echo e($umkm->pendidikan_terakhir); ?></span>
                        </td>
                        <td>
                            <strong><?php echo e($umkm->tahun_berdiri); ?></strong>
                        </td>
                        <td>
                            <div class="text-truncate-cell" title="<?php echo e($umkm->alamat); ?>">
                                <?php echo e($umkm->alamat); ?>

                            </div>
                        </td>
                        <td>
                            <span class="badge-status"><?php echo e($umkm->status_lokasi); ?></span>
                        </td>
                        <td>
                            <span class="badge-marketing"><?php echo e($umkm->metode_pemasaran); ?></span>
                        </td>
                        <td>
                            <span class="karyawan-count"><?php echo e($umkm->jumlah_karyawan); ?></span>
                        </td>
                        <td><?php echo e($umkm->kategori->nama); ?></td>
                        <td><?php echo e($umkm->daerah->nama); ?></td>
                        <td><?php echo e($umkm->sektor->nama); ?></td>
                        <td>
                            <div class="text-truncate-cell" title="<?php echo e($umkm->sumber_modal); ?>">
                                <?php echo e($umkm->sumber_modal); ?>

                            </div>
                        </td>
                        <td>
                            <div class="text-truncate-cell" title="<?php echo e($umkm->hambatan_pemasaran); ?>">
                                <?php echo e($umkm->hambatan_pemasaran); ?>

                            </div>
                        </td>
                        <td>
                            <div class="text-truncate-cell" title="<?php echo e($umkm->kebutuhan_pengembangan); ?>">
                                <?php echo e($umkm->kebutuhan_pengembangan); ?>

                            </div>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="<?php echo e(route('admin.umkm.edit', $umkm)); ?>" class="btn-action-edit">
                                    Edit
                                </a>
                                <form action="<?php echo e(route('admin.umkm.destroy', $umkm)); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?> 
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn-action-delete" onclick="return confirm('Yakin hapus?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="19">
                            <div class="empty-state">
                                <div class="empty-icon">🏪</div>
                                <div class="empty-text">Tidak ada data UMKM. Mulai tambahkan UMKM pertama!</div>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination-wrapper">
        <?php echo e($umkms->withQueryString()->links('layouts.pagination')); ?>

    </div>
</div><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/admin/umkm/table.blade.php ENDPATH**/ ?>