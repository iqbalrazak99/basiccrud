<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function () {
    return view('/auth.registration');
});

Route::resource('/posts', PostController::class);
/*
 Route::resource('/dashboard', CustomAuthController::class)*/

// Route::get('/greeting', function () {
//     return 'Hello World';
// });

/*
Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']) ->name('posts.create');
//Route::delete('/posts/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/show', [PostController::class, 'show']) ->name('posts.show');  //jadii
Route::get('/posts/edit', [PostController::class, 'edit']) ->name('posts.edit');
Route::post('/posts/store', [PostController::class, 'store']) ->name('posts.store'); // dah jadi
Route::post('/posts/update', [PostController::class, 'update'])->name('posts.update');
Route::post('/posts/destroy', [PostController::class, 'destroy']) ->name('posts.destroy'); */




Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('custom.index');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
