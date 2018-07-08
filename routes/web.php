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

Route::get('index',[
    'as'=>'trangchu',
    'uses'=>'HomeController@getTrangchu'
    ]);
    
Route::get('detail/{id}',[
    'as'=>'chitietdichvu',
    'uses'=>'DetailProDuctController@getdetail'
    ]);
Route::get('dichvu_cuahang/{id}',[
    'as'=>'dvcuahang',
    'uses'=>'DetailProDuctController@getsanphamcuahang']);