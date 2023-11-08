<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('templates/login');
});
Route::get('/register', [RegisterController::class, 'index'])->name('signup');
Route::post('/user-add', [RegisterController::class, 'addUser'])->name('adduser');

Route::post('login', [LoginController::class, 'index'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('timeline', [ProfileController::class, 'index'])->name('timeline');
Route::get('profilePage', [ProfileController::class, 'profilePage'])->name('profileview');
Route::get('profile/{id}/edit', [ProfileController::class, 'show']);