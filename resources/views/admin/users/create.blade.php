@extends('layouts.app')

@section('title', 'Add New User')

@section('content')
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
        content: '👤 ';
    }
    
    .page-subtitle {
        color: black;
        font-size: 1.5rem;
        font-weight: 400;
    }
    
    .form-container {
        max-width: 700px;
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
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .form-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
    }
    
    .card-header-custom {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        color: white;
        padding: 1.75rem 2rem;
        font-weight: 600;
        font-size: 1.3rem;
        position: relative;
        overflow: hidden;
    }
    
    .card-header-custom::before {
        content: '✨ ';
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
    
    .card-body-custom {
        padding: 2.5rem;
    }
    
    .form-section {
        margin-bottom: 1.5rem;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
    
    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
    }
    
    .form-label {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 0.65rem;
        font-size: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .form-label::after {
        content: ' *';
        color: #ef4444;
    }
    
    .label-icon {
        font-size: 1.1rem;
    }
    
    .input-wrapper {
        position: relative;
    }
    
    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        color: #9ca3af;
        pointer-events: none;
        z-index: 1;
        transition: all 0.3s ease;
    }
    
    .form-control-modern {
        width: 100%;
        padding: 0.875rem 1rem 0.875rem 3rem;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }
    
    .form-control-modern:focus {
        outline: none;
        border-color: #2a5298;
        background: white;
        box-shadow: 0 0 0 4px rgba(42, 82, 152, 0.1);
    }
    
    .form-control-modern:focus + .input-icon {
        color: #2a5298;
        transform: translateY(-50%) scale(1.1);
    }
    
    .form-control-modern::placeholder {
        color: #cbd5e0;
    }
    
    select.form-control-modern {
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239ca3af' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
    }
    
    .password-toggle {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 1.2rem;
        color: #9ca3af;
        z-index: 2;
        transition: color 0.3s ease;
        user-select: none;
    }
    
    .password-toggle:hover {
        color: #2a5298;
    }
    
    .form-control-modern.has-toggle {
        padding-right: 3rem;
    }
    
    .divider {
        height: 2px;
        background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
        margin: 2rem 0;
    }
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2.5rem;
        padding-top: 2rem;
        border-top: 2px solid #e2e8f0;
    }
    
    .btn-save {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border: none;
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    
    .btn-save::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }
    
    .btn-save:hover::before {
        width: 300px;
        height: 300px;
    }
    
    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        color: white;
    }
    
    .btn-save span {
        position: relative;
        z-index: 1;
    }
    
    .btn-save span::before {
        content: '💾 ';
        margin-right: 0.5rem;
    }
    
    .btn-cancel {
        background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        border: none;
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(107, 114, 128, 0.3);
        text-decoration: none;
        display: inline-block;
        position: relative;
        overflow: hidden;
    }
    
    .btn-cancel::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }
    
    .btn-cancel:hover::before {
        width: 300px;
        height: 300px;
    }
    
    .btn-cancel:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(107, 114, 128, 0.4);
        color: white;
    }
    
    .btn-cancel span {
        position: relative;
        z-index: 1;
    }
    
    .btn-cancel span::before {
        content: '◀️ ';
        margin-right: 0.5rem;
    }
    
    .helper-text {
        font-size: 0.85rem;
        color: #718096;
        margin-top: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }
    
    .helper-text::before {
        content: 'ℹ️';
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
            <h1>Add New User</h1>
            <div class="page-subtitle">Create a new user account with role assignment</div>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <div class="form-card">
                <!-- Card Header -->
                <div class="card-header-custom">
                    User Registration Form
                </div>

                <!-- Card Body -->
                <div class="card-body-custom">
                    <form action="{{ route('admin.users.store') }}" method="POST" novalidate>
                        @csrf

                        <!-- Personal Information -->
                        <div class="form-section">
                            <div class="form-group">
                                <label class="form-label">
                                    <span class="label-icon">👤</span>
                                    <span>Name</span>
                                </label>
                                <div class="input-wrapper">
                                    <input 
                                        type="text" 
                                        name="name" 
                                        class="form-control-modern" 
                                        value="{{ old('name') }}" 
                                        placeholder="Enter full name"
                                        required
                                    >
                                    <div class="input-icon">👤</div>
                                </div>
                                <small class="helper-text">Full name of the user</small>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    <span class="label-icon">📧</span>
                                    <span>Email</span>
                                </label>
                                <div class="input-wrapper">
                                    <input 
                                        type="email" 
                                        name="email" 
                                        class="form-control-modern" 
                                        value="{{ old('email') }}" 
                                        placeholder="user@example.com"
                                        required
                                    >
                                    <div class="input-icon">📧</div>
                                </div>
                                <small class="helper-text">Valid email address for login</small>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <!-- Security Information -->
                        <div class="form-section">
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span class="label-icon">🔒</span>
                                        <span>Password</span>
                                    </label>
                                    <div class="input-wrapper">
                                        <input 
                                            type="password" 
                                            id="password"
                                            name="password" 
                                            class="form-control-modern has-toggle" 
                                            placeholder="Enter password"
                                            required
                                        >
                                        <div class="input-icon">🔒</div>
                                        <div class="password-toggle" onclick="togglePassword('password', this)">👁️</div>
                                    </div>
                                    <small class="helper-text">Minimum 8 characters</small>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        <span class="label-icon">🔐</span>
                                        <span>Confirm Password</span>
                                    </label>
                                    <div class="input-wrapper">
                                        <input 
                                            type="password" 
                                            id="password_confirmation"
                                            name="password_confirmation" 
                                            class="form-control-modern has-toggle" 
                                            placeholder="Re-enter password"
                                            required
                                        >
                                        <div class="input-icon">🔐</div>
                                        <div class="password-toggle" onclick="togglePassword('password_confirmation', this)">👁️</div>
                                    </div>
                                    <small class="helper-text">Must match password</small>
                                </div>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <!-- Role Assignment -->
                        <div class="form-section">
                            <div class="form-group">
                                <label class="form-label">
                                    <span class="label-icon">🎭</span>
                                    <span>Role</span>
                                </label>
                                <div class="input-wrapper">
                                    <select name="role_id" class="form-control-modern" required>
                                        <option value="" disabled selected>Select user role</option>
                                        @foreach(\App\Models\Role::all() as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-icon">🎭</div>
                                </div>
                                <small class="helper-text">Assign role to define user permissions</small>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="form-actions">
                            <button type="submit" class="btn-save">
                                <span>Save User</span>
                            </button>
                            <a href="{{ route('admin.users.index') }}" class="btn-cancel">
                                <span>Cancel</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword(inputId, icon) {
        const input = document.getElementById(inputId);
        if (input.type === 'password') {
            input.type = 'text';
            icon.textContent = '🙈';
        } else {
            input.type = 'password';
            icon.textContent = '👁️';
        }
    }
</script>
@endsection