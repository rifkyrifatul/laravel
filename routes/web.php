<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\LihatNilaiController;
use App\http\controllers\DashboardController;
use App\http\controllers\PagenotController;
use App\http\controllers\KartuController;
use App\http\controllers\JenisProdukController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/', function() {
    return view ('Welcome');
});

route :: get('/salam', function() {
    return "Assalamualaikum selamat belajar laravel";
});
//tambah routing
route :: get('/staff/{nama}/{divisi}', function($nama, $divisi){
    return 'Nama Pegawai : '.$nama. '<br> Departemen : '.$divisi;
});
//routing dengan memanggil nama file dari view
route::get('/kondisi', function(){
    return view('kondisi');
});
route::get('/nilai', function(){
    return view('coba.nilai');
});
//routing dengan view dan array data
route::get('/daftarnilai', function(){
    return view('coba.daftar');
});
//routing manggil dari class controller
route::get('/datamahasiswa', [LihatNilaiController::class, 'dataMahasiswa']);

route::get('/dashboard', [DashboardController::class, 'index']);
//pemanggilan secara satu persatu function menggunakan get, put, update, delete
route::get('/notfound', [PagenotController::class, 'index']);
//memanggil seluruh function menggunakan resource
route::resource('kartu', KartuController::class);
//memanggil fungsi satu persatu
route::get('/jenis_produk', [JenisProdukController::class, 'index']);