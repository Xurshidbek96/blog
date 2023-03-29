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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});



Route::prefix('user/')->name('user.')->group(function () {

    Route::get('index', function () {
        return view('user.index');
    })->name('index');

    Route::get('about', function () {
        return view('user.about');
    })->name('about');

    Route::get('contact', function () {
        return view('user.contact');
    })->name('contact');

});

Route::prefix('admin/')->name('admin.')->group(function () {

    Route::get('index', function () {
        return view('admin.index');
    })->name('index');

});


