<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikasgaiak;

class Ikasgaiak_Controller extends Controller
{
    //
    public function ikasgaiak(){
        $emaitza = Ikasgaiak::all();
        return view('ikasgaiak_bista', compact('emaitza'));
    }
}
