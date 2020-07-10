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
    Route::get('/menu', 'PageController@settingsMenu');
    Route::get('/wijzig-profiel', 'PageController@settingsWijzigProfiel');
    Route::get('/wachtwoord', 'PageController@settingsWachtwoord');
    Route::get('/voorkeuren', 'PageController@settingsVoorkeuren');
    Route::get('/zoekertjes', 'PageController@settingsZoekertjes');
    Route::get('/favorieten', 'PageController@settingsFavorieten');
    Route::get('/biedingen', 'PageController@settingsBiedingen');
});

// Create
Route::prefix('create')->group(function () {
    Route::get('/', 'PageController@create');
    Route::get('/part/1', 'PageController@createPart1');
    Route::get('/part/2', 'PageController@createPart2');
    Route::get('/rims', 'PageController@createRims');
    Route::get('/tires', 'PageController@createTires');
    Route::get('/car', 'PageController@createCar');
    Route::get('/accessory', 'PageController@createAccessory');
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


