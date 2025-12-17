<?php $__env->startSection('title', 'Pending Users'); ?>

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
        content: '⏱️ ';
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
    
    .alert-success-custom {
        background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
        border: 2px solid #10b981;
        color: #065f46;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        margin-bottom: 1.5rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        animation: slideInRight 0.5s ease;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.2);
    }
    
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .alert-success-custom::before {
        content: '✅';
        font-size: 1.5rem;
    }
    
    .btn-close-custom {
        background: transparent;
        border: none;
        color: #065f46;
        font-size: 1.5rem;
        cursor: pointer;
        margin-left: auto;
        padding: 0;
        line-height: 1;
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }
    
    .btn-close-custom:hover {
        opacity: 1;
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
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
        padding: 1.5rem 2rem;
        font-weight: 600;
        font-size: 1.2rem;
        position: relative;
        overflow: hidden;
    }
    
    .card-header-custom::before {
        content: '⏳ ';
        margin-right: 0.5rem;
    }
    
    .card-header-custom::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 70%);
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
        border-bottom: 3px solid #f59e0b;
        white-space: nowrap;
    }
    
    .table-modern thead th.text-center {
        text-align: center;
    }
    
    .table-modern tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }
    
    .table-modern tbody tr:hover {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        transform: scale(1.01);
        box-shadow: 0 2px 8px rgba(245, 158, 11, 0.15);
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
    
    .table-modern tbody td.text-center {
        text-align: center;
    }
    
    .user-icon {
        margin-right: 0.5rem;
        color: #64748b;
    }
    
    .badge-role {
        background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        color: white;
        padding: 0.4rem 0.875rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.8rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    .badge-role::before {
        content: '🎭';
    }
    
    .action-buttons {
        display: inline-flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .btn-action {
        padding: 0.5rem 1.25rem;
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
    
    .btn-approve {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3);
    }
    
    .btn-approve:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
    }
    
    .btn-approve::before {
        content: '✓';
        font-size: 1rem;
        font-weight: bold;
    }
    
    .btn-reject {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
        box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
    }
    
    .btn-reject:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
    }
    
    .btn-reject::before {
        content: '✕';
        font-size: 1rem;
        font-weight: bold;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: #64748b;
    }
    
    .empty-state-icon {
        font-size: 4rem;
        margin-bottom: 1.5rem;
        animation: bounce 2s ease-in-out infinite;
    }
    
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    
    .empty-state h5 {
        color: #10b981;
        font-weight: 700;
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
    }
    
    .empty-state p {
        color: #64748b;
    }
    
    .pagination-wrapper {
        padding: 1.5rem 2rem;
        background: #f8fafc;
        border-top: 2px solid #e2e8f0;
        display: flex;
        justify-content: center;
    }
    
    .pending-count-badge {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
        font-size: 0.875rem;
        font-weight: 700;
        margin-left: 0.5rem;
        display: inline-block;
        animation: pulse-badge 2s ease-in-out infinite;
    }
    
    @keyframes pulse-badge {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 0 0 10px rgba(239, 68, 68, 0);
        }
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
                    <h1>Pending Users</h1>
                    <p>Review and approve new user registrations</p>
                </div>
                <a href="<?php echo e(route('admin.users.index')); ?>" class="btn-back">
                    Back to Dashboard
                </a>
            </div>
        </div>

        <!-- Success Alert -->
        <?php if(session('success')): ?>
            <div class="alert-success-custom">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close-custom" onclick="this.parentElement.style.display='none'">×</button>
            </div>
        <?php endif; ?>

        <!-- Pending Users Table Card -->
        <div class="content-card">
            <div class="card-header-custom">
                Users Awaiting Approval
                <?php if($users->count() > 0): ?>
                    <span class="pending-count-badge"><?php echo e($users->count()); ?></span>
                <?php endif; ?>
            </div>

            <?php if($users->count() > 0): ?>
                <div class="table-container">
                    <table class="table-modern">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Registered</th>
                                <th class="text-center">Actions</th>
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
                                        <span class="badge-role"><?php echo e($user->role->display_name); ?></span>
                                    </td>
                                    <td><?php echo e($user->created_at->format('M d, Y')); ?></td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <form method="POST" action="<?php echo e(route('admin.approve-user', $user)); ?>" style="margin: 0;">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn-action btn-approve" 
                                                        onclick="return confirm('Approve this user?')">
                                                    Approve
                                                </button>
                                            </form>
                                            <form method="POST" action="<?php echo e(route('admin.reject-user', $user)); ?>" style="margin: 0;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn-action btn-reject" 
                                                        onclick="return confirm('Reject and delete this user? This action cannot be undone.')">
                                                    Reject
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
                    <div class="empty-state-icon">✅</div>
                    <h5>No Pending Users</h5>
                    <p>All users have been processed. Great job!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views\admin\users\verifikasi.blade.php ENDPATH**/ ?>