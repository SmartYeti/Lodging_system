<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VipRoomController;
use App\Http\Controllers\ConfirmController;


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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/reg-room', [RoomController::class, 'index']);
Route::get('/vip-room', [VipRoomController::class, 'index']);
Route::get('/confirm', [ConfirmController::class, 'index']);