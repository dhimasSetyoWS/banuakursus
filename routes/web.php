<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Http\Controllers\ViewController;


// MainPage
Route::controller(ViewController::class)->group(function () {
    Route::get('/', 'showHome')->name('welcome');
    Route::get('/catalog', 'showCatalog')->name('catalog');
});


// Admin and Teacher
Route::middleware(['auth' , 'verified' , 'nostudent'])->group(function () {
    Route::get('/dashboard' , function () {
        return Inertia::render('Dashboard/Page/MainDashboard');
    })->name('dashboard');
    Route::get('/dashboard/manage-course/{id}' , [CourseController::class , 'show'])->name('dashboard.manage');
});

// Profile Setting
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Course
Route::middleware('nostudent')->group(function () {
    Route::post('/course/store-course' , [CourseController::class , 'store'])->name('course.store');
});

require __DIR__.'/auth.php';
