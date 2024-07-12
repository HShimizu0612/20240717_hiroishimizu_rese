<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Httop\Controllers\UserController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail/:{id}', [ShopController::class, 'detail'])->name('shop.detail');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'getLogout']);
    Route::post('/reservation', [ReservationController::class, 'postReservation']);
    Route::post('/favorite', [ReservationController::class, 'favorite']);
    Route::post('/favorite/delete', [ReservationController::class, 'unfavorite']);
    Route::get('/mypage', [AuthController::class, 'getMypage']);
});

Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);

Route::get('/search', [ShopController::class, 'search']);

Route::get('/thanks', [AuthController::class, 'showDone']);
