<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/profile/{name}','ProfileController@profile');

Route::post('/user/edit', 'UserController@edit')->middleware(['auth']);

Route::get('user/edit', 'UserController@edit');

Route::resource('articles','ArticlesController');

Route::patch('user/{user}/update',  ['as' => 'user.update', 'uses' => 'UserController@update']);
