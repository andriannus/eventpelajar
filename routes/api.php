<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function() {
    Route::resource('event', 'EventController', [
        'except' => ['create', 'edit']
    ]);

    Route::post('/{event}/report', [
        'uses' => 'EventController@report'
    ]);

    Route::resource('user', 'UserController', [
        'except' => ['create', 'edit']
    ]);

    Route::group(['prefix', 'user'], function() {
        Route::post('/{user}/report', [
            'uses' => 'UserController@report'
        ]);

        Route::post('/{user}/private', [
            'uses' => 'UserController@makeItPrivate'
        ]);

        Route::get('/{user}/events', [
            'uses' => 'UserController@getAllEvents'
        ]);

        Route::get('/{user}/following', [
            'uses' => 'UserController@getAllFollowings'
        ]);

        Route::get('/{user}/followers', [
            'uses' => 'UserController@getAllFollowers'
        ]);

        Route::get('/{user}/loves', [
            'uses' => 'UserController@getAllLoves'
        ]);
    });

    Route::group(['prefix' => 'following'], function() {
        Route::post('/{user}/{user}', [
            'uses' => 'FollowingController@store'
        ]);

        Route::delete('/{user}/{user}', [
            'uses' => 'FollowingController@destroy'
        ]);
    });

    Route::group(['prefix' => 'follower'], function() {
        Route::post('/{user}/{user}', [
            'uses' => 'FollowerController@store'
        ]);

        Route::delete('/{user}/{user}', [
            'uses' => 'FollowerController@destroy'
        ]);
    });

    Route::group(['prefix' => 'love'], function() {
        Route::post('/{activity}/{user}', [
            'uses' => 'LoveController@store'
        ]);

        Route::delete('/{activity}/{user}', [
            'uses' => 'LoveController@destroy'
        ]);
    });
});
