<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::any('/posts/search', [PostController::class,'search'])->name('post.search');
Route::get('/posts/create', [PostController::class,'create'])->name('post.create');
Route::put('/posts/{id}', [PostController::class,'update'])->name('post.update');
Route::get('/posts/edit{id}', [PostController::class,'edit'])->name('post.edit');
Route::delete('/posts/search', [PostController::class,'destroy'])->name('post.destroy');
Route::get('/posts/search', [PostController::class,'show'])->name('post.show');
Route::post('/posts', [PostController::class,'store'])->name('post.store');
Route::get('/posts', [PostController::class,'index'])->name('post.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('srvice');
});
Route::get('/contato', function () {
    return view('contato');
});
require __DIR__.'/auth.php';

