<?php

use Illuminate\Http\Request;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');


Route::post('/auth/signup', ['uses' => 'AuthController@signup']);
Route::post('/auth/signin', ['uses' => 'AuthController@signin']);
Route::get('/sections', ['uses' => 'Forum\SectionController@index']);

Route::group(['middleware' => 'jwt.auth'], function() {

  Route::get('/user', ['uses' => 'UserController@index']);

});
