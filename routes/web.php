<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelasiController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SendiriController;
use App\Models\Mahasiswa;
use app\Models\Wali;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one_to_one', [RelasiController::class, 'oneToOne']);
Route::get('/wali-ke-mahasiswa', function() {
    $wali = Wali::with('mahasiswa')->find(1);

    return "{$wali->nama} adalah wali dari mahasiswa {$wali->mahasiswa->nama}";
});
Route::get('/one_to_many', [RelasiController::class, 'oneToMany']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('index', SendiriController::class);
