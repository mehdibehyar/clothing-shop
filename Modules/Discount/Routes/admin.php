<?php
use Illuminate\Support\Facades\Route;
use \Modules\Discount\Http\Controllers\DiscountController;


Route::resource('discounts',DiscountController::class)->except(['show']);
