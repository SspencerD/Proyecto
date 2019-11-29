<?php

use Illuminate\Http\Request;

Route::get('/pais/{id}/region','Auth\RegisterController@byRegion');
Route::get('/region/{id}/ciudad','Auth\RegisterController@byCity');
Route::get('/ciudad/{id}/comuna','Auth\RegisterController@byComuna');

//API para reconocer las regiones, ciudades y comunas en admin

Route::get('/paises/{id}/regiones','Admin\UserController@byRegion');
Route::get('/regiones/{id}/ciudades','Admin\UserController@byCity');
Route::get('/ciudades/{id}/comunas','Admin\UserController@byProvince');



