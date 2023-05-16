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

Route::get('/', [userController::class, 'dashboard'])->name('home');

//komunitas
Route::get('/komunitas', [komunitasController::class, 'index'])->name('komunitas');
Route::post('/komunitas/post/add', [komunitasController::class, 'addPost'])->name('addPost');
Route::post('/komunitas/comment/add', [komunitasController::class, 'addComment'])->name('addComment');

Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/course/{idCourse}/article', [CourseController::class, 'article'])->name('article');

Route::get('/admin', [adminController::class, 'index'])->name('admin');

Route::get('/admin/user', [adminController::class, 'user'])->name('admin-user');
Route::get('/admin/user/delete/{idUser}', [adminController::class, 'delete_user'])->name('delete-user');
Route::post('/admin/user/edit', [adminController::class, 'edit_user'])->name('edit-user');

Route::get('/admin/course', [adminController::class, 'course'])->name('admin-course');
Route::post('/admin/course/edit', [adminController::class, 'edit_course'])->name('edit-course');
Route::post('/admin/course/add', [adminController::class, 'add_course'])->name('add-course');
Route::get('/admin/course/delete/{idCourse}', [adminController::class, 'delete_course'])->name('delete-course');

Route::get('/admin/course/{idCourse}/article', [adminController::class, 'article'])->name('admin-article');
Route::post('/admin/course/{idCourse}/article/edit', [adminController::class, 'edit_article'])->name('edit-article');
Route::post('/admin/course/article/add', [adminController::class, 'add_article'])->name('add-article');
Route::get('/admin/course/{idCourse}/article/delete/{idArticle}', [adminController::class, 'delete_chapter'])->name('delete-chapter');

Route::get('/masuk', [userController::class, 'index'])->name('masuk');
Route::post('/masuk/submit', [userController::class, 'masuk'])->name('submit');
Route::get('/daftar', [userController::class, 'daftar'])->name('daftar');
Route::post('/daftar/submit', [userController::class, 'addUser'])->name('terdaftar');
Route::get('/keluar', [userController::class, 'logout'])->name('keluar');

Route::get('/quiz', [userController::class, 'quiz'])->name('quiz');

Route::get('/search', [userController::class, 'search'])->name('search');

//profil
Route::get('/profil/{idUser}', [userController::class, 'profil'])->name('profil');
Route::post('/profil/submit', [userController::class, 'profil_edit'])->name('profil_edit');

// Route::get('/daftar/mentor_form', [userController::class, 'form_mentor'])->name('form_mentor');
// Route::post('/daftar/mentor_form/submit', [userController::class, 'daftar_mentor'])->name('mentor_submit');