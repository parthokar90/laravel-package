<?php

use Crud\Operation\Controllers\BlogController;
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


Route::get('blog/list',[BlogController::class,'index']);
Route::get('blog/create',[BlogController::class,'create']);
Route::post('blog/store',[BlogController::class,'store']);
Route::get('blog/show/{id}',[BlogController::class,'show']);
Route::get('blog/edit/{id}',[BlogController::class,'edit']);
Route::post('blog/update/{id}',[BlogController::class,'update']);
Route::get('blog/delete/{id}',[BlogController::class,'delete']);