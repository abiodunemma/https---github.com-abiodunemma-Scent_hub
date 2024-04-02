<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/body', [App\Http\Controllers\ScentController::class, 'index']);
Route::get('/body/{id}', [App\Http\Controllers\ScentController::class, 'show']);
Route::get('/body/create', [App\Http\Controllers\ScentController::class, 'create']);

