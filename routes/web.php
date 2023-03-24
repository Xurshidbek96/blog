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
    return 1;
});

Route::get('/test/{a}/{b}/{z}', function ($a, $b, $z) {

    $c = $a + $b + $z;

    return $c ;

});

// start Begin 6
Route::get('/begin5/{a}', function($a){
    $v = pow($a, 3);
    $s = 6*$a*$a;

    return 'hajmi : '.$v.'<br> Yuzasi : '.$s.'<br>';
});
// end begin 6

