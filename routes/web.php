<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\HomeController;
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



// 非認証系ルート
Route::get('/',[HomeController::class,'index'])->name('top');
Route::get('register',[RegisterController::class,'create'])->name('register');
Route::post('register',[RegisterController::class,'store']);
// ログイン処理
Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('login',[LoginController::class,'store']);


// 認証系ルート
Route::middleware(['auth'])->group(function () {
    Route::get('users/index', [UserController::class, 'index'])->name('users.index');
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
});
