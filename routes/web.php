<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/productlist',[ProductController::class, 'index'])->name('product.list');
Route::get('/newproduct',[ProductController::class, 'create'])->name('product.new');
Route::post('/createproduct',[ProductController::class, 'NewProduct'])->name('product.create');
Route::get('/showupdateproduct/{id}',[ProductController::class, 'showupdate'])->name('product.showupdate');
Route::post('/updateproduct/{id}',[ProductController::class, 'update'])->name('product.update');
Route::delete('/deleteproduct/{id}',[ProductController::class, 'destroy'])->name('product.destroy');
