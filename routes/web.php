<?php

use App\Http\Controllers\Posts;
use App\Http\Controllers\Cars;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/posts', [Posts::class, 'index'])->name('posts.index');
Route::get('/posts/create', [Posts::class, 'create'])->name('posts.create');
Route::post('/posts', [Posts::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [Posts::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [Posts::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}/update', [Posts::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [Posts::class, 'destroy'])->name('posts.destroy');

Route::resource('cars', Cars::class);