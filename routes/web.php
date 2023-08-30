<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContatoController;

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

Route::get('/contato', function () {
    return view('contato');
})->middleware(['auth', 'verified'])->name('contato');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/*-----------------------------------------------*/
Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::put('/posts/{id}/udpate', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
/*-----------------------------------------------*/
Route::get('/pages/index', [PageController::class, 'index'])->name('pages.index');
Route::get('/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::post('/pages/store', [PageController::class, 'store'])->name('pages.store');
Route::get('/pages/{id}/show', [PageController::class, 'show'])->name('pages.show');
Route::get('/pages/{id}/edit', [PageController::class, 'edit'])->name('pages.edit');
Route::put('/pages/{id}/udpate', [PageController::class, 'update'])->name('pages.update');
Route::delete('/pages/{id}/delete', [PageController::class, 'destroy'])->name('pages.destroy');
/*-----------------------------------------------*/
Route::get('/contato/index', [ContatoController::class, 'store'])->name('contato.store');
Route::get('/contato/create', [ContatoController::class, 'create'])->name('contato.create');
Route::get('/contato/{id}/show', [ContatoController::class, 'show'])->name('contato.show');
Route::get('/contato/{id}/edit', [ContatoController::class, 'edit'])->name('contato.edit');
Route::put('/contato/{id}/udpate', [ContatoController::class, 'update'])->name('contato.update');
Route::delete('/contato/{id}/delete', [ContatoController::class, 'destroy'])->name('contato.destroy');

require __DIR__.'/auth.php';
