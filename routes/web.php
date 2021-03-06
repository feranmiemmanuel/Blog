<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail/{slug}/{id}', [HomeController::class, 'detail']);
//Admin Routes
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::post('/admin/login', [AdminController::class, 'submit_login']);
//Categories
Route::get('/admin/category/{id}/delete', [CategoryController::class, 'destroy']);
Route::resource('/admin/category', CategoryController::class);
//Posts
Route::resource('/admin/posts', PostController::class);
Route::get('/admin/posts/{id}/delete', [PostController::class, 'destroy']);
//settings
Route::get('/admin/settings', [SettingController::class, 'index']);
Route::post('/admin/settings', [SettingController::class, 'save_settings']);
//Comments
Route::get('/admin/comments',[CommentsController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
