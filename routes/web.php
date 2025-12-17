<?php

use Illuminate\Support\Facades\Route;

// =========================
// 📦 Import Controllers
// =========================
use App\Http\Controllers\NoAuth\HomeController;
use App\Http\Controllers\NoAuth\PublicUmkmController;
use App\Http\Controllers\NoAuth\PublicPengurusController;
use App\Http\Controllers\NoAuth\PublicNewsController;
use App\Http\Controllers\NoAuth\PublicLowonganController;
use App\Http\Controllers\NoAuth\PublicRegulasiController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PengurusController;
use App\Http\Controllers\Admin\UserAksesController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\DaerahController;
use App\Http\Controllers\Admin\UmkmController;
use App\Http\Controllers\Admin\SektorController;
use App\Http\Controllers\Admin\LowonganController;
use App\Http\Controllers\Admin\RegulasiController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;


// =====================================================
// 🌐 PUBLIC ROUTES (Tanpa Login)
// =====================================================
Route::get('/', [HomeController::class, 'index'])->name('home');

// --- UMKM ---
Route::get('/umkm', [PublicUmkmController::class, 'index'])->name('noauth.umkm.index');

// --- Pengurus ---
Route::get('/pengurus', [PublicPengurusController::class, 'index'])->name('noauth.pengurus.index');

// --- Berita ---
// Route::prefix('news')->name('noauth.news.')->group(function () {
Route::get('/news', [PublicNewsController::class, 'index'])->name('noauth.news.index');
Route::get('/news/all', [PublicNewsController::class, 'all'])->name('noauth.news.all');
Route::get('/news/{id}', [PublicNewsController::class, 'show'])->name('noauth.news.show');
// });

// --- Regulasi ---
Route::prefix('regulasi')->name('noauth.regulasi.')->group(function () {
    Route::get('/', [PublicRegulasiController::class, 'index'])->name('index');
    Route::get('/{id}', [PublicRegulasiController::class, 'show'])->name('show');
});

// --- Lowongan ---
Route::prefix('lowongan')->name('noauth.lowongan.')->group(function () {
    Route::get('/', [PublicLowonganController::class, 'index'])->name('index');
    Route::get('/{lowongan}', [PublicLowonganController::class, 'show'])->name('show');
});

// --- Status setelah registrasi ---
Route::get('/pending-approval', [HomeController::class, 'pendingApproval'])->name('pending-approval');
Route::get('/registration-success', [HomeController::class, 'registrationSuccess'])->name('registration-success');


// =====================================================
// 🔐 AUTH ROUTES
// =====================================================
require __DIR__ . '/auth.php';


// =====================================================
// 👤 PROFILE ROUTES (Auth, Verified, Approved, Active)
// =====================================================
Route::middleware(['auth', 'verified', 'approved', 'active'])
    ->prefix('profile')
    ->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


// =====================================================
// 🛠 ADMIN ROUTES
// =====================================================
Route::middleware(['auth', 'admin', 'active'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // CRUD Resources
        Route::resources([
            'kategori'   => KategoriController::class,
            'daerah'     => DaerahController::class,
            'umkm'       => UmkmController::class,
            'news'       => NewsController::class,
            'penguruses' => PengurusController::class,
            'sektor'     => SektorController::class,
            'lowongan'   => LowonganController::class,
            'regulasi'   => RegulasiController::class,
        ]);

        // Upload sementara
        Route::post('/news/upload-temp', [NewsController::class, 'uploadTemp'])->name('news.upload.temp');
        Route::post('/pengurus/upload-temp', [PengurusController::class, 'uploadTemp'])->name('pengurus.upload.temp');

        // Lowongan
        Route::get('/lowongan-history', [LowonganController::class, 'history'])->name('lowongan.history');

        // Toggle status UMKM
        Route::patch('/umkm/{umkm}/toggle', [UmkmController::class, 'toggleActive'])->name('umkm.toggle');
        Route::patch('/umkm/toggle-mass', [UmkmController::class, 'toggleMass'])->name('umkm.toggle-mass');

        // --- User Management ---
        Route::prefix('users')->group(function () {
            Route::get('/', [UserAksesController::class, 'index'])->name('users.index');
            Route::get('/pending', [UserAksesController::class, 'pendingUsers'])->name('users.pending');
            Route::get('/all', [UserAksesController::class, 'allUsers'])->name('users.all');

            // Tambah akun
            Route::get('/create', [UserAksesController::class, 'create'])->name('users.create');
            Route::post('/', [UserAksesController::class, 'store'])->name('users.store');

            // Edit akun
            Route::get('/{user}/edit', [UserAksesController::class, 'edit'])->name('users.edit');
            Route::put('/{user}', [UserAksesController::class, 'update'])->name('users.update');

            // Approve / Reject / Activate / Deactivate / Delete
            Route::post('/{user}/approve', [UserAksesController::class, 'approveUser'])->name('approve-user');
            Route::delete('/{user}/reject', [UserAksesController::class, 'rejectUser'])->name('reject-user');
            Route::post('/{user}/activate', [UserAksesController::class, 'activateUser'])->name('users.activate');
            Route::post('/{user}/deactivate', [UserAksesController::class, 'deactivateUser'])->name('users.deactivate');
            Route::delete('/{user}', [UserAksesController::class, 'deleteUser'])->name('users.delete');
        });
    });


// =====================================================
// 👥 USER ROUTES
// =====================================================
Route::middleware(['auth', 'approved', 'active'])
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    });