<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Register;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('landing-page');
});

Route::post('/sign-up', [RegisterController::class, 'register']);
Route::post('/login-to', [RegisterController::class, 'login']);