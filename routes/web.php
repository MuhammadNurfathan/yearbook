<?php

use App\Http\Controllers\WEB\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/prodi/{id}', function () {
    return view('prodi.show');
});
Route::get('/mahasiswa/create', function () {
    return view('mahasiswa.create');
});
Route::get('/mahasiswa/{id}', function ($id) {
    return view('mahasiswa.show', compact('id'));
})->where('id', '[0-9]+');

