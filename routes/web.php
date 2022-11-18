<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorycontroller;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', function () {
    return view('categories.list');
});*/
Route::get('/',[categorycontroller::class,'index']);
Route::get('/category-create',[categorycontroller::class,'create']);
Route::POST('/category-store',[categorycontroller::class,'store']);
Route::get('/category-edit/{id}',[categorycontroller::class,'edit']);
Route::put('/category-update/{id}',[categorycontroller::class,'update']);
Route::get('/category-delete/{id}',[categorycontroller::class,'destroy']);