<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/eleves" , [EleveController::class , "index"])->name("eleves.index");
