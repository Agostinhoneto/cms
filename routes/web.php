<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/empresa', function () {
    return view('empresa');
})->middleware(['auth', 'verified'])->name('empresa');

Route::get('/paginas', function () {
    return view('paginas');
})->middleware(['auth', 'verified'])->name('paginas');

Route::get('/secoes', function () {
    return view('secoes');
})->middleware(['auth', 'verified'])->name('secoes');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');


Route::get('/', [PageController::class, 'index']);
Route::get('/pages/create', [PageController::class, 'create']);
Route::post('/pages', [PageController::class, 'store']);
Route::get('/pages/{page}', [PageController::class, 'show']);
Route::get('/pages/{page}/edit', [PageController::class, 'edit']);
Route::put('/pages/{page}', [PageController::class, 'update']);
      
require __DIR__.'/auth.php';
