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

Route::get('/todo',[TodoController::class,'view'])->name('todo.view');
Route::get('/todo/create',[TodoController::class,'create'])->name('todo.create');
Route::get('/todo/edit',[TodoController::class,'edit'])->name('todo.edit');

Route::get('/user',[UserController::class,'view'])->name('user.view');

require __DIR__.'/auth.php';
