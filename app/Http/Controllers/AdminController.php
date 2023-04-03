<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_customer()
    {
        return view('admin.customer');
    }

    public function show_produk()
    {
        return view('admin.produk');
    }

    public function show_pakaian()
    {
        return view('admin.pakaian');
    }

    public function show_sepatu()
    {
        return view('admin.sepatu');
    }

    public function show_sendal()
    {
        return view('admin.sendal');
    }

    public function show_aksesoris()
    {
        return view('admin.aksesoris');
    }

    public function show_grafik()
    {
        return view('admin.grafik');
    }

    public function show_tanggapan()
    {
        return view('admin.tanggapan');
    }

    public function show_grafikTanggapan()
    {
        return view('admin.grafikTanggapan');
    }
}
