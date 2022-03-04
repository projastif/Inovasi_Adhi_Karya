<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountController extends Controller
{
    public function hitung(Request $request){
        
        // $lokasipertama = $request->input('lokasi1');
        // $lokasikedua = $request->input('lokasi2');
        // $elevasipertama = $request->input('elevasi1');
        // $elevasikedua = $request->input('elevasi2');
        // $jarak = $request->input('jarak');

        $firstloc = $request->input('lokasi1');
        $secondloc = $request->input('lokasi2');
        $firstelev = $request->input('elevasi1');
        $secondelev = $request->input('elevasi2');
        $distance = $request->input('jarak');

        //Sudut Perhitungan//
        // $heightdiff = $firstelev - $secondelev;
        // $ipercent = round(($heightdiff / $distance),6);
        // $deltasin = round((rad2deg(sin($ipercent))+0.00002),5);
        // $degree = round($deltasin % 360);
        // $meterrun = round(($deltasin * 60) % 60);
        // $timesec = ($deltasin * 3600) % 60;
        // $decimal = round((90 - $deltasin), 5);
        
        // //Sudut Alat Ukur//
        // $degree2 = $decimal % 360;
        // $meterrun2 = ($decimal * 60) % 60;
        // $timesec2 = floor($decimal * 3600 % 60);

        //Sudut Perhitungan//
        $heightdiff = $firstelev - $secondelev;
        $ipercent = round(($heightdiff / $distance),7);
        //$deltasin = round((rad2deg(sin($ipercent))+0.00002),5);
        $deltasin = round(rad2deg(sin($ipercent)),5);
        $degree = round($deltasin % 360);
        $meterrun = round(($deltasin * 60) % 60);
        $timesec = ($deltasin * 3600) % 60;
        $decimal = round((90 - $deltasin), 5);

        //Sudut Alat Ukur//
        $degree2 = $decimal % 360;
        $meterrun2 = ($decimal * 60) % 60;
        $timesec2 = floor($decimal * 3600 % 60);

        //Sudut Alat Ukur//
        // $bedatinggi = $elevasipertama-$elevasikedua;
        // $i = round(($bedatinggi / $jarak),6);
        // $degree = asin($i);
        // $sin = round(rad2deg(sin($i)),5);
        // $d1 = $sin / 360;
        // $d2 = $d1 % 2;
        // $derajat = round($sin % 360);
        // //$m1 = $sin * 60.60;
        // //$m2 = $m1 % 2;
        // $meter = round(($sin * 60) % 60);
        // //$s1 = $sin * 3600 / 60;
        // //$second = round((($sin * 3600) % 60), 5);
        // $s1 = ($sin * 3600) % 60;
        // $second = round($s1, 5);
        // $decimal = round((90 - $sin),5);

        // //Sudut Alat Ukur//
        // $d1b = $decimal/360;
        // $d2b = $d1b % 2;
        // $derajat2 = $decimal % 360;
        // $m1b = ($decimal * 60) / 60;
        // $m2b = $m1b % 2;
        // $meter2 = ($decimal * 60) % 60;
        // $s1b = $decimal * 3600 / 60;
        // //$second2 = ($decimal * 3600) % 60;
        // //$second2 = round(floor((($decimal * 3600) % 60),2));
        // $second2 = floor(($decimal * 3600)%60);

        //return redirect('/')->with('info','Hasil Dari '.$lokasipertama.' - '.$lokasikedua.' adalah : '.$hasil);
        return redirect('/')->with('info','Lokasi Pertama : ' .$firstloc.', Elevasi Pertama : ' .$firstelev. ', Lokasi Kedua : ' .$secondloc. ', Elevasi Kedua : ' .$secondelev. ', Beda Tinggi : ' .$heightdiff. ', Jarak : ' .$distance. ', i(%) : ' .$ipercent. ', Δ sin α : ' .$deltasin. ', D° : ' .$degree. ', M : ' .$meterrun. ', S : ' .$timesec. ', Decimal : ' .$decimal. ', D° : ' .$degree2. ', M : ' .$meterrun2. ', S : ' .$timesec2);
    }

    public function hitung2(Request $request){
        $derajat = $request->input('derajat');
        $meter = $request->input('meter');
        $second = $request->input('second');
        $pipa = $request->input('pipa');
        $penurunanalat = $request->input('alat');
        $jarakmonitor = $request->input('jarakmonitor');


        $desimal = $derajat + ($meter/60) + ($second/3600);
        $jarak = ($pipa * 2.43) + 2.1;
        $sudut = 90 - $desimal;
        $sin = deg2rad(sin($sudut));
        $bedatinggi = $sin * $jarak;
        $devbedatinggi = $bedatinggi - $penurunanalat;
        $devtotalactual = $devbedatinggi + $jarakmonitor;

        return redirect('/')->with('info','Derajat : ' .$derajat. ', M : ' .$meter. ', S : ' .$second. ', Desimal : '.$desimal. ', Jarak : ' .$jarak. ', Sudut : ' .$sudut. ', Sin : ' .$sin. ', Beda Tinggi : ' .$bedatinggi. ', Penurunan Alat T0 : ' .$penurunanalat. ', Beda Tinggi + Deviasi : '  .$devbedatinggi. ', Jarak Center Monitor : ' .$jarakmonitor. ', Total Beda Tinggi Aktual : ' .$devtotalactual);
    }
}
