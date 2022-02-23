<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/companies', CompanyController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/roles', RoleController::class);
Route::prefix('account')->group(function(){
  Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
  Route::post('/register', [RegisterController::class, 'register'])->name('account.register');
  Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
  Route::post('/login', [LoginController::class, 'login']);
  Route::delete('/logout', [LogoutController::class, 'logout'])->name('logout');
});
