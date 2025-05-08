<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ListeningController;   
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\FacebookController;

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

Route::get('/{skillSlug}/{courseSlug}/{lessonSlug}', [LessonController::class, 'testLesson'])->name('lesson.testLesson');

// Authentication Routes
Route::get('/login', function () {
    return view('layout.login');
})->name('login');
//ath database
Route::post('/login', [AuthController::class, 'login'])->name('loginDB');
Route::get('/register', function() {
    return view('layout.register');
})->name('registerDB');
//reset password
Route::get('/reset-password', [ResetPasswordController::class, 'showForm'])->name('reset-password');
Route::post('/reset-password', [ResetPasswordController::class, 'sendResetLink'])->name('reset-password-post');
Route::get('/reset/after', function() {
    return view('layout.after-reset');
})->name('reset-after');
Route::get('/form-reset-password/{token}', [ResetPasswordController::class, 'showMailForm'])->name('password.reset');
Route::post('/form-reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/send-test-mail', [MailController::class, 'sendTestEmail']);

//auth google
Route::get('auth/google', [LoginGoogleController::class, 'redirectToGoogle'])->name('auth/google');
Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);

//auth facebook
Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('auth/facebook');
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);