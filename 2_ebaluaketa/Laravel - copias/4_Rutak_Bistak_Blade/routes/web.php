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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'App\Http\Controllers\Welcome_Controller@welcome');

/*Route::get('ikasleak', function(){
    return view('ikasleak_bista');
});*/
Route::get('ikasleak', 'App\Http\Controllers\Ikasleak_Controller@ikasleak')->name('ikasleak');

/*Route::get('ikasleak/adina/{zbk}', function($zbk){
    return view('ikasleak_bista', ['zbk'=>$zbk]);
})->where('zbk', '[0-9]+');*/
Route::get('ikasleak/adina/{zbk}', 'App\Http\Controllers\Ikasleak_Controller@ikasleakAdina')->name('ikasleakAdina');

/*Route::get('ikasgaiak', function(){
    return view('ikasgaiak_bista');
});*/
Route::get('ikasgaiak', 'App\Http\Controllers\Ikasgaiak_Controller@ikasgaiak')->name('ikasgaiak');

/*Route::get('ikasgaiak/iragazkia/{letra}', function($letra){
    return view('iragazkia_bista', ['letra'=>$letra]);
});*/
Route::get('ikasgaiak/iragazkia/{letra}', 'App\Http\Controllers\Ikasgaiak_Controller@ikasgaiakLetra')->name('ikasgaiakLetra');
