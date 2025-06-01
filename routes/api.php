<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\BarangController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', \App\Http\Controllers\Api\RegisterController::class)
    ->name('api.register');
Route::post('/login', \App\Http\Controllers\Api\LoginController::class)
    ->name('api.login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', \App\Http\Controllers\Api\LogoutController::class)
    ->name('api.logout');

// Route Level
Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

// Route User
Route::get('users', [\App\Http\Controllers\Api\UserController::class, 'index']);
Route::post('users', [\App\Http\Controllers\Api\UserController::class, 'store']);
Route::get('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'show']);
Route::put('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'update']);
Route::delete('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'destroy']);

// Route Kategori
Route::get('kategoris', [\App\Http\Controllers\Api\KategoriController::class, 'index']);
Route::post('kategoris', [\App\Http\Controllers\Api\KategoriController::class, 'store']);
Route::get('kategoris/{kategori}', [\App\Http\Controllers\Api\KategoriController::class, 'show']);
Route::put('kategoris/{kategori}', [\App\Http\Controllers\Api\KategoriController::class, 'update']);
Route::delete('kategoris/{kategori}', [\App\Http\Controllers\Api\KategoriController::class, 'destroy']);

// Route Barang
Route::get('barangs', [\App\Http\Controllers\Api\BarangController::class, 'index']);
Route::post('barangs', [\App\Http\Controllers\Api\BarangController::class, 'store']);
Route::get('barangs/{barang}', [\App\Http\Controllers\Api\BarangController::class, 'show']);
Route::put('barangs/{barang}', [\App\Http\Controllers\Api\BarangController::class, 'update']);
Route::delete('barangs/{barang}', [\App\Http\Controllers\Api\BarangController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});