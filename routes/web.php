<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\cart\CartController;
use App\Http\Controllers\products\ProductViewController;
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


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('login',[AuthController::class,'loginGet'])->name('login');
Route::post('login',[AuthController::class,'loginPost']);

Route::get('register',[AuthController::class,'registerGet'])->name('register');
Route::post('register',[AuthController::class,'registerPost']);

Route::get('token',[AuthController::class,'getToken'])->name('token');
Route::post('token',[AuthController::class,'postToken']);

Route::prefix('cart')->group(function (){
    Route::post('add/{product}',[CartController::class,'addToCart'])->name('cart.add');
    Route::get('/',[CartController::class,'cart'])->name('cart');
    Route::delete('delete/{product}',[CartController::class,'delete'])->name('cart.delete');
    Route::patch('update',[CartController::class,'update'])->name('cart.update');
});

Route::get('products',[ProductViewController::class,'show'])->name('show_products');
Route::get('product/{product}',[ProductViewController::class,'show_single_product'])->name('single_product');





