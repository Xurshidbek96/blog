<?php

use App\Http\Controllers\Admin\InfoController;
// use App\Http\Controllers\Admin\TeacherController;
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

Route::get('/', function(){
    return redirect('/index');
});

Route::auto('/', SiteController::class);

// Admin routes
Route::prefix('admin/')->name('admin.')->middleware(['auth', 'admin'])->group(function(){

    Route::get('index', function (){
        return view('admin.layouts.dashboard');
    });

    Route::resources([
        '/infos' => InfoController::class,
        '/categories' => CategoryController::class,
        '/posts' => PostController::class,
        '/humans' => HumanController::class,
        '/numbers' => NumberController::class
    ]);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
