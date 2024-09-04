<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\{WebsiteController, StudentRegController};
use App\Http\Controllers\Admin\{AdminController, CategoryController, CourseController,MentorController, SaleController, StudentController, SettingController, ProfileController, DistrictController, ThanaController};

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
Route::get('/student', [WebsiteController::class, 'student'])->name('student');
Route::get('/mentor', [WebsiteController::class, 'mentor'])->name('mentor');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::resource('/registration', StudentRegController::class);
Route::get('/registration', [StudentRegController::class, 'registration']);


// Admin Route List
Route::get('/dashboard', [AdminController::class, 'index']);
Route::resource('/dashboard/category', CategoryController::class);
Route::resource('/dashboard/course', CourseController::class);
Route::resource('/dashboard/mentor', MentorController::class);
Route::resource('/dashboard/sale', SaleController::class);
Route::resource('/dashboard/student', StudentController::class);
Route::resource('/dashboard/setting', SettingController::class);
Route::resource('/dashboard/profile', ProfileController::class);
Route::resource('/dashboard/district', DistrictController::class);
Route::resource('/dashboard/thana', ThanaController::class);
Route::post('/dashboard/thana/get-thana', [ThanaController::class,'getThana'])->name('thana.getthana');

// Route::get('/', [WebsiteController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
