<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return 'welcome to dashboard!';
});

//Títulos
Route::post('titulos/lista', 'App\Http\Controllers\TitulosController@lista');
Route::post('titulo/visualizar', 'App\Http\Controllers\TitulosController@visualizar');

//Editoras
Route::post('editoras/lista', 'App\Http\Controllers\EditorasController@lista');

//Títulos_status
Route::post('titulos_status/lista', 'App\Http\Controllers\TitulosStatusController@lista');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
