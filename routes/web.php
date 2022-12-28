<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\komunitasController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home')->name('dashboard');

// KOMUNITAS
Route::get('/komunitas', [komunitasController::class, 'index'])->name('komunitas');
Route::post('/komunitas/post/add', [komunitasController::class, 'addPost'])->name('addPost');
Route::post('/komunitas/comment/add', [komunitasController::class, 'addComment'])->name('addComment');


Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/admin/course', [adminController::class, 'course'])->name('admin-course');
Route::get('/admin/user', [adminController::class, 'user'])->name('admin-user');
Route::get('/admin/user/delete/{parameter}', [adminController::class, 'delete_user'])->name('delete-user');
Route::post('/admin/user/edit', [adminController::class, 'edit_user'])->name('edit-user');
Route::get('/masuk', [userController::class, 'index'])->name('masuk');
Route::post('/masuk/submit', [userController::class, 'masuk'])->name('submit');
Route::get('/daftar', [userController::class, 'daftar'])->name('daftar');
