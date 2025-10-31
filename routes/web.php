<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TempatWisataController;
use App\Http\Controllers\TourGuideController;

// Route publik
Route::get('/', function () {
    return view('layout/main');
});
Route::get('/home', function () {
    return view('layout/main');
});
// Login & Registrasi (akses tanpa login)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/registrasi', [AuthController::class, 'showRegister'])->name('register');
Route::post('/registrasi', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Halaman umum/landing
Route::get('/jelajahi', function () { return view('screens/petawisata'); });
Route::get('/tourguide', function () { return view('screens/tourguide'); });
Route::get('/event', function () { return view('screens/event'); });

// Proteksi hanya untuk user login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if($user->role === 'admin') return view('dashboard.admin');
        if($user->role === 'tour_guide') return view('tourguide.dashboard');
        if($user->role === 'tempat_wisata') return view('TempatWisata.dashboard');
        return redirect('/');
    })->name('dashboard');
    // Tempat Wisata CRUD
    Route::prefix('tempatwisata')->middleware(['role:tempat_wisata'])->group(function () {
        Route::get('/', [TempatWisataController::class, 'index'])->name('tempatwisata.index');
        Route::post('/', [TempatWisataController::class, 'store'])->name('tempatwisata.store');
        Route::put('/{tempatwisata}', [TempatWisataController::class, 'update'])->name('tempatwisata.update');
        Route::delete('/{tempatwisata}', [TempatWisataController::class, 'destroy'])->name('tempatwisata.destroy');
    });
    // Tour Guide CRUD Profil
    Route::prefix('tourguide')->middleware(['role:tour_guide'])->group(function () {
        Route::get('/', [TourGuideController::class, 'index'])->name('tourguide.index');
        Route::post('/', [TourGuideController::class, 'store'])->name('tourguide.store');
        Route::put('/{tourguide}', [TourGuideController::class, 'update'])->name('tourguide.update');
        Route::delete('/{tourguide}', [TourGuideController::class, 'destroy'])->name('tourguide.destroy');
    });
    // Datawisata redirect
    Route::get('/datawisata', function() {
        if (Auth::user()->role !== 'tempat_wisata') {
            return redirect('/dashboard')->with('error', 'Unauthorized access.');
        }
        return redirect()->route('tempatwisata.index');
    });
});

// Route lama statis hapus atau comment jika tidak dipakai:
// Route::get('/daftarwisata', ...)
// Route::get('/daftartourguide', ...)
// Route::get('/daftarevent', ...)
