<?php

use App\Http\Controllers\API\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProdiController;

Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/prodi/{id}', [ProdiController::class, 'show']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);