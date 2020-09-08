<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/ilkom/kampusbaru', function () {
       $ArrMahasiswa = ["tatang ngorejat","wanwan ngapung","tariutami","Risa Lestari",
        ];
return view('universitas.mahasiswa',['mahasiswa'=> $ArrMahasiswa]);
    });

// Route::get('/mahasiswa',function(){
//     return view('universitas.mahasiswa')
//     ->with('mahasiswa01','risa lestari')
//     ->with('mahasiswa02','dadang sepat')
//     ->with('mahasiswa03','wanwan ngapung');
// });

// menggunakan compact
// Route::get('/mahasiswa',function(){
//     $mahasiswa01 = "risa lestari";
//     $mahasiswa02 = "zilong neverspen";
//     $mahasiswa01 = "wanwan ngapung";
//     $mahasiswa01 = "sedot alice";
// return view('universitas.mahasiswa',compact("mahasiswa01","mahasiswa002","mahasiswa03","mahasiswa04"));
// });

// menggunakan compact dengan with
// Route::get('/mahasiswa',function(){
//     $mahasiswa01 = "risa lestari";
//     $mahasiswa02 = "zilong neverspen";
//     $mahasiswa01 = "wanwan ngapung";
//     $mahasiswa01 = "sedot alice";
// return view('universitas.mahasiswa')->with(compact("mahasiswa01","mahasiswa002","mahasiswa03","mahasiswa04"));
// });

// Route::get('/mahasiswa1/{nama}/{umur}/{kotaAsal}',
//     function ($nama, $umur, $kotaAsal) {
//     return view('universitas.mahasiswa1')
//     ->with('nama', $nama)
//     ->with('umur', $umur)
//     ->with('kotaAsal', $kotaAsal);
// });