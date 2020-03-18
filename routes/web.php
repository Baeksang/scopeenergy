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

Route::get('/totalstatus', function(){
    return view('totalstatus');
});

Route::get('/monitoring', function(){
   return view('monitoring');
});

Route::get('/monitoring/weekpower', 'MonitoringController@getWeekPowerInformation');
Route::get('/monitoring/daypower', 'MonitoringController@getDayPowerInformation');


Route::get('/status',function(){

    return view('status');
});

Route::get('/status/weekpower', 'MonitoringController@getWeekPowerInformation');
Route::get('/status/daypower', 'MonitoringController@getDayPowerInformation');

Route::get('/operation', function(){
    return view('operation');
});

Route::get('/statics', function(){
    return view('menu');
});


Route::get('/management', function(){
    return view('management');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::get('/projects', 'ProjectController@index');



/* Device group : 발전설비재원 관리*/
Route::prefix('devices')->group(function(){

    Route::get('/','DeviceController@index');
    //Route::get('/create', 'DeviceController@create');
    //Route::post('/','DeviceController@store');
   // Route::get('/{device}', 'DeviceController@show');
    //Route::get('/{device}/edit', 'DeviceController@edit');
    //Route::put('/{device}', 'DeviceController@update');
    //Route::delete('/{device}', 'DeviceController@destroy');

});

/* Task group  : 수용가 정보 관리 */
Route::prefix('tasks')->group(function(){

    Route::get('/','TaskController@index');
    Route::get('/create', 'TaskController@create');
    Route::post('/','TaskController@store');
    Route::get('/{task}', 'TaskController@show');
    Route::get('/{task}/edit', 'TaskController@edit');
    Route::put('/{task}', 'TaskController@update');
    Route::delete('/{task}', 'TaskController@destroy');

});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);

});
