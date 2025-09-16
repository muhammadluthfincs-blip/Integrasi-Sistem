<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// jika akses root (/), otomatis redirect ke /halo
Route::get('/', function () {
    return redirect('/halo');
});

// route utama untuk halaman halo
Route::get('/halo', [MahasiswaController::class, 'index']);