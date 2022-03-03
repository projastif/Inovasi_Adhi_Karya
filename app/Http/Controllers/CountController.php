<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountController extends Controller
{
    public function hitung(Request $request){
        
        $lokasipertama = $request->input('lokasi1');
        $lokasikedua = $request->input('lokasi2');
        $elevasipertama = $request->input('elevasi1');
        $elevasikedua = $request->input('elevasi2');
        $jarak = $request->input('jarak');


        $bedatinggi = $elevasipertama-$elevasikedua;
        $i = $bedatinggi / $jarak;
        $degree = asin($i);
        $sin = rad2deg(sin($i));
        $d1 = $sin / 360;
        $d2 = $d1 % 2;
        $derajat = floor($d2);
        $m1 = ($sin * 60) / 60;
        $m2 = $m1 % 2;
        $meter = round($m2);
        $s1 = $sin * 3600 / 60;
        $second = $s1 % 2;
        $decimal = 90 / $sin;

        //return redirect('/')->with('info','Hasil Dari '.$lokasipertama.' - '.$lokasikedua.' adalah : '.$hasil);
        return redirect('/')->with('info','Lokasi Pertama : ' .$lokasipertama.', Elevasi Pertama : ' .$elevasipertama. ', Lokasi Kedua : ' .$lokasikedua. ', Elevasi Kedua : ' .$elevasikedua. ', Beda Tinggi : ' .$bedatinggi. ', Jarak : ' .$jarak. ', i(%) : ' .$i. ', Δ sin α : ' .$sin. ', D° : ' .$derajat. ', M : ' .$meter. ', S : ' .$second. ', Decimal : ' .$decimal);
    }

    public function sudut_perhitungan(Request $request){

    }
}
