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

// Pages
Route::get('/', 'PageController@home');
Route::get('/browse', 'PageController@browse');
Route::get('/browse/filter', 'PageController@browseFilter');
Route::get('/detail', 'PageController@detail');
Route::get('/ad-edit', 'PageController@adEdit');
Route::get('/chat', 'PageController@chat');
Route::get('/chat-detail', 'PageController@chatDetail');
Route::get('/signup', 'PageController@signup');
Route::get('/profile', 'PageController@profile');

// Settings
Route::prefix('settings')->group(function () {
    Route::get('/profile', 'PageController@profile');
    Route::get('/password', 'PageController@password');
    Route::get('/voorkeuren', 'PageController@voorkeuren');
    Route::get('/zoekertjes', 'PageController@zoekertjes');
    Route::get('/favorieten', 'PageController@favorieten');
    Route::get('/biedingen', 'PageController@biedingen');
});

// Modals
Route::prefix('modal')->group(function () {
    Route::get('/login', 'ModalController@login');
    Route::get('/signup', 'ModalController@signup');
    Route::get('/share', 'ModalController@share');
    Route::get('/send-message', 'ModalController@sendMessage');
    Route::get('/confirmation', 'ModalController@confirmation');
    Route::get('/pricing', 'ModalController@pricing');
});


