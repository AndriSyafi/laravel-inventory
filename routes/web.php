<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/master', [MasterController::class, 'index'])
->name('master')
->middleware('auth');

