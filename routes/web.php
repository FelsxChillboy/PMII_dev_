<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Pengurus;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    // Ambil semua pengurus yang aktif dari database
    $tim = Pengurus::where('is_active', true)->get();

    // Kirim data $tim ke file welcome.blade.php
    return view('welcome', compact('tim'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute untuk melihat detail berita berdasarkan ID
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

require __DIR__.'/auth.php';
