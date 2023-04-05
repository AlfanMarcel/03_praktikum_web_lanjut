<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class newCon extends Controller
{
    public function index(){
        $warga = Warga::all();
        return view('home',['warga' =>$warga]);
    }
}
