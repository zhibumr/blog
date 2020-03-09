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
//前端
Route::get('/','IndexController@index');
Route::get('blog','Home\BlogController@index');
Route::get('personal','Home\PersonalController@index');
Route::get('reprinted','Home\ReprintedController@index');
//后台
Route::get('admin','Admin\IndexController@login');


