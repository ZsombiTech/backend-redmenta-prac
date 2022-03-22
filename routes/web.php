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

Route::post('/tasks/{taskid}', 'App\Http\Controllers\SessionController@store');
Route::get('/token', 'App\Http\Controllers\SessionController@index');
Route::get('/tasks', 'App\Http\Controllers\WorksheetController@index');

Route::get('/', function () {
    return view('welcome');
});
