<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\komunitasController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\adminController;

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

Route::get('/komunitas', [komunitasController::class, 'index'])->name('komunitas');
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/admin/course', [adminController::class, 'course'])->name('admin-course');
Route::get('/admin/user', [adminController::class, 'user'])->name('admin-user');

