<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/body', [App\Http\Controllers\ScentController::class, 'index'])->Middleware('auth');
Route::get('/body/{id}', [App\Http\Controllers\ScentController::class, 'show']);
Route::delete('/body/{id}', [App\Http\Controllers\ScentController::class, 'destroy']);
Route::get('/input/create', [App\Http\Controllers\ScentController::class, 'create']);
Route::post('/body', [App\Http\Controllers\ScentController::class, 'store']);
Route::get('/body/love', [App\Http\Controllers\ScentController::class, 'love']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


