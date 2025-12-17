@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e3c72 100%) !important;
        min-height: 100vh;
    }
    
    .profile-wrapper {
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
        content: '👤 ';
    }
    
    .page-subtitle {
        color: black;
        font-size: 1.5rem;
    }
    
    .profile-sections {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .profile-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }
    
    .profile-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
    }
    
    .card-header-custom {
        padding: 1.5rem;
        border-bottom: 2px solid #e2e8f0;
    }
    
    .card-header-custom.primary {
        background: linear-gradient(135deg, rgba(42, 82, 152, 0.05) 0%, rgba(30, 60, 114, 0.05) 100%);
    }
    
    .card-header-custom.warning {
        background: linear-gradient(135deg, rgba(245, 158, 11, 0.05) 0%, rgba(217, 119, 6, 0.05) 100%);
    }
    
    .card-header-custom.danger {
        background: linear-gradient(135deg, rgba(239, 68, 68, 0.05) 0%, rgba(220, 38, 38, 0.05) 100%);
    }
    
    .card-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #2d3748;
        margin: 0 0 0.5rem 0;
    }
    
    .card-title.primary::before {
        content: 'ℹ️ ';
        margin-right: 0.5rem;
    }
    
    .card-title.warning::before {
        content: '🔒 ';
        margin-right: 0.5rem;
    }
    
    .card-title.danger {
        color: #ef4444;
    }
    
    .card-title.danger::before {
        content: '⚠️ ';
        margin-right: 0.5rem;
    }
    
    .card-description {
        color: #718096;
        font-size: 0.95rem;
        margin: 0;
    }
    
    .card-body-custom {
        padding: 2rem;
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
    
    .text-danger {
        color: #ef4444;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        display: block;
    }
    
    .text-danger::before {
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
    
    .input-icon.icon-name::before {
        content: '👤';
    }
    
    .input-icon.icon-email::before {
        content: '📧';
    }
    
    .input-icon.icon-password::before {
        content: '🔐';
    }
    
    .input-icon input {
        padding-left: 3rem;
    }
    
    .btn-save {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        border: none;
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        cursor: pointer;
    }
    
    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
        color: white;
    }
    
    .btn-save::before {
        content: '💾 ';
        margin-right: 0.5rem;
    }
    
    .btn-delete {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        cursor: pointer;
    }
    
    .btn-delete:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(239, 68, 68, 0.4);
        color: white;
    }
    
    .btn-delete::before {
        content: '🗑️ ';
        margin-right: 0.5rem;
    }
    
    .success-message {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #10b981;
        font-weight: 600;
        margin-left: 1rem;
        padding: 0.5rem 1rem;
        background: #f0fdf4;
        border-radius: 8px;
        animation: slideIn 0.3s ease-out;
    }
    
    .success-message::before {
        content: '✅';
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .form-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-top: 1.5rem;
    }
    
    .alert-box {
        background: #fef3c7;
        border-left: 4px solid #f59e0b;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }
    
    .alert-box::before {
        content: '💡 ';
        font-size: 1.2rem;
        margin-right: 0.5rem;
    }
    
    .alert-box p {
        margin: 0;
        color: #92400e;
        font-size: 0.9rem;
    }
    
    .danger-alert-box {
        background: #fee2e2;
        border-left: 4px solid #ef4444;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }
    
    .danger-alert-box::before {
        content: '🚨 ';
        font-size: 1.2rem;
        margin-right: 0.5rem;
    }
    
    .danger-alert-box p {
        margin: 0;
        color: #991b1b;
        font-size: 0.9rem;
        font-weight: 500;
    }
</style>

<div class="profile-wrapper">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>My Profile</h1>
            <div class="page-subtitle">Kelola informasi profil dan keamanan akun Anda</div>
        </div>

        <div class="profile-sections">
            {{-- Profile Information --}}
            <div class="profile-card">
                <div class="card-header-custom primary">
                    <h5 class="card-title primary">Profile Information</h5>
                    <p class="card-description">Update your account's profile information and email address.</p>
                </div>
                <div class="card-body-custom">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-icon icon-name">
                                <input id="name" 
                                       name="name" 
                                       type="text" 
                                       class="form-control-modern" 
                                       value="{{ old('name', $user->name) }}" 
                                       required
                                       placeholder="Enter your full name">
                            </div>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-icon icon-email">
                                <input id="email" 
                                       name="email" 
                                       type="email" 
                                       class="form-control-modern" 
                                       value="{{ old('email', $user->email) }}" 
                                       required
                                       placeholder="Enter your email address">
                            </div>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-save">Save Changes</button>
                            @if (session('status') === 'profile-updated')
                                <span class="success-message">Saved successfully!</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            {{-- Update Password --}}
            <div class="profile-card">
                <div class="card-header-custom warning">
                    <h5 class="card-title warning">Update Password</h5>
                    <p class="card-description">Ensure your account is using a long, random password to stay secure.</p>
                </div>
                <div class="card-body-custom">
                    <div class="alert-box">
                        <p>Gunakan password minimal 8 karakter dengan kombinasi huruf, angka, dan simbol untuk keamanan maksimal.</p>
                    </div>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="current_password" class="form-label">Current Password</label>
                            <div class="input-icon icon-password">
                                <input id="current_password" 
                                       name="current_password" 
                                       type="password" 
                                       class="form-control-modern"
                                       placeholder="Enter current password">
                            </div>
                            @error('current_password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">New Password</label>
                            <div class="input-icon icon-password">
                                <input id="password" 
                                       name="password" 
                                       type="password" 
                                       class="form-control-modern"
                                       placeholder="Enter new password">
                            </div>
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <div class="input-icon icon-password">
                                <input id="password_confirmation" 
                                       name="password_confirmation" 
                                       type="password" 
                                       class="form-control-modern"
                                       placeholder="Confirm new password">
                            </div>
                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-save">Update Password</button>
                            @if (session('status') === 'password-updated')
                                <span class="success-message">Password updated!</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            {{-- Delete Account --}}
            <div class="profile-card">
                <div class="card-header-custom danger">
                    <h5 class="card-title danger">Delete Account</h5>
                    <p class="card-description">Once your account is deleted, all of its resources and data will be permanently deleted.</p>
                </div>
                <div class="card-body-custom">
                    <div class="danger-alert-box">
                        <p>PERINGATAN: Tindakan ini tidak dapat dibatalkan. Semua data Anda akan dihapus secara permanen!</p>
                    </div>

                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('delete')

                        <div class="form-group">
                            <label for="password_delete" class="form-label">Confirm Password</label>
                            <div class="input-icon icon-password">
                                <input id="password_delete" 
                                       name="password" 
                                       type="password" 
                                       class="form-control-modern" 
                                       placeholder="Enter your password to confirm deletion">
                            </div>
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-actions">
                            <button type="submit" 
                                    class="btn-delete"
                                    onclick="return confirm('Are you absolutely sure you want to delete your account? This action cannot be undone!')">
                                Delete Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection