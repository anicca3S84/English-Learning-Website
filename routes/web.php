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

Route::get('/skill', [SkillController::class, 'skillOuterPage'])->name('skill.outerPage');
//skill-page
Route::get('/skill/{slug}', [SkillController::class, 'index'])->name('skill.index');

//course-page
Route::get('/skill/{skillSlug}/course/{courseSlug}', [CourseController::class, 'showCourse'])->name('course.show');

//lesson-page
Route::get('/skill/{skillSlug}/course/{courseSlug}/lesson/{lessonSlug}', [LessonController::class, 'showLesson'])->name('lesson.show');

Route::get('/{skillSlug}', [SkillController::class, 'grammar'])->name('skill.grammar');

Route::get('/{skillSlug}/{courseSlug}/{lessonSlug}', [LessonController::class, 'testLesson'])->name('lesson.testLesson');



