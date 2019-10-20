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

Route::prefix('v1')->group(function ()
{

    Route::post('login', 'AuthController@login')->name('auth.login');
    Route::post('register', 'AuthController@register')->name('auth.register');

    Route::apiResource('actors', 'ActorController')->only(['index','show']);
    Route::apiResource('formats', 'FormatController')->only(['index','show']);
    Route::apiResource('movies', 'MovieController')->only(['index','show']);

    Route::get('search', 'MovieController@search')->name('movie.search');

    Route::middleware(['auth:api'])->group(function ()
    {
        Route::post('logout', 'AuthController@logout')->name('auth.logout');
        Route::post('refresh', 'AuthController@refresh')->name('auth.refresh');
        Route::post('me', 'AuthController@me')->name('auth.me');

        Route::apiResource('actors', 'ActorController')->except(['index','show']);
        Route::apiResource('formats', 'FormatController')->except(['index','show']);
        Route::apiResource('movies', 'MovieController')->except(['index','show']);
    });
});
