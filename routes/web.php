<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

    Route::match(['get', 'post'], '/', 'App\Http\Controllers\AuthController@index');

    Route::match(['get', 'post'], '/login', 'App\Http\Controllers\AuthController@login');

    Route::group(['middleware' => ['admin']], function () {

        Route::match(['get', 'post'], '/tasks', 'App\Http\Controllers\TaskController@details');
Route::match(['get', 'post'], '/tasks/store', 'App\Http\Controllers\TaskController@store');
Route::match(['get', 'post'], '/tasks/edit/{id}', 'App\Http\Controllers\TaskController@edit');
Route::match(['get', 'post'], '/tasks/delete/{id}', 'App\Http\Controllers\TaskController@delete');

       

    });
});