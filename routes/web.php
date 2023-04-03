<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class,'index']);

// Route::post('detail_mahasiswa',[MahasiswaController::class, 'detail_mhs']);

Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
 
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/customer',[AdminController::class,'show_customer']);
Route::get('/admin/produk',[AdminController::class,'show_produk']);
Route::get('/admin/pakaian',[AdminController::class,'show_pakaian']);
Route::get('/admin/sepatu',[AdminController::class,'show_sepatu']);
Route::get('/admin/sendal',[AdminController::class,'show_sendal']);
Route::get('/admin/aksesoris',[AdminController::class,'show_aksesoris']);
Route::get('/admin/grafik',[AdminController::class,'show_grafik']);
Route::get('/admin/tanggapan',[AdminController::class,'show_tanggapan']);
Route::get('/admin/grafikTanggapan',[AdminController::class,'show_grafikTanggapan']);
