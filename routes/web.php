<?php

use Illuminate\Support\Facades\Route;

// =====================================================
// 📦 IMPORT CONTROLLERS
// =====================================================

// No Auth
use App\Http\Controllers\NoAuth\HomeController;
use App\Http\Controllers\NoAuth\PublicUmkmController;
use App\Http\Controllers\NoAuth\PublicPengurusController;
use App\Http\Controllers\NoAuth\PublicNewsController;
use App\Http\Controllers\NoAuth\PublicLowonganController;
use App\Http\Controllers\NoAuth\PublicRegulasiController;

// Admin
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
use App\Http\Controllers\Admin\DivisiController;

// User
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;


// =====================================================
// 🌐 PUBLIC ROUTES (TANPA LOGIN)
// =====================================================
Route::get('/', [HomeController::class, 'index'])->name('home');

// UMKM
Route::get('/umkm', [PublicUmkmController::class, 'index'])->name('noauth.umkm.index');

// Pengurus
Route::get('/pengurus', [PublicPengurusController::class, 'index'])->name('noauth.pengurus.index');

// Berita
Route::get('/news', [PublicNewsController::class, 'index'])->name('noauth.news.index');
Route::get('/news/all', [PublicNewsController::class, 'all'])->name('noauth.news.all');
Route::get('/news/{id}', [PublicNewsController::class, 'show'])->name('noauth.news.show');

// Regulasi
Route::prefix('regulasi')->name('noauth.regulasi.')->group(function () {
    Route::get('/', [PublicRegulasiController::class, 'index'])->name('index');
    Route::get('/{id}', [PublicRegulasiController::class, 'show'])->name('show');
});

// Lowongan
Route::prefix('lowongan')->name('noauth.lowongan.')->group(function () {
    Route::get('/', [PublicLowonganController::class, 'index'])->name('index');
    Route::get('/{lowongan}', [PublicLowonganController::class, 'show'])->name('show');
});

// Status Registrasi
Route::get('/pending-approval', [HomeController::class, 'pendingApproval'])->name('pending-approval');
Route::get('/registration-success', [HomeController::class, 'registrationSuccess'])->name('registration-success');


// =====================================================
// 🔐 AUTH ROUTES
// =====================================================
require __DIR__ . '/auth.php';


// =====================================================
// 👤 PROFILE ROUTES
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

        // =================================================
        // 🔹 UMKM SPECIAL ROUTES (HARUS DI ATAS RESOURCE)
        // =================================================
        Route::get('/umkm/export', [UmkmController::class, 'export'])->name('umkm.export');
        Route::post('/umkm/import', [UmkmController::class, 'import'])->name('umkm.import');
        Route::patch('/umkm/{umkm}/toggle', [UmkmController::class, 'toggleActive'])->name('umkm.toggle');
        Route::patch('/umkm/toggle-mass', [UmkmController::class, 'toggleMass'])->name('umkm.toggle-mass');

        // =================================================
        // CRUD RESOURCES
        // =================================================
        Route::resources([
            'kategori'   => KategoriController::class,
            'daerah'     => DaerahController::class,
            'umkm'       => UmkmController::class,
            'news'       => NewsController::class,
            'penguruses' => PengurusController::class,
            'sektor'     => SektorController::class,
            'lowongan'   => LowonganController::class,
            'regulasi'   => RegulasiController::class,
            'divisi'     => DivisiController::class,
        ]);

        // Upload sementara
        Route::post('/news/upload-temp', [NewsController::class, 'uploadTemp'])->name('news.upload.temp');
        Route::post('/pengurus/upload-temp', [PengurusController::class, 'uploadTemp'])->name('pengurus.upload.temp');

        // Lowongan
        Route::get('/lowongan-history', [LowonganController::class, 'history'])->name('lowongan.history');

        // =================================================
        // 👥 USER MANAGEMENT
        // =================================================
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', [UserAksesController::class, 'index'])->name('index');
            Route::get('/pending', [UserAksesController::class, 'pendingUsers'])->name('pending');
            Route::get('/all', [UserAksesController::class, 'allUsers'])->name('all');

            Route::get('/create', [UserAksesController::class, 'create'])->name('create');
            Route::post('/', [UserAksesController::class, 'store'])->name('store');

            Route::get('/{user}/edit', [UserAksesController::class, 'edit'])->name('edit');
            Route::put('/{user}', [UserAksesController::class, 'update'])->name('update');

            Route::post('/{user}/approve', [UserAksesController::class, 'approveUser'])->name('approve');
            Route::delete('/{user}/reject', [UserAksesController::class, 'rejectUser'])->name('reject');
            Route::post('/{user}/activate', [UserAksesController::class, 'activateUser'])->name('activate');
            Route::post('/{user}/deactivate', [UserAksesController::class, 'deactivateUser'])->name('deactivate');
            Route::delete('/{user}', [UserAksesController::class, 'deleteUser'])->name('delete');
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
