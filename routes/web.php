<?php

use Illuminate\Support\Facades\Route;

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

Route::get('tasks', 'TasksController@index')->name('tasks');
Route::get('tasks/create', 'TasksController@create');
Route::post('tasks/create', 'TasksController@store');

Route::get('tasks/edit/{id}', 'TasksController@edit');
Route::post('tasks/edit/{id}', 'TasksController@update');
Route::delete('tasks/delete/{id}', 'TasksController@destroy');