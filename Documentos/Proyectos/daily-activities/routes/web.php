<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\DailyActvController;
use \App\Http\Controllers\Tabla1Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!clea
|
*/
Route::get('/', HomeController::class)->name('home');

Route::resource('daily-actv', DailyActvController::class);

Route::get('/tabla1', [Tabla1Controller::class, 'index'])->name('resource.index');
