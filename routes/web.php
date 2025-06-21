<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Models\Course;
use App\Http\Controllers\ViewController;


// MainPage
Route::controller(ViewController::class)->group(function () {
    Route::get('/', 'showHome')->name('welcome');
    Route::get('/catalog', 'showCatalog')->name('catalog');
    Route::get('/aboutus', 'showAboutUs')->name('aboutus');
    Route::get('/contact', 'showContact')->name('contact');
});


// Admin and Teacher
Route::middleware(['auth' , 'verified' , 'nostudent'])->group(function () {
    Route::get('/dashboard/{id}', [CourseController::class , 'index'])->name('dashboard');
    Route::get('/dashboard/manage-course/{id}' , [CourseController::class , 'show'])->name('dashboard.manage');
    Route::get('/dashboard/manage-course/edit/{id}' , [CourseController::class , 'edit'])->name('dashboard.edit');
});

// Profile Setting
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Course
Route::middleware(['auth' , 'verified' , 'nostudent'])->group(function () {
    Route::post('/course/store-course' , [CourseController::class , 'store'])->name('course.store');
    Route::match(['put' , 'patch'],'/course/update-course/{id}' , [CourseController::class , 'update'])->name('course.update');
    Route::delete('/course/delete/{id}' , [CourseController::class , 'destroy'])->name('course.destroy');
});

// Module
ROute::middleware(['auth' , 'verified' , 'nostudent'])->group(function () {
    Route::post('/module/store-module' , [ModuleController::class , 'store'])->name('module.store');
    Route::match(['put' , 'patch'],'/module/update-module/{id}' , [ModuleController::class , 'update'])->name('module.update');
    Route::delete('/module/delete-module/{id}' , [ModuleController::class , 'delete'])->name('module.delete');
});

require __DIR__.'/auth.php';
