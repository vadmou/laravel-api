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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('country', 'Country\CountryController@country');
Route::get('country/{id}', 'Country\CountryController@countryByID');
Route::post('country', 'Country\CountryController@countrySave');
<<<<<<< HEAD
Route::put('country/{country}', 'Country\CountryController@countryUpdate');
Route::delete('country/{country}', 'Country\CountryController@countryDelete');
=======
>>>>>>> 253a71a7aab663ab658b26af3f5ed8fd5563d282
