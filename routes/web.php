<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\cart\CartController;
use App\Http\Controllers\cart\PaymentController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\MagazineController;
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

Route::get('resetPassword',[AuthController::class,'resetPasswordGet'])->name('resetPassword');
Route::post('resetPassword',[AuthController::class,'resetPasswordPost']);

Route::get('token/reset',[AuthController::class,'getTokenReset'])->name('token.reset');
Route::post('token/reset',[AuthController::class,'postTokenReset']);

Route::get('logOut',[AuthController::class,'getOut'])->name('getOut');


Route::get('token',[AuthController::class,'getToken'])->name('token');
Route::post('token',[AuthController::class,'postToken']);

Route::prefix('cart')->group(function (){
    Route::post('add/{product}',[CartController::class,'addToCart'])->name('cart.add');
    Route::get('/',[CartController::class,'cart'])->name('cart');
    Route::delete('delete/{id}',[CartController::class,'delete'])->name('cart.delete');
    Route::patch('update',[CartController::class,'update'])->name('cart.update');
    Route::post('update_basket',[CartController::class,'update_the_basket'])->name('update.the.basket');
});

Route::middleware('auth')->group(function (){
    Route::post('payment',[PaymentController::class,'payment'])->name('cart.payment');
    Route::get('payment/callback/{payment}',[PaymentController::class,'callback'])->name('payment.callback');

    //for reset password
    Route::get('password',[AuthController::class,'passwordGet'])->name('password');
    Route::post('password',[AuthController::class,'passwordPost']);

    Route::get('order/information',[PaymentController::class,'create_information'])->name('create_information');

    Route::get('orders',[\App\Http\Controllers\OrderController::class,'show_orders'])->name('show_orders');
});


//route for interests
Route::get('interests',[InterestController::class,'interests'])->name('interests');
Route::post('add_interest',[InterestController::class,'addInterest'])->name('interest.add');
Route::delete('interest/delete/{id}',[InterestController::class,'delete'])->name('interest.destroy');

Route::get('products',[ProductViewController::class,'show'])->name('show_products');
Route::get('products/paginate',[ProductViewController::class,'fetch_data'])->name('products_paginate');
Route::get('product/{product}',[ProductViewController::class,'show_single_product'])->name('single_product');
Route::get('product_category/{category}',[ProductViewController::class,'product_category'])->name('product_category');


Route::get('search',[ProductViewController::class,'search'])->name('search');




//magazine
Route::get('magazine/{post}',[MagazineController::class,'single_post'])->name('post.single_post');








