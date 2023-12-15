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

Route::get('ikasleak', 'App\Http\Controllers\Ikasleak_Controller@ikasleak') -> name('ikasleak');

Route::get('irakasleak', 'App\Http\Controllers\Irakasleak_Controller@irakasleak') -> name('irakasleak');

Route::get('ikasgaiak', 'App\Http\Controllers\Ikasgaiak_Controller@ikasgaiak') -> name('ikasgaiak');