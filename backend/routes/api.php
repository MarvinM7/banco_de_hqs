<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return 'welcome to dashboard!';
});

Route::post('titulos/lista', 'App\Http\Controllers\TitulosController@lista');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
