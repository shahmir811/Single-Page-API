<?php

use Illuminate\Http\Request;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');


Route::post('/auth/signup', ['uses' => 'AuthController@signup']);
Route::post('/auth/signin', ['uses' => 'AuthController@signin']);

Route::group(['middleware' => 'jwt.auth'], function() {

  Route::get('/test', function(){
    dd('You are Authenticated');
  });

});
