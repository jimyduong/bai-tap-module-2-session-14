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
Route::get('/','CustomerController@getAll')->name('getAll');
Route::get('/add','CustomerController@getAdd')->name('FormAdd');
Route::get('{id}/delete','CustomerController@deleteCustomer')->name('deleteID');

