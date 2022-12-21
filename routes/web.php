<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// API Menu
function menu(){
    $menu = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/menu"));

    return $menu;
}

function transaksi($tahun){
    $transaksi = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/transaksi?tahun=".$tahun));

    return $transaksi;
}

Route::get('/', function(){
    if(isset($_GET['tahun'])){
        $tahun = $_GET['tahun'];
        $menu = menu();

        $transaksis = collect(transaksi($tahun));

        $total = 0;

        
        foreach($transaksis as $transaksi){
            $total = $total + $transaksi->total;
        }

        $transaksi_bulan_1 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_bulan_2 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_bulan_3 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_bulan_4 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_bulan_5 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_bulan_6 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_bulan_7 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_bulan_8 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_bulan_9 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_bulan_10 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_bulan_11 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_bulan_12 = collect(transaksi($tahun))->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);

        // $transaksi_1_ng = $transaksi_bulan_1[0];

        // dd($transaksi_1_ng);
        $transaksi_ng_1 = 0;
        $transaksi_ng_2 = 0;
        $transaksi_ng_3 = 0;
        $transaksi_ng_4 = 0;
        $transaksi_ng_5 = 0;
        $transaksi_ng_6 = 0;
        $transaksi_ng_7 = 0;
        $transaksi_ng_8 = 0;
        $transaksi_ng_9 = 0;
        $transaksi_ng_10 = 0;
        $transaksi_ng_11 = 0;
        $transaksi_ng_12 = 0;

        
        foreach($transaksi_bulan_1 as $transaksi){
            $transaksi_ng_1 = $transaksi_ng_1 + $transaksi->total;
        }

        foreach($transaksi_bulan_2 as $transaksi){
            $transaksi_ng_2 = $transaksi_ng_2 + $transaksi->total;
        }

        foreach($transaksi_bulan_3 as $transaksi){
            $transaksi_ng_3 = $transaksi_ng_3 + $transaksi->total;
        }

        foreach($transaksi_bulan_4 as $transaksi){
            $transaksi_ng_4 = $transaksi_ng_4 + $transaksi->total;
        }

        foreach($transaksi_bulan_5 as $transaksi){
            $transaksi_ng_5 = $transaksi_ng_5 + $transaksi->total;
        }

        foreach($transaksi_bulan_6 as $transaksi){
            $transaksi_ng_6 = $transaksi_ng_6 + $transaksi->total;
        }

        foreach($transaksi_bulan_7 as $transaksi){
            $transaksi_ng_7 = $transaksi_ng_7 + $transaksi->total;
        }

        foreach($transaksi_bulan_8 as $transaksi){
            $transaksi_ng_8 = $transaksi_ng_8 + $transaksi->total;
        }

        foreach($transaksi_bulan_9 as $transaksi){
            $transaksi_ng_9 = $transaksi_ng_9 + $transaksi->total;
        }

        foreach($transaksi_bulan_10 as $transaksi){
            $transaksi_ng_10 = $transaksi_ng_10 + $transaksi->total;
        }

        foreach($transaksi_bulan_11 as $transaksi){
            $transaksi_ng_11 = $transaksi_ng_11 + $transaksi->total;
        }

        foreach($transaksi_bulan_12 as $transaksi){
            $transaksi_ng_12 = $transaksi_ng_12 + $transaksi->total;
        }

        // dd($transaksi_ng_1);

        $transaksi_1 = collect(transaksi($tahun))->where('menu', 'Nasi Goreng');
        $transaksi_2 = collect(transaksi($tahun))->where('menu', 'Mie Freno');
        $transaksi_3 = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki');
        $transaksi_4 = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu');
        $transaksi_5 = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut');
        $transaksi_6 = collect(transaksi($tahun))->where('menu', 'Teh Hijau');
        $transaksi_7 = collect(transaksi($tahun))->where('menu', 'Teh Lemon');
        $transaksi_8 = collect(transaksi($tahun))->where('menu', 'Teh');
        $transaksi_9 = collect(transaksi($tahun))->where('menu', 'Kopi Hitam');
        $transaksi_10 = collect(transaksi($tahun))->where('menu', 'Kopi Susu');

        $total_1 = 0;
        $total_2 = 0;
        $total_3 = 0;
        $total_4 = 0;
        $total_5 = 0;
        $total_6 = 0;
        $total_7 = 0;
        $total_8 = 0;
        $total_9 = 0;
        $total_10 = 0;

        foreach($transaksi_1 as $transaksi){
            $total_1= $total_1 + $transaksi->total;
        }

        foreach($transaksi_2 as $transaksi){
            $total_2= $total_2 + $transaksi->total;
        }

        foreach($transaksi_3 as $transaksi){
            $total_3= $total_3 + $transaksi->total;
        }

        foreach($transaksi_4 as $transaksi){
            $total_4= $total_4 + $transaksi->total;
        }

        foreach($transaksi_5 as $transaksi){
            $total_5= $total_5 + $transaksi->total;
        }

        foreach($transaksi_6 as $transaksi){
            $total_6= $total_6 + $transaksi->total;
        }

        foreach($transaksi_7 as $transaksi){
            $total_7= $total_7 + $transaksi->total;
        }

        foreach($transaksi_8 as $transaksi){
            $total_8= $total_8 + $transaksi->total;
        }

        foreach($transaksi_9 as $transaksi){
            $total_9= $total_9 + $transaksi->total;
        }

        foreach($transaksi_10 as $transaksi){
            $total_10= $total_10 + $transaksi->total;
        }


        $transaksi_1_jan = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_2_jan = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_3_jan = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_4_jan = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_5_jan = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_6_jan = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_7_jan = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_8_jan = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_9_jan = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);
        $transaksi_10_jan = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-01-01', $tahun.'-01-31']);

        $total_1_jan = 0;
        $total_2_jan = 0;
        $total_3_jan = 0;
        $total_4_jan = 0;
        $total_5_jan = 0;
        $total_6_jan = 0;
        $total_7_jan = 0;
        $total_8_jan = 0;
        $total_9_jan = 0;
        $total_10_jan = 0;

        foreach($transaksi_1_jan as $transaksi){
            $total_1_jan = $total_1_jan + $transaksi->total;
        }

        foreach($transaksi_2_jan as $transaksi){
            $total_2_jan = $total_2_jan + $transaksi->total;
        }

        foreach($transaksi_3_jan as $transaksi){
            $total_3_jan = $total_3_jan + $transaksi->total;
        }

        foreach($transaksi_4_jan as $transaksi){
            $total_4_jan = $total_4_jan + $transaksi->total;
        }

        foreach($transaksi_5_jan as $transaksi){
            $total_5_jan = $total_5_jan + $transaksi->total;
        }

        foreach($transaksi_6_jan as $transaksi){
            $total_6_jan = $total_6_jan + $transaksi->total;
        }

        foreach($transaksi_7_jan as $transaksi){
            $total_7_jan = $total_7_jan + $transaksi->total;
        }

        foreach($transaksi_8_jan as $transaksi){
            $total_8_jan = $total_8_jan + $transaksi->total;
        }

        foreach($transaksi_9_jan as $transaksi){
            $total_9_jan = $total_9_jan + $transaksi->total;
        }

        foreach($transaksi_10_jan as $transaksi){
            $total_10_jan = $total_10_jan + $transaksi->total;
        }

        $transaksi_1_feb = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_2_feb = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_3_feb = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_4_feb = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_5_feb = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_6_feb = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_7_feb = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_8_feb = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_9_feb = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);
        $transaksi_10_feb = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-02-01', $tahun.'-02-29']);


        $total_1_feb = 0;
        $total_2_feb = 0;
        $total_3_feb = 0;
        $total_4_feb = 0;
        $total_5_feb = 0;
        $total_6_feb = 0;
        $total_7_feb = 0;
        $total_8_feb = 0;
        $total_9_feb = 0;
        $total_10_feb = 0;

        foreach($transaksi_1_feb as $transaksi){
            $total_1_feb = $total_1_feb + $transaksi->total;
        }

        foreach($transaksi_2_feb as $transaksi){
            $total_2_feb = $total_2_feb + $transaksi->total;
        }

        foreach($transaksi_3_feb as $transaksi){
            $total_3_feb = $total_3_feb + $transaksi->total;
        }

        foreach($transaksi_4_feb as $transaksi){
            $total_4_feb = $total_4_feb + $transaksi->total;
        }

        foreach($transaksi_5_feb as $transaksi){
            $total_5_feb = $total_5_feb + $transaksi->total;
        }

        foreach($transaksi_6_feb as $transaksi){
            $total_6_feb = $total_6_feb + $transaksi->total;
        }

        foreach($transaksi_7_feb as $transaksi){
            $total_7_feb = $total_7_feb + $transaksi->total;
        }

        foreach($transaksi_8_feb as $transaksi){
            $total_8_feb = $total_8_feb + $transaksi->total;
        }

        foreach($transaksi_9_feb as $transaksi){
            $total_9_feb = $total_9_feb + $transaksi->total;
        }

        foreach($transaksi_10_feb as $transaksi){
            $total_10_feb = $total_10_feb + $transaksi->total;
        }

        $transaksi_1_mar = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_2_mar = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_3_mar = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_4_mar = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_5_mar = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_6_mar = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_7_mar = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_8_mar = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_9_mar = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);
        $transaksi_10_mar = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-03-01', $tahun.'-03-31']);


        $total_1_mar = 0;
        $total_2_mar = 0;
        $total_3_mar = 0;
        $total_4_mar = 0;
        $total_5_mar = 0;
        $total_6_mar = 0;
        $total_7_mar = 0;
        $total_8_mar = 0;
        $total_9_mar = 0;
        $total_10_mar = 0;

        foreach($transaksi_1_mar as $transaksi){
            $total_1_mar = $total_1_mar + $transaksi->total;
        }

        foreach($transaksi_2_mar as $transaksi){
            $total_2_mar = $total_2_mar + $transaksi->total;
        }

        foreach($transaksi_3_mar as $transaksi){
            $total_3_mar = $total_3_mar + $transaksi->total;
        }

        foreach($transaksi_4_mar as $transaksi){
            $total_4_mar = $total_4_mar + $transaksi->total;
        }

        foreach($transaksi_5_mar as $transaksi){
            $total_5_mar = $total_5_mar + $transaksi->total;
        }

        foreach($transaksi_6_mar as $transaksi){
            $total_6_mar = $total_6_mar + $transaksi->total;
        }

        foreach($transaksi_7_mar as $transaksi){
            $total_7_mar = $total_7_mar + $transaksi->total;
        }

        foreach($transaksi_8_mar as $transaksi){
            $total_8_mar = $total_8_mar + $transaksi->total;
        }

        foreach($transaksi_9_mar as $transaksi){
            $total_9_mar = $total_9_mar + $transaksi->total;
        }

        foreach($transaksi_10_mar as $transaksi){
            $total_10_mar = $total_10_mar + $transaksi->total;
        }

        $transaksi_1_apr = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_2_apr = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_3_apr = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_4_apr = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_5_apr = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_6_apr = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_7_apr = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_8_apr = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_9_apr = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);
        $transaksi_10_apr = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-04-01', $tahun.'-04-30']);


        $total_1_apr = 0;
        $total_2_apr = 0;
        $total_3_apr = 0;
        $total_4_apr = 0;
        $total_5_apr = 0;
        $total_6_apr = 0;
        $total_7_apr = 0;
        $total_8_apr = 0;
        $total_9_apr = 0;
        $total_10_apr = 0;

        foreach($transaksi_1_apr as $transaksi){
            $total_1_apr = $total_1_apr + $transaksi->total;
        }

        foreach($transaksi_2_apr as $transaksi){
            $total_2_apr = $total_2_apr + $transaksi->total;
        }

        foreach($transaksi_3_apr as $transaksi){
            $total_3_apr = $total_3_apr + $transaksi->total;
        }

        foreach($transaksi_4_apr as $transaksi){
            $total_4_apr = $total_4_apr + $transaksi->total;
        }

        foreach($transaksi_5_apr as $transaksi){
            $total_5_apr = $total_5_apr + $transaksi->total;
        }

        foreach($transaksi_6_apr as $transaksi){
            $total_6_apr = $total_6_apr + $transaksi->total;
        }

        foreach($transaksi_7_apr as $transaksi){
            $total_7_apr = $total_7_apr + $transaksi->total;
        }

        foreach($transaksi_8_apr as $transaksi){
            $total_8_apr = $total_8_apr + $transaksi->total;
        }

        foreach($transaksi_9_apr as $transaksi){
            $total_9_apr = $total_9_apr + $transaksi->total;
        }

        foreach($transaksi_10_apr as $transaksi){
            $total_10_apr = $total_10_apr + $transaksi->total;
        }

        $transaksi_1_mei = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_2_mei = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_3_mei = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_4_mei = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_5_mei = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_6_mei = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_7_mei = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_8_mei = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_9_mei = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);
        $transaksi_10_mei = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-05-01', $tahun.'-05-31']);


        $total_1_mei = 0;
        $total_2_mei = 0;
        $total_3_mei = 0;
        $total_4_mei = 0;
        $total_5_mei = 0;
        $total_6_mei = 0;
        $total_7_mei = 0;
        $total_8_mei = 0;
        $total_9_mei = 0;
        $total_10_mei = 0;

        foreach($transaksi_1_mei as $transaksi){
            $total_1_mei = $total_1_mei + $transaksi->total;
        }

        foreach($transaksi_2_mei as $transaksi){
            $total_2_mei = $total_2_mei + $transaksi->total;
        }

        foreach($transaksi_3_mei as $transaksi){
            $total_3_mei = $total_3_mei + $transaksi->total;
        }

        foreach($transaksi_4_mei as $transaksi){
            $total_4_mei = $total_4_mei + $transaksi->total;
        }

        foreach($transaksi_5_mei as $transaksi){
            $total_5_mei = $total_5_mei + $transaksi->total;
        }

        foreach($transaksi_6_mei as $transaksi){
            $total_6_mei = $total_6_mei + $transaksi->total;
        }

        foreach($transaksi_7_mei as $transaksi){
            $total_7_mei = $total_7_mei + $transaksi->total;
        }

        foreach($transaksi_8_mei as $transaksi){
            $total_8_mei = $total_8_mei + $transaksi->total;
        }

        foreach($transaksi_9_mei as $transaksi){
            $total_9_mei = $total_9_mei + $transaksi->total;
        }

        foreach($transaksi_10_mei as $transaksi){
            $total_10_mei = $total_10_mei + $transaksi->total;
        }

        $transaksi_1_jun = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_2_jun = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_3_jun = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_4_jun = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_5_jun = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_6_jun = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_7_jun = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_8_jun = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_9_jun = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);
        $transaksi_10_jun = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-06-01', $tahun.'-06-30']);


        $total_1_jun = 0;
        $total_2_jun = 0;
        $total_3_jun = 0;
        $total_4_jun = 0;
        $total_5_jun = 0;
        $total_6_jun = 0;
        $total_7_jun = 0;
        $total_8_jun = 0;
        $total_9_jun = 0;
        $total_10_jun = 0;

        foreach($transaksi_1_jun as $transaksi){
            $total_1_jun = $total_1_jun + $transaksi->total;
        }

        foreach($transaksi_2_jun as $transaksi){
            $total_2_jun = $total_2_jun + $transaksi->total;
        }

        foreach($transaksi_3_jun as $transaksi){
            $total_3_jun = $total_3_jun + $transaksi->total;
        }

        foreach($transaksi_4_jun as $transaksi){
            $total_4_jun = $total_4_jun + $transaksi->total;
        }

        foreach($transaksi_5_jun as $transaksi){
            $total_5_jun = $total_5_jun + $transaksi->total;
        }

        foreach($transaksi_6_jun as $transaksi){
            $total_6_jun = $total_6_jun + $transaksi->total;
        }

        foreach($transaksi_7_jun as $transaksi){
            $total_7_jun = $total_7_jun + $transaksi->total;
        }

        foreach($transaksi_8_jun as $transaksi){
            $total_8_jun = $total_8_jun + $transaksi->total;
        }

        foreach($transaksi_9_jun as $transaksi){
            $total_9_jun = $total_9_jun + $transaksi->total;
        }

        foreach($transaksi_10_jun as $transaksi){
            $total_10_jun = $total_10_jun + $transaksi->total;
        }

        $transaksi_1_jul = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_2_jul = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_3_jul = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_4_jul = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_5_jul = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_6_jul = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_7_jul = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_8_jul = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_9_jul = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);
        $transaksi_10_jul = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-07-01', $tahun.'-07-31']);


        $total_1_jul = 0;
        $total_2_jul = 0;
        $total_3_jul = 0;
        $total_4_jul = 0;
        $total_5_jul = 0;
        $total_6_jul = 0;
        $total_7_jul = 0;
        $total_8_jul = 0;
        $total_9_jul = 0;
        $total_10_jul = 0;

        foreach($transaksi_1_jul as $transaksi){
            $total_1_jul = $total_1_jul + $transaksi->total;
        }

        foreach($transaksi_2_jul as $transaksi){
            $total_2_jul = $total_2_jul + $transaksi->total;
        }

        foreach($transaksi_3_jul as $transaksi){
            $total_3_jul = $total_3_jul + $transaksi->total;
        }

        foreach($transaksi_4_jul as $transaksi){
            $total_4_jul = $total_4_jul + $transaksi->total;
        }

        foreach($transaksi_5_jul as $transaksi){
            $total_5_jul = $total_5_jul + $transaksi->total;
        }

        foreach($transaksi_6_jul as $transaksi){
            $total_6_jul = $total_6_jul + $transaksi->total;
        }

        foreach($transaksi_7_jul as $transaksi){
            $total_7_jul = $total_7_jul + $transaksi->total;
        }

        foreach($transaksi_8_jul as $transaksi){
            $total_8_jul = $total_8_jul + $transaksi->total;
        }

        foreach($transaksi_9_jul as $transaksi){
            $total_9_jul = $total_9_jul + $transaksi->total;
        }

        foreach($transaksi_10_jul as $transaksi){
            $total_10_jul = $total_10_jul + $transaksi->total;
        }

        $transaksi_1_ags = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_2_ags = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_3_ags = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_4_ags = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_5_ags = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_6_ags = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_7_ags = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_8_ags = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_9_ags = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);
        $transaksi_10_ags = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-08-01', $tahun.'-08-31']);


        $total_1_ags = 0;
        $total_2_ags = 0;
        $total_3_ags = 0;
        $total_4_ags = 0;
        $total_5_ags = 0;
        $total_6_ags = 0;
        $total_7_ags = 0;
        $total_8_ags = 0;
        $total_9_ags = 0;
        $total_10_ags = 0;

        foreach($transaksi_1_ags as $transaksi){
            $total_1_ags = $total_1_ags + $transaksi->total;
        }

        foreach($transaksi_2_ags as $transaksi){
            $total_2_ags = $total_2_ags + $transaksi->total;
        }

        foreach($transaksi_3_ags as $transaksi){
            $total_3_ags = $total_3_ags + $transaksi->total;
        }

        foreach($transaksi_4_ags as $transaksi){
            $total_4_ags = $total_4_ags + $transaksi->total;
        }

        foreach($transaksi_5_ags as $transaksi){
            $total_5_ags = $total_5_ags + $transaksi->total;
        }

        foreach($transaksi_6_ags as $transaksi){
            $total_6_ags = $total_6_ags + $transaksi->total;
        }

        foreach($transaksi_7_ags as $transaksi){
            $total_7_ags = $total_7_ags + $transaksi->total;
        }

        foreach($transaksi_8_ags as $transaksi){
            $total_8_ags = $total_8_ags + $transaksi->total;
        }

        foreach($transaksi_9_ags as $transaksi){
            $total_9_ags = $total_9_ags + $transaksi->total;
        }

        foreach($transaksi_10_ags as $transaksi){
            $total_10_ags = $total_10_ags + $transaksi->total;
        }

        $transaksi_1_sep = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_2_sep = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_3_sep = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_4_sep = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_5_sep = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_6_sep = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_7_sep = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_8_sep = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_9_sep = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);
        $transaksi_10_sep = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-09-01', $tahun.'-09-30']);


        $total_1_sep = 0;
        $total_2_sep = 0;
        $total_3_sep = 0;
        $total_4_sep = 0;
        $total_5_sep = 0;
        $total_6_sep = 0;
        $total_7_sep = 0;
        $total_8_sep = 0;
        $total_9_sep = 0;
        $total_10_sep = 0;

        foreach($transaksi_1_sep as $transaksi){
            $total_1_sep = $total_1_sep + $transaksi->total;
        }

        foreach($transaksi_2_sep as $transaksi){
            $total_2_sep = $total_2_sep + $transaksi->total;
        }

        foreach($transaksi_3_sep as $transaksi){
            $total_3_sep = $total_3_sep + $transaksi->total;
        }

        foreach($transaksi_4_sep as $transaksi){
            $total_4_sep = $total_4_sep + $transaksi->total;
        }

        foreach($transaksi_5_sep as $transaksi){
            $total_5_sep = $total_5_sep + $transaksi->total;
        }

        foreach($transaksi_6_sep as $transaksi){
            $total_6_sep = $total_6_sep + $transaksi->total;
        }

        foreach($transaksi_7_sep as $transaksi){
            $total_7_sep = $total_7_sep + $transaksi->total;
        }

        foreach($transaksi_8_sep as $transaksi){
            $total_8_sep = $total_8_sep + $transaksi->total;
        }

        foreach($transaksi_9_sep as $transaksi){
            $total_9_sep = $total_9_sep + $transaksi->total;
        }

        foreach($transaksi_10_sep as $transaksi){
            $total_10_sep = $total_10_sep + $transaksi->total;
        }

        $transaksi_1_okt = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_2_okt = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_3_okt = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_4_okt = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_5_okt = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_6_okt = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_7_okt = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_8_okt = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_9_okt = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);
        $transaksi_10_okt = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-10-01', $tahun.'-10-31']);

        $total_1_okt = 0;
        $total_2_okt = 0;
        $total_3_okt = 0;
        $total_4_okt = 0;
        $total_5_okt = 0;
        $total_6_okt = 0;
        $total_7_okt = 0;
        $total_8_okt = 0;
        $total_9_okt = 0;
        $total_10_okt = 0;

        foreach($transaksi_1_okt as $transaksi){
            $total_1_okt = $total_1_okt + $transaksi->total;
        }

        foreach($transaksi_2_okt as $transaksi){
            $total_2_okt = $total_2_okt + $transaksi->total;
        }

        foreach($transaksi_3_okt as $transaksi){
            $total_3_okt = $total_3_okt + $transaksi->total;
        }

        foreach($transaksi_4_okt as $transaksi){
            $total_4_okt = $total_4_okt + $transaksi->total;
        }

        foreach($transaksi_5_okt as $transaksi){
            $total_5_okt = $total_5_okt + $transaksi->total;
        }

        foreach($transaksi_6_okt as $transaksi){
            $total_6_okt = $total_6_okt + $transaksi->total;
        }

        foreach($transaksi_7_okt as $transaksi){
            $total_7_okt = $total_7_okt + $transaksi->total;
        }

        foreach($transaksi_8_okt as $transaksi){
            $total_8_okt = $total_8_okt + $transaksi->total;
        }

        foreach($transaksi_9_okt as $transaksi){
            $total_9_okt = $total_9_okt + $transaksi->total;
        }

        foreach($transaksi_10_okt as $transaksi){
            $total_10_okt = $total_10_okt + $transaksi->total;
        }

        $transaksi_1_nov = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_2_nov = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_3_nov = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_4_nov = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_5_nov = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_6_nov = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_7_nov = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_8_nov = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_9_nov = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);
        $transaksi_10_nov = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-11-01', $tahun.'-11-30']);


        $total_1_nov = 0;
        $total_2_nov = 0;
        $total_3_nov = 0;
        $total_4_nov = 0;
        $total_5_nov = 0;
        $total_6_nov = 0;
        $total_7_nov = 0;
        $total_8_nov = 0;
        $total_9_nov = 0;
        $total_10_nov = 0;

        foreach($transaksi_1_nov as $transaksi){
            $total_1_nov = $total_1_nov + $transaksi->total;
        }

        foreach($transaksi_2_nov as $transaksi){
            $total_2_nov = $total_2_nov + $transaksi->total;
        }

        foreach($transaksi_3_nov as $transaksi){
            $total_3_nov = $total_3_nov + $transaksi->total;
        }

        foreach($transaksi_4_nov as $transaksi){
            $total_4_nov = $total_4_nov + $transaksi->total;
        }

        foreach($transaksi_5_nov as $transaksi){
            $total_5_nov = $total_5_nov + $transaksi->total;
        }

        foreach($transaksi_6_nov as $transaksi){
            $total_6_nov = $total_6_nov + $transaksi->total;
        }

        foreach($transaksi_7_nov as $transaksi){
            $total_7_nov = $total_7_nov + $transaksi->total;
        }

        foreach($transaksi_8_nov as $transaksi){
            $total_8_nov = $total_8_nov + $transaksi->total;
        }

        foreach($transaksi_9_nov as $transaksi){
            $total_9_nov = $total_9_nov + $transaksi->total;
        }

        foreach($transaksi_10_nov as $transaksi){
            $total_10_nov = $total_10_nov + $transaksi->total;
        }

        $transaksi_1_des = collect(transaksi($tahun))->where('menu', 'Nasi Goreng')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_2_des = collect(transaksi($tahun))->where('menu', 'Mie Freno')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_3_des = collect(transaksi($tahun))->where('menu', 'Nasi Teriyaki')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_4_des = collect(transaksi($tahun))->where('menu', 'Nasi Ayam Katsu')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_5_des = collect(transaksi($tahun))->where('menu', 'Nasi Goreng Mawut')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_6_des = collect(transaksi($tahun))->where('menu', 'Teh Hijau')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_7_des = collect(transaksi($tahun))->where('menu', 'Teh Lemon')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_8_des = collect(transaksi($tahun))->where('menu', 'Teh')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_9_des = collect(transaksi($tahun))->where('menu', 'Kopi Hitam')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);
        $transaksi_10_des = collect(transaksi($tahun))->where('menu', 'Kopi Susu')->whereBetween('tanggal',[$tahun.'-12-01', $tahun.'-12-31']);

        $total_1_des = 0;
        $total_2_des = 0;
        $total_3_des = 0;
        $total_4_des = 0;
        $total_5_des = 0;
        $total_6_des = 0;
        $total_7_des = 0;
        $total_8_des = 0;
        $total_9_des = 0;
        $total_10_des = 0;

        foreach($transaksi_1_des as $transaksi){
            $total_1_des = $total_1_des + $transaksi->total;
        }

        foreach($transaksi_2_des as $transaksi){
            $total_2_des = $total_2_des + $transaksi->total;
        }

        foreach($transaksi_3_des as $transaksi){
            $total_3_des = $total_3_des + $transaksi->total;
        }

        foreach($transaksi_4_des as $transaksi){
            $total_4_des = $total_4_des + $transaksi->total;
        }

        foreach($transaksi_5_des as $transaksi){
            $total_5_des = $total_5_des + $transaksi->total;
        }

        foreach($transaksi_6_des as $transaksi){
            $total_6_des = $total_6_des + $transaksi->total;
        }

        foreach($transaksi_7_des as $transaksi){
            $total_7_des = $total_7_des + $transaksi->total;
        }

        foreach($transaksi_8_des as $transaksi){
            $total_8_des = $total_8_des + $transaksi->total;
        }

        foreach($transaksi_9_des as $transaksi){
            $total_9_des = $total_9_des + $transaksi->total;
        }

        foreach($transaksi_10_des as $transaksi){
            $total_10_des = $total_10_des + $transaksi->total;
        }

        // dd(array_sum($total_2_feb));

        return view('index.intermediate', [
            'tahun' => $tahun,
            'menu' => $menu,
            'total' => $total,
            'jan_total' => $transaksi_ng_1,
            'feb_total' => $transaksi_ng_2,
            'mar_total' => $transaksi_ng_3,
            'apr_total' => $transaksi_ng_4,
            'mei_total' => $transaksi_ng_5,
            'jun_total' => $transaksi_ng_6,
            'jul_total' => $transaksi_ng_7,
            'ags_total' => $transaksi_ng_8,
            'sep_total' => $transaksi_ng_9,
            'okt_total' => $transaksi_ng_10,
            'nov_total' => $transaksi_ng_11,
            'des_total' => $transaksi_ng_12,
            'total_1' => $total_1,
            'total_2' => $total_2,
            'total_3' => $total_3,
            'total_4' => $total_4,
            'total_5' => $total_5,
            'total_6' => $total_6,
            'total_7' => $total_7,
            'total_8' => $total_8,
            'total_9' => $total_9,
            'total_10' => $total_10,
            'total_1_jan' => $total_1_jan,
            'total_2_jan' => $total_2_jan,
            'total_3_jan' => $total_3_jan,
            'total_4_jan' => $total_4_jan,
            'total_5_jan' => $total_5_jan,
            'total_6_jan' => $total_6_jan,
            'total_7_jan' => $total_7_jan,
            'total_8_jan' => $total_8_jan,
            'total_9_jan' => $total_9_jan,
            'total_10_jan' => $total_10_jan,
            'total_1_feb' => $total_1_feb,
            'total_2_feb' => $total_2_feb,
            'total_3_feb' => $total_3_feb,
            'total_4_feb' => $total_4_feb,
            'total_5_feb' => $total_5_feb,
            'total_6_feb' => $total_6_feb,
            'total_7_feb' => $total_7_feb,
            'total_8_feb' => $total_8_feb,
            'total_9_feb' => $total_9_feb,
            'total_10_feb' => $total_10_feb,
            'total_1_mar' => $total_1_mar,
            'total_2_mar' => $total_2_mar,
            'total_3_mar' => $total_3_mar,
            'total_4_mar' => $total_4_mar,
            'total_5_mar' => $total_5_mar,
            'total_6_mar' => $total_6_mar,
            'total_7_mar' => $total_7_mar,
            'total_8_mar' => $total_8_mar,
            'total_9_mar' => $total_9_mar,
            'total_10_mar' => $total_10_mar,
            'total_1_apr' => $total_1_apr,
            'total_2_apr' => $total_2_apr,
            'total_3_apr' => $total_3_apr,
            'total_4_apr' => $total_4_apr,
            'total_5_apr' => $total_5_apr,
            'total_6_apr' => $total_6_apr,
            'total_7_apr' => $total_7_apr,
            'total_8_apr' => $total_8_apr,
            'total_9_apr' => $total_9_apr,
            'total_10_apr' => $total_10_apr,
            'total_1_mei' => $total_1_mei,
            'total_2_mei' => $total_2_mei,
            'total_3_mei' => $total_3_mei,
            'total_4_mei' => $total_4_mei,
            'total_5_mei' => $total_5_mei,
            'total_6_mei' => $total_6_mei,
            'total_7_mei' => $total_7_mei,
            'total_8_mei' => $total_8_mei,
            'total_9_mei' => $total_9_mei,
            'total_10_mei' => $total_10_mei,
            'total_1_jun' => $total_1_jun,
            'total_2_jun' => $total_2_jun,
            'total_3_jun' => $total_3_jun,
            'total_4_jun' => $total_4_jun,
            'total_5_jun' => $total_5_jun,
            'total_6_jun' => $total_6_jun,
            'total_7_jun' => $total_7_jun,
            'total_8_jun' => $total_8_jun,
            'total_9_jun' => $total_9_jun,
            'total_10_jun' => $total_10_jun,
            'total_1_jul' => $total_1_jul,
            'total_2_jul' => $total_2_jul,
            'total_3_jul' => $total_3_jul,
            'total_4_jul' => $total_4_jul,
            'total_5_jul' => $total_5_jul,
            'total_6_jul' => $total_6_jul,
            'total_7_jul' => $total_7_jul,
            'total_8_jul' => $total_8_jul,
            'total_9_jul' => $total_9_jul,
            'total_10_jul' => $total_10_jul,
            'total_1_ags' => $total_1_ags,
            'total_2_ags' => $total_2_ags,
            'total_3_ags' => $total_3_ags,
            'total_4_ags' => $total_4_ags,
            'total_5_ags' => $total_5_ags,
            'total_6_ags' => $total_6_ags,
            'total_7_ags' => $total_7_ags,
            'total_8_ags' => $total_8_ags,
            'total_9_ags' => $total_9_ags,
            'total_10_ags' => $total_10_ags,
            'total_1_sep' => $total_1_sep,
            'total_2_sep' => $total_2_sep,
            'total_3_sep' => $total_3_sep,
            'total_4_sep' => $total_4_sep,
            'total_5_sep' => $total_5_sep,
            'total_6_sep' => $total_6_sep,
            'total_7_sep' => $total_7_sep,
            'total_8_sep' => $total_8_sep,
            'total_9_sep' => $total_9_sep,
            'total_10_sep' => $total_10_sep,
            'total_1_okt' => $total_1_okt,
            'total_2_okt' => $total_2_okt,
            'total_3_okt' => $total_3_okt,
            'total_4_okt' => $total_4_okt,
            'total_5_okt' => $total_5_okt,
            'total_6_okt' => $total_6_okt,
            'total_7_okt' => $total_7_okt,
            'total_8_okt' => $total_8_okt,
            'total_9_okt' => $total_9_okt,
            'total_10_okt' => $total_10_okt,
            'total_1_nov' => $total_1_nov,
            'total_2_nov' => $total_2_nov,
            'total_3_nov' => $total_3_nov,
            'total_4_nov' => $total_4_nov,
            'total_5_nov' => $total_5_nov,
            'total_6_nov' => $total_6_nov,
            'total_7_nov' => $total_7_nov,
            'total_8_nov' => $total_8_nov,
            'total_9_nov' => $total_9_nov,
            'total_10_nov' => $total_10_nov,
            'total_1_des' => $total_1_des,
            'total_2_des' => $total_2_des,
            'total_3_des' => $total_3_des,
            'total_4_des' => $total_4_des,
            'total_5_des' => $total_5_des,
            'total_6_des' => $total_6_des,
            'total_7_des' => $total_7_des,
            'total_8_des' => $total_8_des,
            'total_9_des' => $total_9_des,
            'total_10_des' => $total_10_des,
            
        ]);
    }

    return view('index.intermediate');
});
