<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Froga;   //* añadir esta linea

class Frogak_Controller extends Controller
{
    // funtzio bat datu basetik informazioa lortzeko 
    public function erakutsi(){
        $emaitza=Froga::all();
        return view('froga_bista', compact('emaitza'));
    }
}
