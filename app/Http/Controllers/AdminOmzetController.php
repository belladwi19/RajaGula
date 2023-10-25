<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class AdminOmzetController extends Controller
{
    public function index()
    {
        return view('Admin.Page.dataOmzet.omzet');
    }

    public function search(Request $request)
    {
        $request->validate([
            'bulan'               => 'required',
            'tahun'               => 'required',
        ]);

        $tahun = $request->tahun;

        $bulan = date('F', mktime(0, 0, 0, $request->bulan, 10));

        $order = order::with(['user'])
        ->whereYear('created_at', '=', $request->tahun)
        ->whereMonth('created_at', '=', $request->bulan)
        ->get();

        $tot = order::whereYear('created_at', '=', $request->tahun)
            ->whereMonth('created_at', '=', $request->bulan)
            ->sum(order::raw('total'));

        return view('Admin.Page.dataOmzet.detail', compact('order', 'tot', 'tahun', 'bulan'));
    }
}
