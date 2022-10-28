<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/category/{name?}', function ($name=null) {
    return $name; 
})->where('name','[a-zA-Z+]+');
Route::get('/product/{id?}',function($id=null){
    return $id;

})->where('id','[0-9]+');

Route::match(['get','post'],'/item',function(Request $req){
    return "the route is ".$req->method()." method";

});
Route::any('/items',function(Request $req){
    return "the route is ".$req->method()." method";

});