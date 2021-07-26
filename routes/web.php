<?php

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

Route::get('computers/{computer}/business', function () {
    return ['hp', 'ryzen', 'intel'];
});
Route::get('computers/{computer}/business/{local}', function () {
    return ['hp', 'ryzen', 'intel'];
});
Route::put('computers/{computer}/business/{local}', function () {
    return ['dato actualizado'];
});
Route::delete('computers/{computer}/business/{local}', function () {
    return ['dato eliminado'];
});
Route::post('computers/{computer}/business', function () {
    return ['dato creado'];
});
