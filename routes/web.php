<?php

use App\Http\Controllers\TambahController;
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


//bayar route
Route::get('/',[TambahController::class,'index'])->name('indexBayar');
Route::get('bayar-create',[TambahController::class,'create'])->name('createBayar');
Route::get('bayar-edit/{id}',[TambahController::class,'edit'])->name('editBayar');

Route::get('delete-bayar/{id}',[TambahController::class,'delete'])->name('deleteBayar');

Route::post('store-data',[TambahController::class,'store'])->name('storeBayar');
Route::post('edit-data/{id}',[TambahController::class,'editStore'])->name('editStoreBayar');
