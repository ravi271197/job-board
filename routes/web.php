<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/registration', [RegistrationController::class,'index'])->name('registration');
Route::post('/registration', [RegistrationController::class,'signUp'])->name('registration.post');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.post');
Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');
Route::get('/dashboard', [LoginController::class,'dashboard'])->name('dashboard');

/* Admin Routes */
Route::get('/admin/login', [AdminLoginController::class,'index'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class,'login'])->name('admin.login.post');
Route::get('/admin/logout', [AdminLoginController::class,'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [AdminLoginController::class,'dashboard'])->name('admin.dashboard')->middleware('admin');

Route::prefix('admin/category')->name('admin.category.')->middleware('admin')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/create', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
});

Route::prefix('admin/users')->name('admin.users.')->middleware('admin')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    
});


