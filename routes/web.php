<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () { return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(UserController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/users', 'store')->name('store');
    Route::get('/users/create', 'create')->name('create');
    Route::get('/users/{post}', 'show')->name('show');
    Route::put('/users/{post}', 'update')->name('update');
    Route::delete('/users/{post}', 'delete')->name('delete');
    Route::get('/users/{post}/edit', 'edit')->name('edit');
    // Route::get('/posts/{')

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
