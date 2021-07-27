<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsControllerQ;

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

/*
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

//nuevas rutas deber 

Route::get('shoes/{shoe}/trademarks',function(){
   return response()->json(
      [
          'data' => $project,
          'msg' => [
              'summary' => 'consulta correcta',
              'detail' => 'la consulta del proyecto se ejecutó correctamente',
              'code' => '200'
          ]
      ], 200
  );
});

Route::get('shoes/{shoe}/trademarks/{brand}',function(){
   return response()->json(
      [
          'data' => $project,
          'msg' => [
              'summary' => 'consulta correcta',
              'detail' => 'la consulta del proyecto se ejecutó correctamente',
              'code' => '200'
          ]
      ], 200
  );
});


Route::post('shoes/{shoe}/trademarks',function(){
   return response()->json(
      [
          'data' => $project,
          'msg' => [
              'summary' => 'Creado correctamente',
              'detail' => 'El proyecto se creo correctamente',
              'code' => '201'
          ]
      ], 201
  );
});


Route::put('shoes/{shoe}/trademarks/{brand}',function(){
   return response()->json(
      [
          'data' => null,
          'msg' => [
              'summary' => 'Actualizado correctamente',
              'detail' => 'EL proyecto se actualizó correctamente',
              'code' => '201'
          ]
      ], 201
  );
});


Route::delete('shoes/{shoe}/trademarks/{brand}',function(){
   return response()->json(
      [
          'data' => $project,
          'msg' => [
              'summary' => 'Eliminado correctamente',
              'detail' => 'EL proyecto se eliminó correctamente',
              'code' => '201'
          ]
      ], 201
  );
});

*/


Route::apiResource('projects',ProjectsControllerQ::class);