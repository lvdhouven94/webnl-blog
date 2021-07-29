<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;

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

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{blog:slug}/comments', [CommentController::class, 'store'])->name('blog.comment.store');

