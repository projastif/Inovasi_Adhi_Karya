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
        $sin = asin($i);
        $derajat = 360 / $sin;
        $meter = $sin * 60 / 60;
        $second = $sin * 3600 / 60;
        $decimal = 90 / $sin;

        //return redirect('/')->with('info','Hasil Dari '.$lokasipertama.' - '.$lokasikedua.' adalah : '.$hasil);
        return redirect('/')->with('info','Lokasi Pertama : ' .$lokasipertama.', Elevasi Pertama : ' .$elevasipertama. ', Lokasi Kedua : ' .$lokasikedua. ', Elevasi Kedua : ' .$elevasikedua. ', Beda Tinggi : ' .$bedatinggi. ', Jarak : ' .$jarak. ', i(%) : ' .$i. ', Δ sin α : ' .$sin. ', D° : ' .$derajat. ', M : ' .$meter. ', S : ' .$second. ', Decimal : ' .$decimal);
    }

    public function sudut_perhitungan(Request $request){

    }
}
