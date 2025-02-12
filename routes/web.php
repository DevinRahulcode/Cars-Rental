<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});



Route::view("/addcar","addcar");
Route::post("addcar", [CarController::class,'addcar']);
