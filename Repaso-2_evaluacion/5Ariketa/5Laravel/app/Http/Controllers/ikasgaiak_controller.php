<?php

namespace App\Http\Controllers;

use App\Models\Ikasgaiak;
use Illuminate\Http\Request;

class ikasgaiak_controller extends Controller
{
    public function index()
    {
        $emaitza = Ikasgaiak::all();
        return view("ikasgaiak_bista", compact("emaitza"));
    }
}