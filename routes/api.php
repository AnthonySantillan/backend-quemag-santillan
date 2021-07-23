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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});

<<<<<<< HEAD
Route::get('projects',function(){
    return ['proyecto1','proyecto2'];
 });

 Route::get('projects/{id}',function(){
    return ['proyecto1'];
 });

 Route::post('projects',function(){
    return ['creado'];
 });

 Route::put('projects',function(){
    return ['actualizado','entregado'];
 });

 Route::put('projects/{id}',function(){
    return ['actualizado'];
 });


 Route::delete('projects',function(){
    return ['eliminado'];
 });
=======

>>>>>>> a907e48475c3495bbe0cc9974fcf7774b70f10bd
