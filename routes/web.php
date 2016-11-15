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

Route::get('/','HomeController@getItems' )->name('welcome');
Route::get('/create',[
		 'as' => 'create',
		 'uses' => 'HomeController@getCreateItem'
		 ]);
Route::post('/create',[
		 'as' => 'postcreate',
		 'uses' => 'HomeController@postCreateItem'
		 ]);
Route::get('/show/{id}',[
		 'as' => 'showdetails',
		 'uses' => 'HomeController@getShowDetails'
		 ]);
Route::get('/delete/{id}',[
		 'as' => 'delete',
		 'uses' => 'HomeController@postDelete'
		 ]);
Route::get('/edit/{id}',[
		 'as' => 'editdetails',
		 'uses' => 'HomeController@getEdit'
		 ]);
Route::post('/edit/{id}',[
		 'as' => 'postEdit',
		 'uses' => 'HomeController@postEdit'
		 ]);