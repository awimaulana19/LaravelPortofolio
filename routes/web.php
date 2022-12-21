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

Route::get('/index', [PortofolioController::class, 'index'])->middleware('auth');
Route::get('/allproject', [PortofolioController::class, 'all'])->middleware('auth');
Route::get('/showproject/{project:id}', [PortofolioController::class, 'show'])->middleware('auth');
Route::get('/dashboard', [PortofolioController::class, 'dashboard'])->middleware('auth');
Route::get('/dashboard/portofolio/{id}', [PortofolioController::class, 'jenis'])->middleware('auth');
Route::get('/dashboard/datadiri', [PortofolioController::class, 'datadiri'])->middleware('auth');
Route::get('/dashboard/profil/{id}', [PortofolioController::class, 'profil'])->middleware('auth');
Route::get('/dashboard/pendidikan/{id}', [PortofolioController::class, 'pendidikan'])->middleware('auth');
Route::get('/dashboard/kontak/{id}', [PortofolioController::class, 'kontak'])->middleware('auth');
Route::get('/dashboard/pengalaman/{id}', [PortofolioController::class, 'pengalaman'])->middleware('auth');
Route::post('/dashboard/portofolio/{id}', [PortofolioController::class, 'update']);
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);;
Route::post('/register', [LoginController::class, 'store']);
Route::resource('/project', DashboardController::class)->middleware('auth');