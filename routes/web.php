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

Route::get('/',[
     'as'=>'/',
     'uses'=>'pagesController@getWelcome'

	]);
    

Route::get('about',[
     'as'=>'about',
     'uses'=>'pagesController@getabout'


	]);
Route::get('add',[
     'as'=>'add',
     'uses'=>'pagesController@getadd'


	]);
?>
