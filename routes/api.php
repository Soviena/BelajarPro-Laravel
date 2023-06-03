<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/course/all', [apiController::class, 'getAllCourse']);
Route::get('/course/{idCourse}/articles', [apiController::class, 'getArticles']);
Route::get('/login', [apiController::class, 'login']);



