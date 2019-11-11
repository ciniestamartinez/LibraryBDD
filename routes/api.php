<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('books', 'BookController');
Route::GET('getBooks', 'BookController@getBooks');
Route::POST('addBook', 'BookController@addBook');

Route::apiResource('users', 'UserController');
Route::GET('getUsers', 'UserController@getUsers');
Route::POST('addUser', 'UserController@addUser');

