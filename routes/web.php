<?php

use App\Http\Controllers\kelascontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelasiController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SendiriController;
use App\Models\Mahasiswa;
use app\Models\Wali;
use App\Models\Hobi;
use App\Http\Controllers\Penggunacontroller;
use App\Models\Pengguna;
use App\Http\Controllers\teleponcontroller;
use App\Http\Controllers\muridcontroller;
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\pembelicontroller;
use App\Http\Controllers\transaksicontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one_to_one', [RelasiController::class, 'oneToOne']);
Route::get('/wali-ke-mahasiswa', function() {
    $wali = Wali::with('mahasiswa')->find(1);

    return "{$wali->nama} adalah wali dari mahasiswa {$wali->mahasiswa->nama}";
});
Route::get('/one_to_many', [RelasiController::class, 'oneToMany']);

Route::get('/many_to_many', [RelasiController::class, 'manyToMany']);

Route::get('/hobi/bola', function () {
    $hobi = Hobi::where('nama_hobi', 'Bermain Bola')->first();
    foreach ($hobi->mahasiswas as $mhs) {
        echo $mhs->nama . '<br>';
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('index', SendiriController::class);
Route::get('eloquent', [RelasiController::class, 'eloquent']);
Route::resource('pengguna', Penggunacontroller::class);
Route::resource('telepon', teleponcontroller::class);
Route::resource('kelas', kelascontroller::class);
Route::resource('murid', muridcontroller::class);

Route::get('daftarcrud', function () {
    return view('daftarcrud');
});
Route::resource('barang', barangcontroller::class);
Route::resource('pembeli', pembelicontroller::class);
Route::resource('transaksi', transaksicontroller::class);