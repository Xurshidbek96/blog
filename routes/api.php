<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/test', function(){
    return DB::table('mahallas')
    ->join('regions', 'mahallas.id_region', '=', 'regions.id')
    ->join('districts', 'mahallas.id_district', '=', 'districts.id')
    ->select('mahallas.*', 'regions.name_uz', 'districts.name_ru')->get();
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
