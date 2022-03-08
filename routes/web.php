<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

    Route::middleware(['auth'])->group(function(){   });
    Route::any('/posts/search', [PostController::class,'search'])->name('post.search');
    Route::get('/posts/create', [PostController::class,'create'])->name('post.create');
    Route::put('/posts/{id}', [PostController::class,'update'])->name('post.update');
    Route::get('/posts/edit{id}', [PostController::class,'edit'])->name('post.edit');
    Route::delete('/posts/{id}', [PostController::class,'destroy'])->name('post.destroy');
    Route::get('/posts/{id}', [PostController::class,'show'])->name('post.show');
    Route::post('/posts', [PostController::class,'store'])->name('post.store');


Route::get('/posts',[PostController::class, 'index'])->name('posts.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function(){
    return view('pages.sobre');
});
Route::get('/service', function () {
    return view('.pages.service');
});
Route::get('/contato', function () {
    return view('.pages.contato');
});

require __DIR__.'/auth.php';

