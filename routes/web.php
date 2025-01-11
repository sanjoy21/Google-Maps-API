<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GoogleMapsController;

Route::get('/geocode', [GoogleMapsController::class, 'geocode']);


Route::get('/', function () {
    return view('welcome');
});

