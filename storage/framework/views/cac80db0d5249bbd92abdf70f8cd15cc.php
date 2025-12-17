<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .login-page {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #1E3A8A 0%, #3B82F6 50%);
        padding: 20px;
    }

    .login-container {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
        border-radius: 15px;
        padding: 40px;
        width: 100%;
        max-width: 400px;
        text-align: center;
        box-shadow: 0 8px 24px rgba(0,0,0,0.2);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .login-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.25);
    }

    .logo-circle {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        background: rgba(255,255,255,0.12);
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 25px;
        backdrop-filter: blur(8px);
        animation: glow 3s infinite alternate ease-in-out;
    }

    .logo-circle img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }

    .logo-circle:hover {
        animation: none;
        box-shadow: 0 0 35px rgba(59,130,246,0.9), 0 0 70px rgba(59,130,246,0.6);
        transition: box-shadow 0.3s ease;
    }

    @keyframes glow {
        0% {
            box-shadow: 0 0 10px rgba(59,130,246,0.4);
        }
        100% {
            box-shadow: 0 0 25px rgba(59,130,246,0.8), 0 0 50px rgba(59,130,246,0.5);
        }
    }   

    .login-container h2 {
        color: white;
        margin-bottom: 25px;
        font-weight: 500;
        font-size: 24px;
    }

    .login-container h3 {
        color: white;
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: 500;
    }

    .input-group-custom {
        text-align: left;
        margin-bottom: 15px;
    }

    .input-group-custom label {
        display: block;
        color: white;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .input-group-custom input {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: none;
        outline: none;
        font-size: 14px;
    }

    .input-group-custom input.is-invalid {
        border: 2px solid #ff4444;
    }

    .invalid-feedback {
        color: #ffcccc;
        font-size: 12px;
        margin-top: 5px;
        text-align: left;
    }

    .alert {
        background: rgba(255, 68, 68, 0.2);
        border: 1px solid rgba(255, 68, 68, 0.5);
        border-radius: 8px;
        padding: 12px;
        margin-bottom: 20px;
    }

    .alert ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .alert li {
        color: #ffcccc;
        font-size: 13px;
        text-align: left;
    }

    .forgot {
        text-align: right;
        margin-bottom: 20px;
    }

    .forgot a {
        font-size: 13px;
        color: #fff;
        text-decoration: none;
    }

    .forgot a:hover {
        text-decoration: underline;
    }

    .remember-me {
        text-align: left;
        margin-bottom: 15px;
    }

    .remember-me label {
        color: white;
        font-size: 13px;
        cursor: pointer;
    }

    .remember-me input[type="checkbox"] {
        margin-right: 5px;
        cursor: pointer;
    }

    .btn-login {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        background: #0b3d91;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-login:hover {
        background: #062c6a;
    }

    .signup {
        margin-top: 20px;
        font-size: 13px;
        color: white;
    }

    .signup a {
        color: #e0f2ff;
        text-decoration: none;
        font-weight: 500;
    }

    .signup a:hover {
        text-decoration: underline;
    }
    .back-home {
    text-align: center;
    margin-bottom: 15px;
    }

    .btn-back-home {
        color: #e0f2ff;
        text-decoration: none;
        font-size: 14px;
        padding: 8px 12px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
        transition: 0.3s;
    }

    .btn-back-home:hover {
        background: rgba(255, 255, 255, 0.35);
        color: white;
    }

</style>

<div class="login-page">
    <div class="login-container">
        <div class="logo-circle">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo UMKM PWM DIY">
        </div>
        
        <h2>LP UMKM PWM DIY</h2>
        <h3>Login</h3>

        
        <?php if($errors->any()): ?>
            <div class="alert">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="input-group-custom">
                <label for="email">Email</label>
                <input id="email" type="email" 
                       class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       name="email" 
                       value="<?php echo e(old('email')); ?>" 
                       placeholder="username@gmail.com" 
                       required 
                       autofocus>
                <?php $__errorArgs = ['email'];
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

            <div class="input-group-custom">
                <label for="password">Password</label>
                <input id="password" type="password" 
                       class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       name="password" 
                       placeholder="Password" 
                       required>
                <?php $__errorArgs = ['password'];
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

            <div class="remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember Me</label>
            </div>

            <?php if(Route::has('password.request')): ?>
                <div class="forgot">
                    <a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
                </div>
            <?php endif; ?>

            <button type="submit" class="btn-login">Sign in</button>

            <div class="signup">
                Belum punya akun? 
                <a href="<?php echo e(route('register')); ?>">Daftar Disini</a>
            </div>
        </form>
        <div class="back-home" style="margin-top: 15px;">
            <a href="<?php echo e(url('/')); ?>" class="btn-back-home">
                ← Kembali ke Home
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/auth/login.blade.php ENDPATH**/ ?>