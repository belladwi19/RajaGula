<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\kategori;
use App\Models\produk;
use App\Models\order;

class AdminHomeController extends Controller
{
    public function index()
    {
        $pelanggan = User::count();

        $kategori = kategori::count();

        $produk = produk::count();

        $order = order::count();

        return view('Admin.Page.dashboard.dashboard', compact('pelanggan', 'kategori', 'produk', 'order'));
    }
}
