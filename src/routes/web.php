<?php

use App\Http\Controllers\CatatanController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
    Route::get('catatan', [CatatanController::class, 'index'])->name('catatan.index');
});

require __DIR__ . '/settings.php';
