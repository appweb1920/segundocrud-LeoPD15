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

Route::get("/piezas", "PiezasController@index");
Route::post("/piezas/agrega", "PiezasController@store");

Route::get("/piezas/edita/{id}", "PiezasController@edit");
Route::post("/piezas/edita/update", "PiezasController@update");
Route::get("/piezas/elimina/{id}", "PiezasController@destroy");

