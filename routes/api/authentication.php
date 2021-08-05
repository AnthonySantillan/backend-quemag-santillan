<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrademarksController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\ComputersControllerS;

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

Route::get('shoes', function () {
    $shoes = ['nike','adidas'];
    return response()->json(
        [
            'data' => $shoes,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta de zapatos es correcta',
                'code' => '201'
            ]

        ],201
    );
});
Route::get('shoes/{shoe}/trademarks/{brand}', function () {
    $shoes = ['nike','adidas'];
    return response()->json(
        [
            'data' => $shoes,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta de los zapatos y marca es correcta',
                'code' => '200'
            ]

        ],200
    );
});
Route::put('shoes/{shoe}/trademarks/{brand}', function () {
    $shoes = ['nike','adidas'];
    return response()->json(
        [
            'data' => null,
            'msg' => [
                'summary' => 'actualizacion correcta',
                'detail' => 'los datos se han actualizado',
                'code' => '201'
            ]

        ],201
    );
});
Route::delete('shoes/{shoe}/trademarks/{brand}', function () {
    $shoes = ['nike','adidas'];
    return response()->json(
        [
            'data' => $shoes,
            'msg' => [
                'summary' => 'eliminacion correcta',
                'detail' => 'dato eliminado',
                'code' => '201'
            ]

        ],201
    );
});
Route::post('shoes/{shoe}/trademarks', function () {
    $shoes = ['nike','adidas'];
    return response()->json(
        [
            'data' => null,
            'msg' => [
                'summary' => 'creacion correcta',
                'detail' => 'el dato ha sido creado',
                'code' => '201'
            ]

        ],201
    );
});

*/

/*
Route::apiResource('projects',ComputersControllerS::class);
//en singular para agregar funcionalidades extras a un crud normal

Route::prefix('project')->group(function (){
    Route::prefix('{project}')->group(function (){
        Route::patch('state',[ComputersControllerS::class,'updateState']);
    });
    Route::prefix('')->group(function (){
        Route::patch('state',[ComputersControllerS::class,'updateState']);
    });
});

*/

//clase
/*
 Route::apiResource('computers',ComputersControllerS::class);
//en singular para agregar funcionalidades extras a un crud normal

Route::prefix('computers/{computer}')->group(function (){
    Route::prefix('business')->group(function (){
        Route::get('{business}',[ComputersControllerS::class,'index']);
        Route::patch('state',[ComputersControllerS::class,'updateState']);
    });
    Route::prefix('')->group(function (){
        Route::patch('state',[ComputersControllerS::class,'updateState']);
    });
});
*/

//Definitivas

Route::apiResource('shoes',ShoesController::class);

Route::prefix('shoe')->group(function () {
    Route::prefix('{shoe}')->group(function () {
    Route::patch('state',[ShoesController::class,'updateState']);
 });
 Route::prefix('')->group(function () {
    Route::patch('state',[ShoesController::class,'updateState']);
    });
});

Route::apiResource('shoes.trademarks',TrademarksController::class);

Route::prefix('shoe/{shoe}/trademarks')->group(function () {
    Route::prefix('{trademark}')->group(function () {
    Route::patch('state',[ShoesController::class,'updateState']);
 });
 Route::prefix('')->group(function () {
    Route::patch('state',[ShoesController::class,'updateState']);
    });
});