<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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


Route::get('/',[PostController::class,'index'])->name('posts.index');
Route::get('/profil/{user:name}',[UserController::class,'show'])->name('user.profil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('posts',PostController::class)->except('index');
    Route::post('/posts/{post}',[PostController::class,'response'])->name('posts.response');
    Route::post('/destroy/{post}',[PostController::class,'destroy'])->name('posts.destroy');
    Route::get('/destroyed/{posted}',[PostController::class,'destroyed'])->name('posts.destroyed');
});

require __DIR__.'/auth.php';
