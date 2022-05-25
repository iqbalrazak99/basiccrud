<?php

use Illuminate\Support\Facades\Route;
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
// Route::resource('/posts', PostController::class);

 
// Route::get('/greeting', function () {
//     return 'Hello World';
// });


Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create']) ->name('posts.create');

Route::get('/posts/destroy', [PostController::class, 'index']) ->name('posts.destroy');

Route::get('/posts/show', [PostController::class, 'index']) ->name('posts.show');

Route::get('/posts/edit', [PostController::class, 'index']) ->name('posts.edit');

Route::get('/posts/store', [PostController::class, 'index']) ->name('posts.store');