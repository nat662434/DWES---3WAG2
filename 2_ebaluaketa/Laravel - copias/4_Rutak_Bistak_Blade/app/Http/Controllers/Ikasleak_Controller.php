<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ikasleak_Controller extends Controller
{
    //
    public function ikasleak(){
        return view('ikasleak_bista');
    }

    public function ikasleakAdina($zbk){
        return view('ikasleak_bista');
    }
}
