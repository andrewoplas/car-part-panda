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

Route::get('/', 'PageController@home');
Route::get('/browse', 'PageController@browse');
Route::get('/browse/filter', 'PageController@browseFilter');
Route::get('/detail', 'PageController@detail');
Route::get('/ad-edit', 'PageController@adEdit');
Route::get('/chat', 'PageController@chat');
Route::get('/chat-detail', 'PageController@chatDetail');
Route::get('/signup', 'PageController@signup');

