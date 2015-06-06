<?php

/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

Route::get('/', [
    'as' => 'homepage', 'uses' => 'PageController@index'
]);
Route::get('/about', [
    'as' => 'about', 'uses' => 'PageController@about'
]);


Route::group(['prefix' => 'catalog'], function()
{
    Route::get('/{mark_slug}/{model_slug}/{options}', [
        'as' => 'car', 'uses' => 'CarsController@find'
    ]);

    Route::get('/{mark_slug}/{model_slug}', [
        'as' => 'model', 'uses' => 'CarsController@model'
    ]);

    Route::get('/{mark_slug}', [
        'as' => 'mark', 'uses' => 'CarsController@mark'
    ]);

    Route::get('/', [
        'as' => 'catalog', 'uses' => 'CarsController@index'
    ]);

    Route::post('/models/{mark}', [
        'as' => 'models', 'uses' => 'CarsController@getModels'
    ]);

    Route::post('/options/{model}', [
        'as' => 'models', 'uses' => 'CarsController@getOptions'
    ]);

});

Route::get('/auth/login', [
    'as' => 'auth', 'uses' => 'Admin\AuthController@login'
]);
Route::post('/auth/login', [
    'as' => 'auth', 'uses' => 'Admin\AuthController@auth'
]);


Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function()
{

    Route::get('/', [
        'as' => 'admin', 'uses' => 'PagesController@index'
    ]);
    Route::get('/login', [
        'as' => 'admin', 'uses' => 'PagesController@index'
    ]);

});