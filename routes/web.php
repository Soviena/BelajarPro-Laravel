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
//komunitas
Route::get('/komunitas', [komunitasController::class, 'index'])->name('komunitas');
Route::post('/komunitas/post/add', [komunitasController::class, 'addPost'])->name('addPost');
Route::post('/komunitas/comment/add', [komunitasController::class, 'addComment'])->name('addComment');


Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/course/article/{parameter}', [CourseController::class, 'article'])->name('article');
Route::get('/admin/course', [adminController::class, 'course'])->name('admin-course');
Route::get('/admin/user', [adminController::class, 'user'])->name('admin-user');
Route::get('/admin/user/delete/{parameter}', [adminController::class, 'delete_user'])->name('delete-user');
Route::post('/admin/user/edit', [adminController::class, 'edit_user'])->name('edit-user');

Route::post('/admin/course/edit', [adminController::class, 'edit_course'])->name('edit-course');
Route::post('/course/article/edit', [adminController::class, 'edit_article'])->name('edit-article');
Route::post('/admin/course/add', [adminController::class, 'add_course'])->name('add-course');
Route::get('/admin/course/article', [adminController::class, 'article'])->name('admin-article');
Route::get('/admin/user/{parameter}', [adminController::class, 'delete_user'])->name('delete-user');
Route::get('/course/article/{parameter}', [adminController::class, 'delete_chapter'])->name('delete-chapter');
Route::get('/admin/course/{parameter}', [adminController::class, 'delete_course'])->name('delete-course');

Route::get('/masuk', [userController::class, 'index'])->name('masuk');
Route::post('/masuk/submit', [userController::class, 'masuk'])->name('submit');
Route::get('/daftar', [userController::class, 'daftar'])->name('daftar');
Route::get('/daftar/submit', [userController::class, 'addUser'])->name('terdaftar');
Route::get('/keluar', [userController::class, 'logout'])->name('keluar');

Route::get('/dashboard', [userController::class, 'dashboard'])->name('home');