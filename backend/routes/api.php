<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('hqlist', 'App\Http\Controllers\HqController@list');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
