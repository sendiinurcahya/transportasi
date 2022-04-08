<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/index',[App\Http\Controllers\AdminController::class,'index'])->name('/admin/index');
Route::get('/pengguna/index',[App\Http\Controllers\PenggunaController::class,'index'])->name('/pengguna/index');

Route::get('/pengguna/register',  [App\Http\Controllers\UserController::class,'akunpenggunaadd'])->name('pengguna/register');  
Route::post('/pengguna/post',  [App\Http\Controllers\UserController::class,'akunpenggunapost'])->name('pengguna.post');