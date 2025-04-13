<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.index');
});

Route::get('/skills', function () {
    return view('pages.skills');
})->name('skills');
