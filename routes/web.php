<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [NoteController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/notes/appearance', [NoteController::class, 'changeAppearance'])->name('notes.appearance');
    Route::get('/notes/put-archived/{id}', [NoteController::class, 'putArchived'])->name('notes.put-archived');
    Route::get('/notes/archived', [NoteController::class, 'archived'])->name('notes.archived');
    Route::resource('notes', NoteController::class);
});
require __DIR__.'/auth.php';
