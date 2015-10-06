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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login/{provider?}', 'SocialController@login');

Route::get('profile1/{provider?}/callback', 'SocialController@login');

Route::get('dash', function() {
  return view('dash');
});

Route::get('logout', 'SocialController@logout');
