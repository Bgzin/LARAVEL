<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('register', [UserController::class, 'create'])->name('register');
Route::post('register', [UserController::class, 'store']);
Route::get('register_manager', [GerenteController::class, 'create'])->name('register_manager');

// Rota para processar o envio do formulário
Route::post('register_manager', [GerenteController::class, 'store']);
require __DIR__.'/auth.php';
