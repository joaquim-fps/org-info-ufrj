<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "HomeController@getHome");

Route::group(array("before" => "guest"), function() {
    Route::post('login', "UserController@postLogIn");
    Route::post('sign-up', "UserController@postSignUp");
});

Route::group(array("after" => "user"), function() {
    Route::post('save-profile', "UserController@postChangeProfile");
    Route::get('logout', "UserController@getLogOut");
});

