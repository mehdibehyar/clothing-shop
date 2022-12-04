<?php

use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\users\PermissionController as permission;
use App\Http\Controllers\Admin\users\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AttributeController;
use \App\Http\Controllers\Admin\GalleryController;
Route::get('/',function (){
    return view('admin.index');
});

Route::resource('users',UserController::class)->except(['show']);
Route::get('users/pagination',[UserController::class,'fetch_data'])->name('pagination_users');

Route::get('users/{user}/permissions',[permission::class,'create'])->name('users.permissions.create')->middleware('can:show_staff_access');
Route::post('users/{user}/permission',[permission::class,'store'])->name('users.permission.store')->middleware('can:show_staff_access');


Route::resource('permissions',PermissionController::class)->except(['show']);
Route::get('permissions/pagination',[PermissionController::class,'fetch_data'])->name('pagination_permissions');

Route::resource('roles',RoleController::class)->except(['show']);
Route::get('roles/pagination',[RoleController::class,'fetch_data'])->name('roles_product');

Route::resource('products',ProductController::class)->except(['show']);
Route::get('products/pagination',[ProductController::class,'fetch_data'])->name('pagination_product');


Route::post('attribute/values',[AttributeController::class,'getValues'])->name('getValues');
Route::resource('categories',CategoryController::class)->except(['show']);
Route::get('categories/pagination',[CategoryController::class,'fetch_data'])->name('categories_product');

Route::resource('product.image',GalleryController::class)->except(['show']);

Route::resource('posts', PostController::class)->except(['show']);
Route::get('posts/pagination',[PostController::class,'fetch_data'])->name('posts_product');

Route::resource('advertises', AdvertiseController::class)->except(['show']);
Route::get('advertises/pagination',[ProductController::class,'fetch_data'])->name('advertises_product');

Route::get('orders',[OrderController::class,'index'])->name('orders.index');
Route::get('order/{order}',[OrderController::class,'single_order'])->name('single_order');
Route::delete('order/delete',[OrderController::class,'destroy'])->name('orders.destroy');
Route::get('orders/pagination',[OrderController::class,'fetch_data'])->name('orders.pagination');
