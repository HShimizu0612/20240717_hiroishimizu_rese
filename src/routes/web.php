<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/reservation', [ReservationController::class, 'postReservation']);
    Route::post('/reserve/{reservation_id}', [ReservationController::class, 'delete'])->name('reserve.delete');
    Route::post('/favorite/{shop_id}', [ReservationController::class, 'favorite'])->name('favorite');
    Route::post('/unfavorite/{shop_id}', [ReservationController::class, 'unfavorite'])->name('unfavorite');
    Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
});

Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/thanks', [AuthController::class, 'thanks']);

Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);

Route::get('/search', [ShopController::class, 'search']);
