<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Course;
use App\Http\Controllers\ViewController;


// MainPage
Route::controller(ViewController::class)->group(function () {
    Route::get('/', 'showHome')->name('welcome');
    Route::get('/catalog', 'showCatalog')->name('catalog');
    Route::get('/aboutus', 'showAboutUs')->name('aboutus');
    Route::get('/contact', 'showContact')->name('contact');
    Route::get('/mycourse', 'studentDashboard')->name('mycourse')
    ;
});


// Admin and Teacher
Route::middleware(['auth' , 'verified' , 'role:superadmin,admin,teacher'])->group(function () {
    Route::get('/dashboard/teacher' , [AdminController::class , 'showTeacher'])->name('dashboard.teacher');
    Route::get('/dashboard/student' , [AdminController::class , 'showStudent'])->name('dashboard.student');
    // Task
    Route::get('/dashboard/task' , [AdminController::class , 'task'])->name('dashboard.task');
    Route::post('/dashboard/task' , [AdminController::class , 'task_store'])->name('task.store');
    Route::get('/dashboard/task/create' , [AdminController::class , 'task_create'])->name('task.create');
    // Artikel
    Route::get('/dashboard/article' , [AdminController::class , 'article'])->name('dashboard.artikel');
    Route::post('/dashboard/article' , [ArticleController::class , 'store'])->name('artikel.store'); // post article
    Route::get('/dashboard/article/create' , [AdminController::class , 'article_create'])->name('artikel.create');
    // Dashboard
    Route::get('/dashboard/{id}', [CourseController::class , 'index'])->name('dashboard');
    // Manage Course
    Route::get('/dashboard/manage-course/{id}' , [CourseController::class , 'show'])->name('dashboard.manage');
    Route::get('/dashboard/manage-course/edit/{id}' , [CourseController::class , 'edit'])->name('dashboard.edit');
    Route::delete('/admin/student_destroy/{id}' , [UserController::class , 'delete'])->name('user.destroy');
});

// Create Data
Route::middleware(['auth' , 'verified' , 'role:superadmin,admin'])->group(function () {
    Route::post('/admin/store_teacher' , [AdminController::class , 'store_teacher'])->name('teacher.store');
    Route::post('/admin/store_student' , [AdminController::class, 'store_student'])->name('student.store');
});
// Profile Setting
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Course
Route::middleware(['auth' , 'verified' , 'role:superadmin,admin,teacher'])->group(function () {
    Route::post('/course/store-course' , [CourseController::class , 'store'])->name('course.store');
    Route::match(['put' , 'patch'],'/course/update-course/{id}' , [CourseController::class , 'update'])->name('course.update');
    Route::delete('/course/delete/{id}' , [CourseController::class , 'destroy'])->name('course.destroy');
});

// Session
Route::middleware(['auth' , 'verified' , 'role:superadmin,admin,teacher'])->group(function () {
    Route::post('/module/store-module' , [SessionController::class , 'store'])->name('module.store');
    Route::match(['put' , 'patch'],'/module/update-module/{id}' , [SessionController::class , 'update'])->name('module.update');
    Route::delete('/module/delete-module/{id}' , [SessionController::class , 'delete'])->name('module.delete');
});

require __DIR__.'/auth.php';
