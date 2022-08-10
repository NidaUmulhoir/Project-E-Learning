<?php

use App\Http\Controllers\DashboardCourseController;
use Illuminate\Support\Facades\Route;

Route::get('/mainpage', function () {
    return view('mainpage');
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('course', function() {
//     return view('course');
// })->name('course');


Route::get('/memberList', function () {
    return view('memberList');
});
// Route::post('course', 'DashboardCourseController@store');
// Route::resource('store-form', DashboardCourseController::class);
Route::resource('course', DashboardCourseController::class);