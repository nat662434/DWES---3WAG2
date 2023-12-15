<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Irakasleak;

class Irakasleak_Controller extends Controller
{
    //
    public function irakasleak(){
        $emaitza = Irakasleak::all();
        return view('Irakasleak_bista', compact('emaitza'));
    }
}
