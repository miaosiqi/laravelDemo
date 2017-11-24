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
});//路由关联视图


//Route::get('Login/login', 'LoginController@login');//路由关联控制器
//
//Route::get('/blog', function(){
//    return view('blog');//默认模板视图
//});
//
//Route::get('Login/showAny', 'LoginController@showAny');
//Route::get('Student/test', 'StudentController@test');
//Route::get('Student/add', 'StudentController@add');
//Route::get('Student/upd', 'StudentController@upd');
//Route::get('Student/del', 'StudentController@del');
//Route::get('Student/selConstruct', 'StudentController@selConstruct');
//Route::get('Student/tplView', 'StudentController@tplView');
//
//
//Route::any('Student/act0', 'StudentController@act0');
//
//Route::group(['middleware' => 'activity'],function(){
//    Route::any('Student/act1', 'StudentController@act1');
//    Route::any('Student/act2', 'StudentController@act2');
//    Route::any('Student/act3', 'StudentController@act3');
//});

Route::group(['middleware' => 'web'],function(){
    Route::any('Student/lst', 'StudentController@lst');
    Route::any('Student/create', 'StudentController@create');
    Route::any('Student/update/{id}', 'StudentController@update');
    Route::any('Student/delete/{id}', 'StudentController@delete');
    Route::any('Student/detail/{id}', 'StudentController@detail');
});
