<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\users\PermissionController as permission;
use App\Http\Controllers\Admin\users\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AttributeController;
Route::get('/',function (){
    return view('admin.index');
});

Route::resource('users',UserController::class);
Route::get('users/{user}/permissions',[permission::class,'create'])->name('users.permissions.create')->middleware('can:show_staff_access');
Route::post('users/{user}/permission',[permission::class,'store'])->name('users.permission.store')->middleware('can:show_staff_access');


Route::resource('permissions',PermissionController::class);
Route::resource('roles',RoleController::class);
Route::resource('products',ProductController::class);
Route::post('attribute/values',[AttributeController::class,'getValues'])->name('getValues');
Route::resource('categories',CategoryController::class);
