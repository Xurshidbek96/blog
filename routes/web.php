<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

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

Route::get('/', [SiteController::class, 'index']);

Route::get('/about/{a}/{b}', [SiteController::class, 'about']);


Route::prefix('user/')->name('user.')->group(function () {

    Route::get('index', [UserController::class, 'index'])->name('index');

    Route::get('about', function () {
        return view('user.about');
    })->name('about');

    Route::get('contact', function () {
        return view('user.contact');
    })->name('contact');

});

Route::prefix('admin/')->name('admin.')->group(function () {

    Route::get('index', [AdminController::class, 'index'])->name('index');

});


