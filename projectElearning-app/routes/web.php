<?php

use App\Http\Controllers\DashboardCourseController;
use App\Http\Controllers\DashboardModuleController;
use App\Http\Controllers\DashboardPricelist;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Register;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('landing-page');
});


// Route::get('admin/dashboard', function () {
//     return view('dashboard.layouts.main');
// });

Route::middleware(['auth'])->prefix('/admin')->group(function(){
    Route::get('/logout', [RegisterController::class, 'logoutAdmin']);

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::get('/user', function () {
        return view('dashboard.user.index');
    });
    
    Route::resource('course', DashboardCourseController::class);
    Route::get('/course/module', function () {
        return view('dashboard.module');
    });
    Route::resource('/course-detail/module', DashboardModuleController::class);
    
    Route::prefix('/user')->group(function(){
        Route::get('/user-premium', function () {
            return view('dashboard.user.userPremium.index');
        });
    
        Route::get('/user-reguler', function () {
            return view('dashboard.user.userReguler.index');
        });
    });

    Route::resource('pricelist', DashboardPricelist::class);
});

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/login', function(){
    return view('homepage');
})->name('pop-up-login');

Route::post('/sign-up', [RegisterController::class, 'register']);
Route::post('/login-to', [RegisterController::class, 'login']);
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth']], function(){
    Route::get('/homepage', 'RegisterController@index');
});



Route::middleware(['member'])->group(function(){
    Route::get('/logout', [RegisterController::class, 'logoutMember']);

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

    Route::get('/homepage', [HomeController::class, 'homepage']);
    Route::get('/modul/{id}', [HomeController::class, 'modul']);
    Route::get('/subscribe', [HomeController::class, 'subscribe']);
    Route::get('/profile', [HomeController::class, 'profile']);
    Route::get('/mainpage', [HomeController::class, 'mainPage']);
    Route::get('/payment_dashboard/{id}', [HomeController::class, 'payment']);
    Route::get('/payment/{id}', [HomeController::class, 'paymentStore']);

});