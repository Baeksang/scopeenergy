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

Route::get('/monitoring', function(){
    return view('monitoring');
});

Route::get('/diagram',function(){
    return view('diagram');   
});

Route::get('/operation', function(){
    return view('operation');
});

Route::get('/status', function(){
    return view('status');
});

Route::get('/statics', function(){
    return view('statics');
});

Route::get('/management', function(){
    return view('management');
});


Route::get('/projects', 'ProjectController@index');