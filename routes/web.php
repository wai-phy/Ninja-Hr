<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginRegisterController;

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

Route::get('/',[LoginRegisterController::class,'login'])->name('loginPage');
Route::get('/register',[LoginRegisterController::class,'register'])->name('register');

Route::middleware([
    'auth'])->group(function () {
        Route::get('/home',[PageController::class,'home'])->name('home');
});
