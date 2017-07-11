<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'uses' => 'TaskController@index',
	'as' => 'Task'
]);
Route::get('/add', [
	'uses' => 'TaskController@create',
	'as' => 'createTask'
]);
Route::post('/add', [
	'uses' => 'TaskController@store',
	'as' => 'storeTask'
]);
Route::get('/edit/{id}', [
	'uses' => 'TaskController@edit',
	'as' => 'editTask'
]);
Route::post('/update/{id}', [
	'uses' => 'TaskController@update',
	'as' => 'updateTask'
]);
Route::post('/destroy/{id}', [
	'uses' => 'TaskController@destroy',
	'as' => 'destroyTask'
]);
Auth::routes();
