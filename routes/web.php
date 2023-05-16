<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FormDataController;

Route::get('/', IndexController::class);
Route::get('/form', IndexController::class);
Route::get('/list', IndexController::class);
Route::post('/saveFormData', FormDataController::class);



