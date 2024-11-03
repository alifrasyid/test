<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HealthSisController;
use App\Http\Controllers\menudietController;
use App\Http\Controllers\PostController;
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

//Dashboard
Route::get('/Dashboard', [HealthSisController::class, 'index']);
Route::get('/createDashboard', [DashboardController::class, 'create']);
Route::post('/storeDashboard', [DashboardController::class, 'store']);
Route::delete('/dashboard/{id}/delete', [DashboardController::class, 'destroy']);
Route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit']);
Route::put('/dashboard/{id}/update', [DashboardController::class, 'update']);

//default admin profile
Route::get('/Profile', function () {
    return view('Profile');
});

//MenuDiet
Route::get('/menudiet', [menudietController::class, 'index']);
Route::get('/createmenudiet', [menudietController::class, 'create']);
Route::post('/storemenudiet', [menudietController::class, 'store']);
route::get('/menudiet/{id}/food', [menudietController::class, 'show']);
Route::delete('/menudiet/{id}/delete', [menudietController::class, 'destroy']);
Route::get('/menudiet/{id}/edit', [menudietController::class, 'edit']);
Route::put('/menudiet/{id}/update', [menudietController::class, 'update']);

//LOGIN REGISTER, PROFILE
Route::get('/Login', [HealthSisController::class, 'Login']);
Route::get('/LoginCheck', [HealthSisController::class, 'LoginCheck']);
Route::get('/logout', [HealthSisController::class, 'logout']);
Route::get('/register', [HealthSisController::class, 'create']);
Route::post('/store', [HealthSisController::class, 'store']);
Route::put('/HealthSis/{id}/update', [HealthSisController::class, 'update']);
Route::get('/HealthSis/{id}/edit', [HealthSisController::class, 'edit']);
Route::delete('/HealthSis/{id}/delete', [HealthSisController::class, 'delete']);
Route::post('/change-password/{id}', [HealthSisController::class, 'changePassword']);

//Timeline
Route::get('/timeline', [PostController::class, 'index'])->name('post.index');
Route::get('/timeline/{id}/create-timeline', [PostController::class, 'create'])->name('post.create');
Route::post('/timeline/{id}/store', [PostController::class, 'store'])->name('post.store');
Route::put('/timeline/{id}/{iduser}/update', [PostController::class, 'update'])->name('post.update');
Route::get('/timeline/{id}/{iduser}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::get('/timeline/{id}/delete', [PostController::class, 'delete'])->name('post.delete');

//Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{id}/create-artikel', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('/artikel/{id}/store', [ArtikelController::class, 'store'])->name('artikel.store');
Route::get('/Artikel/{id}', [ArtikelController::class, 'show']);
Route::put('/artikel/{id}/{iduser}/update', [ArtikelController::class, 'update'])->name('artikel.update');
Route::get('/artikel/{id}/{iduser}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::get('/artikel/{id}/delete', [ArtikelController::class, 'delete'])->name('artikel.delete');
//tesss
Route::get('/', function () {
    return view('welcome');
});