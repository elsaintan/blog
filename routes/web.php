<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'post'], function () {
    Route::get('/', [AdminPostController::class, 'index'])->name('post.index');
    Route::get('/create', [AdminPostController::class, 'create'])->name('post.create');
    Route::post('/create', [AdminPostController::class, 'store'])->name('post.store');
    Route::get('/{id}/show', [AdminPostController::class, 'show'])->name('post.show');
    Route::get('/{id}/edit', [AdminPostController::class, 'edit'])->name('post.edit');
    Route::put('/{id}/update', [AdminPostController::class, 'update'])->name('post.update');
    Route::get('/{id}/delete', [AdminPostController::class, 'destroy'])->name('post.destroy');

});

Route::get('/author', [App\Http\Controllers\AuthorPostController::class, 'index'])->name('author');
Route::get('/author', [App\Http\Controllers\AuthorPostController::class, 'create'])->name('author.create');
Route::get('/author', [App\Http\Controllers\AuthorPostController::class, 'store'])->name('author.store');
