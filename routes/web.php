<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;


Route::get('/', function () {
    return view('home');
});

Route::get('/main', function () {
    return view('home');
});

Route::get('/dashboard', [SantriController::class, 'index'])->name('dashboard');
Route::get('/tambah', [SantriController::class, 'create'])->name('create');
Route::post('/submit', [SantriController::class, 'store'])->name('submit');

Route::get('/update/{id}', [SantriController::class, 'edit'])->name('update');
Route::post('/update-sukses/{id}', [SantriController::class, 'update'])->name('update-sukses');
Route::get('/delete-santri/{id}', [SantriController::class, 'destroy'])->name('delete-santri');
