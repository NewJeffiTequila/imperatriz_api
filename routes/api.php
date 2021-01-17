<?php


Route::get('/bairros', 'App\Http\Controllers\Api\BairrosController@index');
Route::get('/bairros/{id}', 'App\Http\Controllers\Api\BairrosController@show');
Route::post('/bairros', 'App\Http\Controllers\Api\BairrosController@store');
Route::post('/bairros/{id}', 'App\Http\Controllers\Api\BairrosController@update');
Route::delete('/bairros/{id}', 'App\Http\Controllers\Api\BairrosController@destroy');
