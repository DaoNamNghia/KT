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
Route::get('/faketube/channels', 'ChannelController@index');
Route::get('/faketube/channels/create', 'ChannelController@create');
Route::post('/faketube/channels', 'ChannelController@store');
Route::get('/faketube/channels/{channel}/edit', 'ChannelController@edit');
Route::put('/faketube/channels/{channel}', 'ChannelController@update');
Route::delete('/faketube/channels/{channel}', 'ChannelController@destroy');
Route::get('/', function () {
    return view('welcome');
});
