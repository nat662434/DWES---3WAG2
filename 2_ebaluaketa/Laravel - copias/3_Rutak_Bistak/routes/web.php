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

Route::get('irakasleak', function(){
    return view('irakasleak_bista');
});

Route::get('ikasgaiak', function(){
    return view('ikasgaiak_bista');
});

Route::get('notak', function(){
    return view('notak_bista');
});
// })->name(notak);

Route::get('gelak/id/{zbk}', function($zbk){
    return view('gelak_bista', ['zbk'=>$zbk]);
})->where('zbk','[0-9]+');