<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
Route::get('/',[AuthController::class,'showregister'])->name('show.register');
Route::get('/auth/login',[AuthController::class,'showlogin'])->name('show.login');


Route::post('/',[AuthController::class,'register'])->name('register');
Route::post('/auth/login',[AuthController::class,'login'])->name('login');

});
Route::middleware(['auth','role:admin'])->group(function(){
Route::get('dashboard/admin',[AdminController::class,'admin'])->name('dashboard.admin');
});
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::middleware(['auth','role:user'])->group(function(){
Route::get('dashboard/user',[UserController::class,'user'])->name('dashboard.user');
});

Route::middleware(['auth','role:teacher'])->group(function(){
Route::get('dashboard/teacher',[TeacherController::class,'teacher'])->name('dashboard.teacher');
});