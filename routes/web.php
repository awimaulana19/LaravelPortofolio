<?php

use App\Models\Portofolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortofolioController;

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

Route::get('/index/{user:username}', [PortofolioController::class, 'index']);
Route::get('/allproject/{user:username}', [PortofolioController::class, 'all']);
Route::get('/showproject/{project:id}', [PortofolioController::class, 'show']);
Route::get('/dashboard', [PortofolioController::class, 'dashboard'])->middleware('auth');
Route::get('/portofolio', [PortofolioController::class, 'portfolio'])->middleware('auth');
Route::get('/portofolio/{id}', [PortofolioController::class, 'jenis'])->middleware('auth');
Route::get('/datadiri', [PortofolioController::class, 'datadiri'])->middleware('auth');
Route::get('/datadiri/profil/{id}', [PortofolioController::class, 'profil'])->middleware('auth');
Route::get('/datadiri/pendidikan/{id}', [PortofolioController::class, 'pendidikan'])->middleware('auth');
Route::get('/datadiri/kontak/{id}', [PortofolioController::class, 'kontak'])->middleware('auth');
Route::get('/pengalaman', [PortofolioController::class, 'exp'])->middleware('auth');
Route::get('/pengalaman/{id}', [PortofolioController::class, 'pengalaman'])->middleware('auth');
Route::post('/portofolio/{id}', [PortofolioController::class, 'update'])->middleware('auth');
Route::post('/datadiri/{id}', [PortofolioController::class, 'update'])->middleware('auth');
Route::post('/pengalaman/{id}', [PortofolioController::class, 'update'])->middleware('auth');
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginController::class, 'store'])->middleware('guest');
Route::resource('/project', DashboardController::class)->middleware('auth');