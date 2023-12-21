<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beharrak;


class beharrakController extends Controller
{
    //
    public function index(){
        $emaitza = Beharrak::all();
        return view('beharrak_bista', compact('emaitza'));
    }

    public function erakutsi($id){
        $emaitza = Beharrak::find($id);

        if ($emaitza) {
            return view('beharraka_bista', compact('emaitza'));
        }
    }

    public function gorde(Request $aux){

    }

    public function eguneratu(Request $aux){

    }

    public function ezabatu($id){

    }
}
