<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'index']);
Route::get('/register', [PublicController::class, 'register']);
Route::get('/reg_successful', [PublicController::class, 'reg_successful']);
Route::get('/login', [PublicController::class, 'login']);
Route::get('/forgot_password', [PublicController::class, 'forgot_password']);
Route::get('/change_password', [PublicController::class, 'change_password']);
