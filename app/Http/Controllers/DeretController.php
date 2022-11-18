<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeretController extends Controller
{
    public function index(request $request){
        $bil1=0;
        $bil2=0;
        $jumlah=0;
        $deret=[0];
        return view('deret', compact('deret'));
    }
    public function hitung(request $request){
        $data = $request->all();
        $tmpBil1 = $data['bil1'];
        $tmpBil2 = $data['bil2'];
        $tmpJumlah = $data['jumlah'];
        $bil1=$tmpBil1;
        $bil2=$tmpBil2;
        $jumlah=$tmpJumlah;
        $deret=[$bil1,$bil2];
        for ($i=1; $i < $jumlah; $i++){
            $deret[$i+1]=$deret[$i-1]+$deret[$i];
        }
        // dd($deret);
        return view('deret', compact('deret'));
    }
}
