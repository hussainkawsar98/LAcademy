<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Admin\{CategoryController, AdminController};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/course', [WebsiteController::class, 'course'])->name('course');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/error', [WebsiteController::class, 'error'])->name('error');
Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('checkout');
Route::get('/login', [WebsiteController::class, 'login'])->name('login');
Route::get('/preview', [WebsiteController::class, 'preview'])->name('preview');
Route::get('/student', [WebsiteController::class, 'student'])->name('student');Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');


// Admin Route List
Route::get('/dashboard', [AdminController::class, 'index']);
Route::resource('/category', CategoryController::class);

// Route::get('/', [WebsiteController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
