<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('page.index');
});

Route::get('about', function () {
    return view('page.contact');
});

Route::get('author', function () {
    return view('page.author');
});

Route::get('page', function () {
    return view('page.page');
});

Route::get('favorites', function () {
    return view('page.favorites');
});

Route::get('contact', function () {
    return view('page.contact');
});

Route::get('post', function () {
    return view('page.post');
});

Route::get('alt-home', function () {
    return view('page.alt-home');
});

Route::get('category', function () {
    return view('page.category');
});

Route::get('first-meetup', function () {
    return view('posts.first-meetup');
});
