<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/add-users', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::namespace('App\Http\Controllers')->group(function(){
// GET API-Fetch one or more record
Route::get('users/{id?}', 'APIController@getUser');
// post API-Add simple user
Route::post('add-users','APIController@addUsers');

//POST API -add mutiple data 
Route::post('add-multiple-users','APIController@MultipleUsers');
});
