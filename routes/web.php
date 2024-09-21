<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routesf
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Define routes without middleware or Auth::routes() first

// Public route
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});
