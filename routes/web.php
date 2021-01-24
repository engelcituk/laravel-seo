<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', \App\Http\Controllers\WelcomeController::class)->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource("blog", BlogController::class)->except("show");

Route::get("/user/{user}", \App\Http\Controllers\UserController::class)->name("user");
Route::get("/category/{category}", \App\Http\Controllers\CategoryController::class)->name("posts_category");
Route::get("/tag/{tag}", \App\Http\Controllers\TagController::class)->name("posts_tag");

require __DIR__.'/auth.php';

Route::get("{post}", [BlogController::class, "show"])->name("blog.show");
