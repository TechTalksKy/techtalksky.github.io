<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('author', 'PagesController@author');
Route::get('page', 'PagesController@page');
Route::get('favorites', 'PagesController@favorites');
Route::get('contact', 'PagesController@contact');
Route::get('post', 'PagesController@post');
Route::get('alt-home', 'PagesController@altHome');
Route::get('category', 'PagesController@category');
Route::get('first-meetup', 'PagesController@meetup');
Route::get('event/{name}', 'PagesController@event');
Route::get('talk/{name}', 'PagesController@talk');

Route::get('submit-a-talk', 'TalkController@create');
Route::post('submit-a-talk', 'TalkController@store');

Route::get('sponsor-a-talk', 'SponsorController@create');
Route::get('sponsor-a-talk', 'SponsorController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::get('submissions', 'TalkController@index');
    Route::get('submissions/{submission}', 'TalkController@show');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
