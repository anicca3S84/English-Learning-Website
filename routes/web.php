<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.index');
});



Route::get('/skills/listening', function () {
    return view('layout.listening-page');
});