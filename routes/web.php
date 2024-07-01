<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutme', [AboutMeController::class,'show']);

Route::get('/skills', [SkillsController::class, 'show']);

Route::get('/hobbies', [HobbiesController::class, 'show']);