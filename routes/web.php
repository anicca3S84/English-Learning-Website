<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ListeningController;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\FacebookController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VocabularyController;

// Home Route
Route::get('/', function () {
    return view('layout.index');
});
//vocabulary
Route::get('/vocabulary', [VocabularyController::class, 'index']);



// Skill Routes
Route::get('/skill/{slug}', [SkillController::class, 'index'])->name('skill.index');

// Course Routes
Route::get('/skill/{skillSlug}/course/{courseSlug}', [CourseController::class, 'showCourse'])->name('course.show');

// Lesson Routes
Route::get('/skill/{skillSlug}/course/{courseSlug}/lesson/{lessonSlug}', [LessonController::class, 'showLesson'])->name('lesson.show');

// Authentication Routes
Route::get('/login', function () {
    return view('layout.login');
})->name('login');


//auth google
Route::get('auth/google', [LoginGoogleController::class, 'redirectToGoogle'])->name('auth/google');

Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');



//auth facebook (cause facebook developer require https instead of http, but we are using localhost => do not implement yet)
Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('auth/facebook');

Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
