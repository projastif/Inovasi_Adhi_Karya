<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountController extends Controller
{
    public function hitung(Request $request){
        
        //A. SUDUT JACKING//
            $firstloc = $request->input('lokasi1');
            $secondloc = $request->input('lokasi2');
            $firstelev = $request->input('elevasi1');
            $secondelev = $request->input('elevasi2');
            $distance = $request->input('jarak');

            //Sudut Perhitungan//
            $heightdiff = $firstelev - $secondelev;
            $ipercent = round(($heightdiff / $distance),6);
            //$deltasin = round((rad2deg(sin($ipercent))+0.00002),5);
            $deltasin = round((rad2deg(sin($ipercent))+0.00002),5);
            $degree = round($deltasin % 360);
            $meterrun = round(($deltasin * 60) % 60);
            $timesec = ($deltasin * 3600) % 60;
            $decimal = round((90 - $deltasin), 5);

            //Sudut Alat Ukur//
            $degree2 = $decimal % 360;
            $meterrun2 = ($decimal * 60) % 60;
            $timesec2 = floor($decimal * 3600 % 60);


        //B. BEDA TINGGI DENGAN SUDUT//
            $derajat = $request->input('derajat');
            $meter = $request->input('meter');
            $second = $request->input('second');
            $pipa = $request->input('pipa');
            $long = $request->input('panjangmesin');
            $tooldrop = $request->input('alat');
            $monitor = $request->input('jarakmonitor');

            //Rumus//
            $decimal2 = round($derajat + ($meter / 60) + ($second / 3600),5); //hasil desimal 0 tidak muncul
            $distance2 = round((($pipa * 2.43) + $long),3); //hasil desimal 0 tidak muncul
            $sudut = round((90 - $decimal2),5); //hasil desimal 0 tidak muncul
            $sinus = round(deg2rad(sin($sudut)),5); //hasil desimal 0 tidak muncul
            $heightdiff2 = round((($sinus * $distance2) + 0.00023),5); //hasil masih beda sama yg di excel.
            $devheightdiff = round(($heightdiff2 - $tooldrop),5);
            $actualamount = $devheightdiff + $monitor;


        //C. MONITORING//
        $long2 = $pipa * 2.43 + $long;
        $actualheightdiff = $actualamount;
        $designheightdiff = $heightdiff;
        $deviation = round(($designheightdiff - $actualheightdiff),2);
        $finaldesheightdiff = $heightdiff;
        $devdesignheightdiff = round(($finaldesheightdiff - $actualheightdiff),2);
        $pipa2 = $pipa + 1;


        return redirect('/')->with('info','Lokasi Pertama : ' .$firstloc.', Elevasi Pertama : ' .$firstelev. ', Lokasi Kedua : ' .$secondloc. ', Elevasi Kedua : ' .$secondelev. ', Beda Tinggi : ' .$heightdiff. ', Jarak : ' .$distance. ', i(%) : ' .$ipercent. ', Δ sin α : ' .$deltasin. ', D° : ' .$degree. ', M : ' .$meterrun. ', S : ' .$timesec. ', Decimal : ' .$decimal. ', D° : ' .$degree2. ', M : ' .$meterrun2. ', S : ' .$timesec2. ', Derajat : ' .$derajat. ', M : ' .$meter. ', S : ' .$second. ', Desimal : '.$decimal2. ', Jarak : ' .$distance2. ', Sudut : ' .$sudut. ', Sin : ' .$sinus. ', Beda Tinggi : ' .$heightdiff2. ', Penurunan Alat T0 : ' .$tooldrop. ', Beda Tinggi + Deviasi : '  .$devheightdiff. ', Jarak Center Monitor : ' .$monitor. ', Total Beda Tinggi Aktual : ' .$actualamount. ', Pipa-n : ' .$pipa. ' , Panjang (@2,43) : ' .$long2. ' , Beda Tinggi Aktual : ' .$actualheightdiff. ' , Beda Tinggi Desain : ' .$designheightdiff. ' , Deviasi : ' .$deviation. ' , Beda Tinggi Desain Akhir (@' .$pipa2.' Pipa ) : ' .$finaldesheightdiff. ' , Deviasi Desain Akhir (@' .$pipa2. ' Pipa) : ' .$devdesignheightdiff);
    }    
}
