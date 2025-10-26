<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CompanyController::class, 'index'])->name('company');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/about', [AdminController::class, 'about'])->name('admin.about')->middleware('auth');
Route::put('/about/{about}', [AdminController::class, 'updateabout'])->name('admin.aboutUpdate')->middleware('auth');
Route::get('/program', [AdminController::class, 'program'])->name('admin.program')->middleware('auth');
