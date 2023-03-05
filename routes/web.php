<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontend;
use App\Http\Controllers\Backend\ControllerProduct;
use App\Http\Controllers\Backend\CategoryController;

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
Route::get('/',[Frontend::class,'index'])->name('index');

// backend
Route::get('/dashboard',[ControllerProduct::class,'dashboard'])->name('dashboard');
// for prod crud
Route::get('/addtoproduct',[ControllerProduct::class,'index'])->name('addtoproduct');
Route::post('/insertproduct',[ControllerProduct::class,'insert'])->name('insertproduct');

Route::get('/showproduct',[ControllerProduct::class,'show'])->name('showproduct');

Route::get('/activeproduct/{id}',[ControllerProduct::class,'active'])->name('activeproduct');
Route::get('/inactiveproduct/{id}',[ControllerProduct::class,'inactive'])->name('inactiveproduct');

Route::get('/deleteproduct/{id}',[ControllerProduct::class,'delete'])->name('deleteproduct');
Route::get('/editproduct/{id}',[ControllerProduct::class,'edit'])->name('editproduct');
Route::post('/updateproduct/{id}',[ControllerProduct::class,'update'])->name('updateproduct');

// Crud with ajax
Route::get('/managecategory',[CategoryController::class,'index'])->name('managecategory');
Route::post('/addcategory',[CategoryController::class,'store']);
Route::get('/activecategory/{id}',[CategoryController::class,'activecategory']);
Route::get('/inactivecategory/{id}',[CategoryController::class,'inactivecategory']);
Route::get('/deletecategory/{id}',[CategoryController::class,'destroy']);
Route::post('/updatecategory/{id}',[CategoryController::class,'update']);
Route::get('/showcategory',[CategoryController::class,'show']);
Route::get('/getcategory/{id}',[CategoryController::class,'edit']);