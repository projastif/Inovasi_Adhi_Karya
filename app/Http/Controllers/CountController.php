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

        //Sudut Perhitungan//
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

        //Sudut Alat Ukur//
        $d1b = $decimal/360;
        $d2b = $d1b % 2;
        $derajat2 = floor($d2b);
        $m1b = ($decimal * 60) / 60;
        $m2b = $m1b % 2;
        $meter2 = round($m2b);
        $s1b = $decimal * 3600 / 60;
        $second2 = $s1b % 2;

        //return redirect('/')->with('info','Hasil Dari '.$lokasipertama.' - '.$lokasikedua.' adalah : '.$hasil);
        return redirect('/')->with('info','Lokasi Pertama : ' .$lokasipertama.', Elevasi Pertama : ' .$elevasipertama. ', Lokasi Kedua : ' .$lokasikedua. ', Elevasi Kedua : ' .$elevasikedua. ', Beda Tinggi : ' .$bedatinggi. ', Jarak : ' .$jarak. ', i(%) : ' .$i. ', Δ sin α : ' .$sin. ', D° : ' .$derajat. ', M : ' .$meter. ', S : ' .$second. ', Decimal : ' .$decimal. ', D° : ' .$derajat2. ', M : ' .$meter2. ', S : ' .$second2);
    }

    public function sudut_perhitungan(Request $request){

    }
}
