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

Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');
Route::middleware(['auth:sanctum', 'verified'])->get('/user/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('user.profil');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
});
