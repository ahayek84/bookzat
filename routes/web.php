<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Auth
Route::group(['middleware' => ['auth']], function () {

    Route::resource('property', 'PropertyController');
});

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

Route::get('/available_properties', 'PropertyController@available_properties')->name('available_properties');

Route::get('/referral', 'PropertyController@referral')->name('referral');

Route::get('/team', 'PropertyController@team')->name('team');

Route::get('/pricing', 'PropertyController@pricing')->name('pricing');

Route::get('/rented', 'HomeController@rented')->name('rented');
