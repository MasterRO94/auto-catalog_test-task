<?php


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', [
    'as' => 'homepage', 'uses' => 'PageController@index'
]);
Route::get('/about', [
    'as' => 'about', 'uses' => 'PageController@about'
]);

Route::get('/catalog', [
    'as' => 'catalog', 'uses' => 'CarsController@index'
]);