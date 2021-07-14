<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Títulos
Route::post('titulos/lista', 'App\Http\Controllers\TitulosController@lista');
Route::post('titulo/visualizar', 'App\Http\Controllers\TitulosController@visualizar');

//Editoras
Route::post('editoras/lista', 'App\Http\Controllers\EditorasController@lista');

//Títulos_status
Route::post('titulos_status/lista', 'App\Http\Controllers\TitulosStatusController@lista');

//Login
Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('loginGoogle', 'App\Http\Controllers\AuthController@loginGoogle');


Route::group(['middleware' => ['apiJwt']], function() {
    //Logout
    Route::get('logout', 'App\Http\Controllers\AuthController@logout');

    Route::get('me', 'App\Http\Controllers\AuthController@me');

    //Meus volumes
    Route::post('meusvolumes', 'App\Http\Controllers\UsuarioVolumeController@lista');

    //Teste
    Route::get('testelogado', 'App\Http\Controllers\TitulosController@teste');
});
