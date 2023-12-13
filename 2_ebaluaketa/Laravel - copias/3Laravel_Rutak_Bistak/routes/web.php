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
    return view('ikasleak');
});

Route::get('irakasleak', function(){
    return view('irakasleak');
});

Route::get('ikasgaiak', function(){
    return view('ikasgaiak');
});

Route::get('notak', function(){
    return view('notak');
});