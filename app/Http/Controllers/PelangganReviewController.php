<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
use App\Models\review;
use App\Models\order;
use App\Models\transaksi;

use Session;

class PelangganReviewController extends Controller
{
    public function index($id)
    {
        if(Session::has('user')){
            $order = order::findOrFail($id);

            $trans = transaksi::with(['produk'])
            ->where('id_user', Auth::user()->id)
            ->where('no_order', $order->no_order)
            ->paginate(10);

            return view('Pelanggan.page.review.review', compact('trans', 'order'));
        }
        else{
            return redirect()->route('home.index');
        }
    }

    public function create($id, Request $request)
    {
        if(Session::has('user')){

            $current_date_time = date('Y-m-d H:i:s');
            
            $user_id = Auth::user()->id;

            $request->validate([
                'review'            => 'required',
                'produk'          => 'required',
            ]);

            $trans = transaksi::with(['produk'])
            ->where('id_user', Auth::user()->id)
            ->where('no_order', $request->no_order) 
            ->get();

            $review = [];
            for($i = 1; $i <= count($request->review); $i++) {

                $review[] = [
                    'komentar' => $request->review[$i],
                    'id_produk' => $request->produk[$i],
                    'id_user' => $user_id,
                    'created_at' => $current_date_time,
                    'updated_at'    => $current_date_time,
                ];
                
            }
            review::insert($review);

            return redirect(route('home.index'));
        }
        else{
            return redirect()->route('home.index');
        }
    }
}
