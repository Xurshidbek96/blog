<?php

use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\HumanController;
use App\Http\Controllers\Admin\NumberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
Route::get('/groups', [SiteController::class, 'groups']);
Route::get('/teachers', [SiteController::class, 'teachers']);

Route::post('/store', [SiteController::class, 'store'])->name('store');


// Admin routes
Route::prefix('admin/')->name('admin.')->group(function(){

    Route::get('index', function (){
        return view('admin.layouts.dashboard');
    });

    Route::resource('/infos', InfoController::class);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/humans', HumanController::class);
    Route::resource('/numbers', NumberController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
