<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\SignOutController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/sign-up', [SignUpController::class, 'index']);
Route::post('/sign-up', [SignUpController::class, 'register']);

Route::get('/sign-in', [SignInController::class, 'index']);
Route::post('/sign-in', [SignInController::class, 'authenticate']);

Route::get('/sign-out', [SignOutController::class, 'signOut']);
