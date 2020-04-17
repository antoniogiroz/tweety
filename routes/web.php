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

    Route::post('/profiles/{user:username}/follow', 'FollowController@store');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfileController@update');
});

Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');
