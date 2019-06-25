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
Route::get('/','timeZoneController@getAll')->name('display.index');
//Route::get('foo', 'Photos\AdminController@method');

Route::get('/{timezone?}','timeZoneController@checkTime');