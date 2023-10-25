<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\order;
use App\Models\transaksi;

class AdminTransaksiController extends Controller
{
    public function index()
    {
        $trans = order::with(['user'])->orderBy('created_at', 'desc')->paginate(5);

        return view('Admin.Page.dataTransaksi.transaksi', compact('trans'));
    }

    public function view($no_order)
    {
        $order = order::orderBy('created_at', 'desc')->get();

        $trans = transaksi::with(['produk'])->where('no_order', $no_order)->paginate(5);

        return view('Admin.Page.dataTransaksi.detail', compact('trans', 'order'));
    }

    public function update($id)
    {
        
        $order = order::find($id);

        $order->status     = 'Confirmed';
        $order->save();

        return redirect(route('admintransaksi.index'))->with(['success' => 'Pesanan Berhasil di Proses']);
    }

    public function kirim($id)
    {
        
        $order = order::find($id);

        $order->status     = 'Barang Kirim';
        $order->save();

        return redirect(route('admintransaksi.index'))->with(['success' => 'Pesanan Berhasil di Proses']);
    }
}
