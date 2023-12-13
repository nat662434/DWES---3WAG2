<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('ikasleak', function(){
    return view('ikasleak_bista');
});

Route::get('ikasleak/adina/{zbk}', function($zbk){
    return view('ikasleak_bista', ['zbk'=>$zbk]);
})->where('zbk', '[0-9]+');

Route::get('ikasgaiak', function(){
    return view('ikasgaiak_bista');
});

Route::get('ikasgaiak/iragazkia/{letra}', function($letra){
    return view('iragazkia_bista', ['letra'=>$letra]);
});
