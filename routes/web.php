<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

auth()->loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store')->name('tweets.store');
});

Route::get('/profiles/{user:name}', 'ProfileController@show')->name('profile');
