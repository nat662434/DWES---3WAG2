<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ikasgaiak_Controller extends Controller
{
    //
    public function ikasgaiak(){
        return view('ikasgaiak_bista');
    }

    public function ikasgaiakLetra($letra){
        return view('ikasgaiak_bista');
    }
}
