<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsControllerA;

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
Route::get('projects/', function () {
    return "hola mundo";
});
Route::get('projects/({project}', function () {
    return ['proyecto1', 'proyecto2'];
});
Route::put('projects/{project}', function () {
    return "dato actualizado";
});
Route::delete('projects/{project}', function () {
    return "dato eliminado";
});
Route::post('projects/', function () {
    return "nuevo dato";
});

//nuevas rutas

Route::get('computers', function () {
    $computers = ['ryzen','intel','hp'];
    return response()->json(
        [
            'data' => $computers,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta de las computadoras esta correcta',
                'code' => '201'
            ]

        ],201
    );
});
Route::get('computers/{computer}/business/{local}', function () {
    $computers = ['ryzen','intel','hp'];
    return response()->json(
        [
            'data' => $computers,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta de la computadora y la empresa es correcta',
                'code' => '200'
            ]

        ],200
    );
});
Route::put('computers/{computer}/business/{local}', function () {
    $computers = ['ryzen','intel','hp'];
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
Route::delete('computers/{computer}/business/{local}', function () {
    $computers = ['ryzen','intel','hp'];
    return response()->json(
        [
            'data' => $computers,
            'msg' => [
                'summary' => 'eliminacion correcta',
                'detail' => 'dato eliminado',
                'code' => '201'
            ]

        ],201
    );
});
Route::post('computers/{computer}/business', function () {
    $computers = ['ryzen','intel','hp'];
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
});*/

Route::apiResource('projects',ProjectsControllerA::class);
//en singular para agregar funcionalidades extras a un crud normal
Route::prefix('project')->group(function (){
    Route::prefix('{project}')->group(function (){
        Route::patch('state',[ProjectsControllerA::class,'updateState']);
    });
    Route::prefix('')->group(function (){
        Route::patch('state',[ProjectsControllerA::class,'updateState']);
    });
});
*/

