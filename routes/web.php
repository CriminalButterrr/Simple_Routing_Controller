<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/hobbies', function () {
    return view('hobbies');
});

Route::get('/skills', function () {
    return view('skills');
});