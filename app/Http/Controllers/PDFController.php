<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use App\Models\order;
use App\Models\user;
use App\Models\transaksi;

class PDFController extends Controller
{
    public function generatePDF($no_order)
    {
        $order = order::with(['user'])->where('no_order', $no_order)->get();

        $trans = transaksi::with(['produk'])->where('no_order', $no_order)->get();

        set_time_limit(300);
        
        $pdf = PDF::loadView('pelanggan.myPDF', ['trans'=>$trans], ['order'=>$order]);
    
        return $pdf->download('Nota.pdf');
    }
}
