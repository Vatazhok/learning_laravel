<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\EventController::class, 'index']);
Route::get('/category/{slug}', [\App\Http\Controllers\EventController::class, 'getPostsByCategory'])->name('getPostsByCategory');
Route::get('/category/{slug_category}/{slug_post}', [\App\Http\Controllers\EventController::class, 'getPost'])->name('getPost');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::put('/home', [App\Http\Controllers\HomeController::class, 'update'])->name('homeUpdate');


Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');


    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('post', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('comment', \App\Http\Controllers\Admin\CommentController::class);
});
