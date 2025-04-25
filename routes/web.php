<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ListeningController;   
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Http\Controllers\SkillController;


Route::get('/', function () {
    return view('layout.index');
});



//skills-page (trang bên ngoài)
Route::get('/skills', function () {
    return view('pages.skills');
});

//skill-page
Route::get('/skill/{slug}', [SkillController::class, 'index'])->name('skill.index');

//course-page
Route::get('/skill/{skillSlug}/course/{courseSlug}', [CourseController::class, 'showCourse'])->name('course.show');

//lesson-page
Route::get('/skill/{skillSlug}/course/{courseSlug}/lesson/{lessonSlug}', [LessonController::class, 'showLesson'])->name('lesson.show');





