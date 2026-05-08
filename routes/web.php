<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
Route::get('/test-404', function () {
    abort(404);
});
});
