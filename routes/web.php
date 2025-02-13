<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;




// Route::view("/","app");


Route::view("/addcar","addcar");
Route::post("addcar", [CarController::class,'addcar']);


Route::get('/' ,[CarController::class,'cardata']);


Route::view('/viewcar', 'viewcar');

Route::get('/viewcar',[CarController::class,'viewcar']);


Route::get('search', [CarController::class,'search']);