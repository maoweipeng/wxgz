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

Route::get('/index', 'WwController@index');
//Route::get('/index/{id}', 'WwController@show');
//Route::get('/result','WwController@storee');
Route::post('/result','WwController@storee');
Route::get('/result/{id}', 'WwController@show');
Route::get('/binding', 'WwController@binding');
Route::post('/binding', 'WwController@binding');
Route::get('/personal', 'WwController@personal');
//Route::post('/about', 'Ww@store');

Auth::routes();

Route::get('/home', 'HomeController@index');

//create by maoweipeng///////////////////////////////////////////////////////////
Route::group(['middleware'=>['web']],function(){//中间件路由组
    Route::get('/menu','MenuController@menu');
    Route::get('/message','MessageController@sendText');
});

Route::any('/wechat', 'WechatController@serve');
Route::any('/test', 'WechatController@test');

/////////////////////////////////////////////////////////////////////////////////
