<?php

use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KegiatanController::class, 'index'])->name('index');

// route tampilan data
Route::get('/data', [KegiatanController::class, 'data'])->name('data');
Route::get('/kegiatan/detail/{kegiatan}', [KegiatanController::class, 'detail'])->name('kegiatan.detail');

// route formulir
Route::get('kegiatan/form', [KegiatanController::class, 'create'])->name('kegiatan.form');
Route::post('/kegiatan/form', [KegiatanController::class, 'store'])->name('kegiatan.store');

// route delete
Route::delete('/kegiatan/{kegiatan}',[KegiatanController::class, 'destroy'])->name('kegiatan.destroy');

// route edit

Route::get('/kegiatan/{kegiatan}',[KegiatanController::class, 'edit'])->name('kegiatan.edit');
Route::put('/kegiatan/{kegiatan}',[KegiatanController::class, 'update'])->name('kegiatan.update');


