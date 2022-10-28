<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\userController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('users/{id?}',[userController::class,'index']);
// Route::get('/',[userController::class,'user']);

// Route::view('about','about');
// Route::get('/show',[userController::class,'showData']);
// Route::get('/show/{id}',[userController::class,'singleData']);
// Route::get('/add',[userController::class,'add']);
// Route::get('/edit/{id}',[userController::class,'edit']);
// Route::get('/delete/{id}',[userController::class,'delete']);
// Route::get('/session/get',[userController::class,'getSession']);
// Route::get('/session/store',[userController::class,'storeSession']);
// Route::get('/session/destroy',[userController::class,'destroySession']);

Route::get('/',[dataController::class,'showData']);
Route::get('delete/{id}',[dataController::class,'deleteData']);




