<?php

use App\Http\Controllers\Admin\InfoController;
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

    Route::get('infos/index', [InfoController::class, 'index'])->name('infos.index');
    Route::get('infos/create', [InfoController::class, 'create'])->name('infos.create');
    Route::post('infos/store', [InfoController::class, 'store'])->name('infos.store');
});
