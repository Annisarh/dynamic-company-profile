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

// route untuk about
Route::get('/about', [AdminController::class, 'about'])->name('admin.about')->middleware('auth');
Route::put('/about/{about}', [AdminController::class, 'updateabout'])->name('admin.aboutUpdate')->middleware('auth');

// route untuk program
Route::get('/program', [AdminController::class, 'program'])->name('admin.program')->middleware('auth');
Route::get('/program/create', [AdminController::class, 'programCreate'])->name('admin.program.create')->middleware('auth');
Route::post('/program', [AdminController::class, 'programStore'])->name('admin.program.store')->middleware('auth');
Route::get('/programEdit/{program}/edit', [AdminController::class, 'programEdit'])->name('admin.program.show')->middleware('auth');
Route::put('/programEdit/{program}', [AdminController::class, 'programUpdate'])->name('admin.program.update')->middleware('auth');
Route::delete('/program/{program}', [AdminController::class, 'programDestroy'])->name('admin.program.delete')->middleware('auth');

// route untuk gallery
Route::get('/gallery', [AdminController::class, 'gallery'])->name('admin.gallery')->middleware('auth');
Route::get('/gallery/{gallery}/edit', [AdminController::class, 'galleryEdit'])->name('admin.gallery.edit')->middleware('auth');
Route::put('/gallery/{gallery}', [AdminController::class, 'galleryUpdate'])->name('admin.gallery.update')->middleware('auth');


// route untuk testimoni
Route::get('/testi', [AdminController::class, 'testi'])->name('admin.testi')->middleware('auth');
Route::get('/testi/create', [AdminController::class, 'testiCreate'])->name('admin.testi.create')->middleware('auth');
Route::post('/testi', [AdminController::class, 'testiStore'])->name('admin.testi.store')->middleware('auth');
Route::get('/testi/{testi}/edit', [AdminController::class, 'testiEdit'])->name('admin.testi.edit')->middleware('auth');
Route::put('/testi/{testi}', [AdminController::class, 'testiUpdate'])->name('admin.testi.update')->middleware('auth');
Route::delete('/testi/{testi}', [AdminController::class, 'testiDestroy'])->name('admin.testi.delete')->middleware('auth');


// route untuk article
Route::get('/articles', [AdminController::class, 'articles'])->name('admin.articles')->middleware('auth');
Route::get('/articles/create', [AdminController::class, 'articlesCreate'])->name('admin.articles.create')->middleware('auth');
Route::post('/articles', [AdminController::class, 'articlesStore'])->name('admin.articles.store')->middleware('auth');
Route::get('/articles/{article}', [AdminController::class, 'articlesView'])->name('admin.articles.view')->middleware('auth');
Route::get('/articles/{article}/edit', [AdminController::class, 'articlesEdit'])->name('admin.articles.edit')->middleware('auth');
Route::put('/articles/{article}', [AdminController::class, 'articlesUpdate'])->name('admin.articles.update')->middleware('auth');
Route::delete('/articles/{article}', [AdminController::class, 'articlesDestroy'])->name('admin.articles.delete')->middleware('auth');
