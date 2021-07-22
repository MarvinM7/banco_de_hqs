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

//Cadastrar Usuario
Route::post('usuario/inserir', 'App\Http\Controllers\UsuarioController@inserir');
Route::post('usuario/inserirGoogle', 'App\Http\Controllers\UsuarioController@inserirGoogle');

//Esqueceu Senha
Route::post('esqueceusenha', 'App\Http\Controllers\AuthController@esqueceuSenha');
Route::post('trocarsenha', 'App\Http\Controllers\AuthController@trocarSenha');

//Volumes
Route::post('volumes/lista', 'App\Http\Controllers\VolumesController@lista');


Route::group(['middleware' => ['apiJwt']], function() {
    //Logout
    Route::get('logout', 'App\Http\Controllers\AuthController@logout');

    //Dados do usuário logado
    Route::get('me', 'App\Http\Controllers\AuthController@me');

    //Renovar token
    Route::post('token/renovar', 'App\Http\Controllers\AuthController@renovarToken');

    //Meus volumes
    Route::post('meusvolumes/lista', 'App\Http\Controllers\UsuarioVolumeController@lista');
    Route::post('meusvolumes/inserir', 'App\Http\Controllers\UsuarioVolumeController@inserir');

    //Usuário
    Route::post('usuario/editar', 'App\Http\Controllers\UsuarioController@editar');

    //Título
    Route::post('titulo/inserir', 'App\Http\Controllers\TitulosController@inserir');
    Route::post('titulo/editar', 'App\Http\Controllers\TitulosController@editar');

    //Teste
    Route::get('testelogado', 'App\Http\Controllers\TitulosController@teste');
});
