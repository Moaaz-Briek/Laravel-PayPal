<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [PayPalController::class,'homePage'])->name('home');
Route::get('processPaypal', [PayPalController::class,'processPaypal']);
Route::get('processCancel', [PayPalController::class,'processCancel'])->name('processCancel');
Route::get('processSuccess', [PayPalController::class,'processSuccess'])->name('processSuccess');
