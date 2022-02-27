<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portaltheme;
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
Route::get('/',[portaltheme::class,'index']);
Route::get('/account',[portaltheme::class,'account']);
Route::get('/charts',[portaltheme::class,'charts']);
Route::get('/login',[portaltheme::class,'login']);
Route::get('/notifications',[portaltheme::class,'notifications']);
Route::get('/orders',[portaltheme::class,'orders']);
Route::get('/reset_password',[portaltheme::class,'reset_password']);
Route::get('/welcome', function () {
    return view('welcome');
});
