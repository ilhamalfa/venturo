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
        $menus = menu();

        $transaksis = transaksi($tahun);

        $total = 0;
        $totalMenuAll['makanan'] = 0;
        $totalMenuAll['minuman'] = 0;

        // Total Keseluruhan
        foreach($transaksis as $transaksi){
            $total = $total + $transaksi->total;
        }

        // Inisialisasi variabel hasil untuk digunakan sebagai array untuk setiap menu pada setiap bulannya
        foreach($menus as $menu){
            for($i = 1; $i <= 12; $i++){
                $hasil[$menu->menu][$i] = 0;
                $totalMenu[$menu->kategori][$i] = 0;
            }
        }

        // Menginput jumlah transaksi pada setiap menu untuk setiap bulannya
        foreach($transaksis as $transaksi){
            $bulan = date('n', strtotime($transaksi->tanggal));
            $hasil[$transaksi->menu][$bulan] = $hasil[$transaksi->menu][$bulan] + $transaksi->total;
        }

        // Inisialisasi variabel totalBulan untuk digunakan sebagai array untuk seluruh total transaksi setiap menu pada setiap bulan
        foreach($transaksis as $transaksi){
            for($i = 1; $i <= 12; $i++){
                $totalBulan[$i] = 0;
            }
        }

        // Menginput jumlah totalBulan transaksi pada setiap menu untuk setiap bulannya
        foreach($transaksis as $transaksi){
            $bulan = date('n', strtotime($transaksi->tanggal));

            $totalBulan[$bulan] = $totalBulan[$bulan] + $transaksi->total;
        }

        // Inisialisasi variabel totalMenu untuk digunakan sebagai array untuk seluruh total transaksi setiap menu
        foreach($menus as $menu){
            $totalMenu[$menu->menu] = 0;
        }

        // Menginput jumlah total transaksi pada setiap menu untuk setiap bulannya
        foreach($transaksis as $transaksi){
            $totalMenu[$transaksi->menu] = $totalMenu[$transaksi->menu] + $transaksi->total;
        }


        foreach($menus as $menu){
            // Menghitung total seluruh makanan per bulan
            if($menu->kategori == 'makanan'){
                foreach($transaksis as $transaksi){
                    $bulan = date('n', strtotime($transaksi->tanggal));

                    if($transaksi->menu == $menu->menu){
                        $totalMenu[$menu->kategori][$bulan] = $totalMenu[$menu->kategori][$bulan] + $transaksi->total;
                    }
                }
            }
            // Menghitung total seluruh minuman per bulan
            else{
                foreach($transaksis as $transaksi){
                    $bulan = date('n', strtotime($transaksi->tanggal));

                    if($transaksi->menu == $menu->menu){
                        $totalMenu[$menu->kategori][$bulan] = $totalMenu[$menu->kategori][$bulan] + $transaksi->total;
                    }
                }
            }
        }

        // dd($totalMenu);

        foreach($transaksis as $transaksi){
            if($transaksi->menu == 'Nasi Goreng' || $transaksi->menu == 'Mie Freno' || $transaksi->menu == 'Nasi Teriyaki' || $transaksi->menu == 'Nasi Ayam Katsu' || $transaksi->menu == 'Nasi Goreng Mawut'){
                $totalMenuAll['makanan'] = $totalMenuAll['makanan'] + $transaksi->total;
            }else{
                $totalMenuAll['minuman'] = $totalMenuAll['minuman'] + $transaksi->total;
            }
        }

        // dd($menus);

        return view('index.intermediate', [
            'tahun' => $tahun,
            'menus' => $menus,
            'total' => $total,
            'hasil' => $hasil,
            'totalBulan' => $totalBulan,
            'totalMenu' => $totalMenu,
            'totalMenu' => $totalMenu,
            'totalMenuAll' => $totalMenuAll
        ]);
    }

    return view('index.intermediate');
});
