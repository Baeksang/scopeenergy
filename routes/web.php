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

Route::get('/monitoring/weekpower', 'MonitoringController@getWeekPowerInformation');
Route::get('/monitoring/daypower', 'MonitoringController@getDayPowerInformation');


Route::get('/diagram',function(){
    $books = [
        'Harry Potter',
        'Laravel'
    ];
    return view('diagram',[
        'books' => $books
    ]);   
});

Route::get('/operation', function(){
    return view('operation');
});

Route::get('/statics', function(){
    return view('menu');
});

Route::get('/status', 'StatusController@index');


Route::get('/management', function(){
    return view('management');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::get('/projects', 'ProjectController@index');


Route::prefix('tasks')->group(function(){
   
    Route::get('/','TaskController@index');
    Route::get('/create', 'TaskController@create');
    Route::post('/','TaskController@store');
    Route::get('/{task}', 'TaskController@show');
    Route::get('/{task}/edit', 'TaskController@edit');
    Route::put('/{task}', 'TaskController@update');
    Route::delete('/{task}', 'TaskController@destroy');

});