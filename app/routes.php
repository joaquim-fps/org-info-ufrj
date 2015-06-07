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
Route::get("activate-user/{id}/{activation_code}", "UserController@getActivateUser");
Route::post('create-search', 'SearchController@postCreateSearch');

Route::group(array("before" => "guest"), function() {
    Route::post('login/{inputs}', "UserController@postLogIn");
    Route::post('sign-up', "UserController@postSignUp");
});

Route::group(array("after" => "user"), function() {
    Route::get('last-searches', "SearchController@getLastUserSearches");
    Route::get('logout', "UserController@getLogOut");
    Route::post('save-profile', "UserController@postChangeProfile");
    Route::post('password-recovery', 'UserController@postPasswordRecovery');
});

