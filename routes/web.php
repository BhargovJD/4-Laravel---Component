<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegistrationController::class,'index']);
Route::post('/register', [RegistrationController::class,'register']);






