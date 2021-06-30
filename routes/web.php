<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\StudentCotroller;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/user/register', [UserController::class, 'register']);
Route::get('/user/login', [UserController::class, 'login']);
Route::post('/user/register', [UserController::class, 'registerProcessing']);
Route::get('/user/getUserDetail', [UserController::class, 'getUserDetail']);
Route::get('/user/registerCustomer', [UserController::class, 'registerCustomer']);
Route::post('/user/registerCustomer', [UserController::class, 'showInformation']);

Route:: get('/admin/student/create', [StudentCotroller::class,'create']);
Route:: get('/admin/student/list', [StudentCotroller::class,'getList']);
Route:: get('/admin/student/detail', [StudentCotroller::class,'getById']);
Route:: get('/admin/student/update', [StudentCotroller::class,'update']);
Route:: get('/admin/student/delete', [StudentCotroller::class,'delete']);
Route:: get('/admin/student/view', [StudentCotroller::class,'view']);




Route:: get('/admin/teacher/create', [TeacherController::class,'create']);
Route:: get('/admin/teacher/list', [TeacherController::class,'getList']);
Route:: get('/admin/teacher/detail', [TeacherController::class,'getById']);
Route:: get('/admin/teacher/update', [TeacherController::class,'update']);
Route:: get('/admin/teacher/delete', [TeacherController::class,'delete']);
Route:: get('/admin/teacher/view', [TeacherController::class,'view']);

Route::get('/demo.page1', [LayoutController::class, 'page1']);
Route::get('/demo.page2', [LayoutController::class, 'page2']);
Route::get('/demo.page3', [LayoutController::class, 'page3']);
