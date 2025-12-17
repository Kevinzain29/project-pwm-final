<?php $__env->startSection('title', 'All Users'); ?>

<?php $__env->startSection('content'); ?>
<style>
    body {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e3c72 100%) !important;
        min-height: 100vh;
    }
    
    .page-wrapper {
        background: linear-gradient(135deg, #ffffffff);
        min-height: 100vh;
        padding: 2rem 0;
    }
    
    .page-header {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 16px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 8px 42px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
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
    
    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.5rem;
    }
    
    .header-left h1 {
        color: black;
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
    
    .header-left h1::before {
        content: '👥 ';
    }
    
    .header-left p {
        color: black;
        margin: 0;
        font-size: 1.2rem;
    }
    
    .btn-back {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: black;
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    .btn-back:hover {
        background: rgba(255, 255, 255, 0.3);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-2px);
        box-shadow: 0 6px 40px rgba(0, 0, 0, 0.15);
        color: black;
    }
    
    .btn-back::before {
        content: '◀️';
    }
    
    .content-card {
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        overflow: hidden;
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
    
    .card-header-custom {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
        padding: 1.5rem 2rem;
        font-weight: 600;
        font-size: 1.2rem;
        position: relative;
        overflow: hidden;
    }
    
    .card-header-custom::before {
        content: '📋 ';
        margin-right: 0.5rem;
    }
    
    .card-header-custom::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: pulse 3s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            opacity: 0.5;
        }
        50% {
            transform: scale(1.1);
            opacity: 0.8;
        }
    }
    
    .table-container {
        overflow-x: auto;
    }
    
    .table-modern {
        width: 100%;
        margin: 0;
        border-collapse: collapse;
    }
    
    .table-modern thead {
        background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
    }
    
    .table-modern thead th {
        padding: 1.25rem 1rem;
        font-weight: 700;
        color: #1e293b;
        text-align: left;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-bottom: 3px solid #2a5298;
        white-space: nowrap;
    }
    
    .table-modern tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }
    
    .table-modern tbody tr:hover {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        transform: scale(1.01);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }
    
    .table-modern tbody tr:last-child {
        border-bottom: none;
    }
    
    .table-modern tbody td {
        padding: 1.25rem 1rem;
        color: #475569;
        font-size: 0.95rem;
        vertical-align: middle;
    }
    
    .user-icon {
        margin-right: 0.5rem;
        color: #64748b;
    }
    
    .badge-custom {
        padding: 0.4rem 0.875rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.8rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    .badge-role {
        background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        color: white;
    }
    
    .badge-approved {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }
    
    .badge-pending {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
    }
    
    .badge-active {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }
    
    .badge-inactive {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
    }
    
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    
    .btn-action {
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.85rem;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        white-space: nowrap;
    }
    
    .btn-deactivate {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
        box-shadow: 0 2px 8px rgba(245, 158, 11, 0.3);
    }
    
    .btn-deactivate:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(245, 158, 11, 0.4);
    }
    
    .btn-activate {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3);
    }
    
    .btn-activate:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
    }
    
    .btn-delete {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
        box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
    }
    
    .btn-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
    }
    
    .approver-info {
        font-size: 0.85rem;
    }
    
    .approver-date {
        color: #94a3b8;
        font-size: 0.75rem;
        display: block;
        margin-top: 0.25rem;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: #64748b;
    }
    
    .empty-state-icon {
        font-size: 4rem;
        margin-bottom: 1.5rem;
        opacity: 0.5;
    }
    
    .empty-state h5 {
        color: #334155;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .pagination-wrapper {
        padding: 1.5rem 2rem;
        background: #f8fafc;
        border-top: 2px solid #e2e8f0;
        display: flex;
        justify-content: center;
    }
    
    @media (max-width: 768px) {
        .header-content {
            flex-direction: column;
            align-items: stretch;
        }
        
        .header-left h1 {
            font-size: 2rem;
        }
        
        .btn-back {
            width: 100%;
            justify-content: center;
        }
        
        .table-modern {
            font-size: 0.85rem;
        }
        
        .table-modern thead th,
        .table-modern tbody td {
            padding: 0.75rem 0.5rem;
        }
        
        .action-buttons {
            flex-direction: column;
        }
        
        .btn-action {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<div class="page-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="header-content">
                <div class="header-left">
                    <h1>All Users</h1>
                    <p>Manage all registered users and their permissions</p>
                </div>
                <a href="<?php echo e(route('admin.users.index')); ?>" class="btn-back">
                    Back to Dashboard
                </a>
            </div>
        </div>

        <!-- Users Table Card -->
        <div class="content-card">
            <div class="card-header-custom">
                Registered Users
            </div>

            <?php if($users->count() > 0): ?>
                <div class="table-container">
                    <table class="table-modern">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Active</th>
                                <th>Registered</th>
                                <th>Approved By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <span class="user-icon">👤</span>
                                        <strong><?php echo e($user->name); ?></strong>
                                    </td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td>
                                        <span class="badge-custom badge-role">
                                            🎭 <?php echo e($user->role->display_name); ?>

                                        </span>
                                    </td>
                                    <td>
                                        <?php if($user->is_approved): ?>
                                            <span class="badge-custom badge-approved">
                                                ✓ Approved
                                            </span>
                                        <?php else: ?>
                                            <span class="badge-custom badge-pending">
                                                ⏱️ Pending
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($user->is_active): ?>
                                            <span class="badge-custom badge-active">
                                                ✓ Active
                                            </span>
                                        <?php else: ?>
                                            <span class="badge-custom badge-inactive">
                                                ✕ Inactive
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($user->created_at->format('M d, Y')); ?></td>
                                    <td>
                                        <?php if($user->approver): ?>
                                            <div class="approver-info">
                                                <strong><?php echo e($user->approver->name); ?></strong>
                                                <span class="approver-date"><?php echo e($user->approved_at->format('M d, Y')); ?></span>
                                            </div>
                                        <?php else: ?>
                                            <span style="color: #94a3b8;">-</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="action-buttons">
                                            <!-- Toggle Active/Inactive -->
                                            <?php if($user->is_active): ?>
                                                <form action="<?php echo e(route('admin.users.deactivate', $user)); ?>" method="POST" style="margin: 0;">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn-action btn-deactivate">
                                                        🚫 Deactivate
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <form action="<?php echo e(route('admin.users.activate', $user)); ?>" method="POST" style="margin: 0;">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn-action btn-activate">
                                                        ✓ Activate
                                                    </button>
                                                </form>
                                            <?php endif; ?>

                                            <!-- Delete -->
                                            <form action="<?php echo e(route('admin.users.delete', $user)); ?>" method="POST" style="margin: 0;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn-action btn-delete">
                                                    🗑️ Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <?php if($users->hasPages()): ?>
                    <div class="pagination-wrapper">
                        <?php echo e($users->links()); ?>

                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="empty-state">
                    <div class="empty-state-icon">👥</div>
                    <h5>No Users Found</h5>
                    <p>No users have been registered yet.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\users\pengguna.blade.php ENDPATH**/ ?>