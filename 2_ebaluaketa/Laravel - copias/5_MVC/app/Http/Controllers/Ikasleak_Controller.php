<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikasleak;

class Ikasleak_Controller extends Controller
{
    //
    public function ikasleak(){
        $emaitza = Ikasleak::all();
        return view('ikasleak_bista', compact('emaitza'));
    }
}