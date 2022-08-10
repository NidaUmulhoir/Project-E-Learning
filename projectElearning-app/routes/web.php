<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('course', function() {
    return view('course');
})->name('course');


Route::get('/memberList', function () {
    return view('memberList');
});

Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/profilpage', function () {
    return view('profilpage');
});

Route::get('/subscribepage', function () {
    return view('subscribepage');
});

