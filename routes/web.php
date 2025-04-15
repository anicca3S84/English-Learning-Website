<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListeningController;


Route::get('/', function () {
    return view('layout.index');
});

Route::get('/skills', function () {
    return view('pages.skills');
})->name('skills');


Route::get('/skill', function () {
    return view('pages.skills');
})->name('skill');

//listening 
Route::get('skills/listening', [ListeningController::class, 'index']);
Route::get('skills/listening/a1', [ListeningController::class, 'a1']);
Route::get('skills/listening/a2', [ListeningController::class, 'a2']);
Route::get('skills/listening/b1', [ListeningController::class, 'b1']);
Route::get('skills/listening/b2', [ListeningController::class, 'b2']);
Route::get('skills/listening/c1', [ListeningController::class, 'c1']);

//speaking





//speaking





//writing

//listening 
Route::get('skills/listening', [ListeningController::class, 'index']);
Route::get('skills/listening/a1', [ListeningController::class, 'a1']);
Route::get('skills/listening/a2', [ListeningController::class, 'a2']);
Route::get('skills/listening/b1', [ListeningController::class, 'b1']);
Route::get('skills/listening/b2', [ListeningController::class, 'b2']);
Route::get('skills/listening/c1', [ListeningController::class, 'c1']);

//speaking





//speaking





//writing