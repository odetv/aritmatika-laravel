<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index(request $request){
        $bil=0;
        $hasil=0;
        return view('kalkulator', compact('hasil'));
    }
    public function hitung(request $request){
        $data = $request->all();
        $tmpBil = $data['bil'];
        $tmpHasil = $data['hasil'];
        $bil=$tmpBil;
        $hasil=$tmpHasil;

        return view('kalkulator', compact('deret'));
    }
}
