<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecantController extends Controller
{
    public function index(request $request){
        $x0=0;
        $x1=0;
        $jumlah=0;
        $secant=[0];
        return view('secant', compact('secant'));
    }
    public function hitung(request $request){
        $data = $request->all();
        $tmpX0 = $data['x0'];
        $tmpX1 = $data['x1'];
        $tmpJumlah = $data['jumlah'];
        $x0=$tmpX0;
        $x1=$tmpX1;
        $f0=$tmpX0*$tmpX0*$tmpX0-5*$tmpX0+1;
        $f1=$tmpX1*$tmpX1*$tmpX1-5*$tmpX1+1;
        $xn1=$tmpX0-($f0*($tmpX0-$tmpX1))/($f0-$f1);
        $iterasi=$xn1-$tmpX1;
        $jumlah=$tmpJumlah;
        $secant=[$x0,$x1,$f0,$f1,$xn1,$jumlah];
        for ($i=1; $i <= $jumlah; $i++){
            $secant[$i+1]=$iterasi;
        }
        // dd($secant);
        return view('secant', compact('secant'));
    }
}
