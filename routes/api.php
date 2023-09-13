<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::match(['get', 'post'], '/tasks', 'App\Http\Controllers\EvenementController@details');
Route::match(['get', 'post'], '/tasks/store', 'App\Http\Controllers\EvenementController@store');
Route::match(['get', 'post'], '/tasks/edit/{id}', 'App\Http\Controllers\EvenementController@edit');
Route::match(['get', 'post'], '/tasks/delete/{id}', 'App\Http\Controllers\EvenementController@delete');

