<?php

use App\Http\Controllers\DashboardCourseController;
use App\Http\Controllers\DashboardModuleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/mainpage', function () {
    return view('mainpage');
});

Route::get('/modul', function () {
    return view('modul');
});

Route::get('/payment_dashboard', function () {
    return view('payment_dashboard');
});

Route::get('/pay', function () {
    return view('pay');
});

Route::get('/success_pay', function () {
    return view('success_pay');
});

Route::prefix('/admin')->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('course', DashboardCourseController::class);
    // Route::get('/course/module', function () {
    //     return view('dashboard.module');
    // });
    Route::resource('/course-detail/module', DashboardModuleController::class);
    
    Route::get('/memberList', function () {
        return view('memberList');
    });
});


Route::get('/homepage', [HomeController::class, 'homepage']);
Route::get('/subscribe', [HomeController::class, 'subscribe']);
Route::get('/profile', [HomeController::class, 'profile']);

