<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Gate;
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
    return \App\Models\Active_code::generateCode(auth()->user());
    return view('index');
});

Route::post('cart/add/{product}',[\App\Http\Controllers\CartController::class,'addToCart'])->name('cart.add');

