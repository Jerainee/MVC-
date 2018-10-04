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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('add-data','infosController@AddData');

Route::get('all-data','infosController@AllData')->name('all-data');

Route::POST('insert-data','infosController@InsertData');

Route::get('delete-data/{id}','infosController@DeleteData');

Route::get('show-data/{id}/{action}','infosController@ShowData');

Route::post('update-data/{id}','infosController@UpdateData');