<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::get('/users/{id}',[UserController::class,'show'])->where('id','[0-9]+')->name('users.show');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::get('/posts/{id}',[PostController::class,'show'])->where('id','[0-9]+')->name('posts.show');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/{id}',[PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{id}',[PostController::class,'destroy'])->name('posts.destroy');

Route::fallback(function(){
return 'Not found';
});