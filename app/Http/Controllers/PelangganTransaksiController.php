<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Favorit;
use App\Models\cart;
use App\Models\transaksi;
use App\Models\order;
use Session;

class PelangganTransaksiController extends Controller
{
    public function index()
    {
        if(Session::has('user')){
            $trans = transaksi::with(['produk'])
            ->where('id_user', Auth::user()->id)
            ->paginate(10);

            return view('Pelanggan.page.transaksi.checkout', compact('trans'));
        }
        else{
            return redirect()->route('home.index');
        }
    }

    public function get_checkout()
    {
        if(Session::has('user')){

            $user = User::where('id', Auth::user()->id)->get();

            $trans = cart::with(['produk'])
            ->where('id_user', Auth::user()->id)
            ->paginate(5);

            $order = order::select('no_order')->get();

            $tot = cart::where('id_user', Auth::user()->id)
            ->select('produks.harga', 'produks.id as id_produk', 'produks.harga', 'carts.jumlah', 'carts.id as id')
            ->join('produks', 'produks.id', '=', 'carts.id_produk')
            ->sum(cart::raw('produks.harga * carts.jumlah'));

            return view('Pelanggan.page.transaksi.checkout', compact('trans', 'tot', 'order', 'user'));
        }
        else{
            return redirect()->route('home.index');
        }
    }

    public function create(Request $request)
    {
        if(Session::has('user')){
            $cart =  Cart::count();        
            $user_id = Auth::user()->id;
            $cr = cart::with(['produk'])->where('id_user', Auth::user()->id)->paginate(5);
            $numberorder = Str::random(5);

            $tot = cart::where('id_user', Auth::user()->id)
                ->select('produks.harga', 'produks.id as id_produk', 'produks.harga', 'carts.jumlah', 'carts.id as id')
                ->join('produks', 'produks.id', '=', 'carts.id_produk')
                ->sum(cart::raw('produks.harga * carts.jumlah'));


            $order = new order;
            $order->id_user = $user_id;
            $order->no_order = $numberorder;
            $order->total = $tot;
            $order->save();

            foreach($cr as $c)
            {
                $transaksi = new transaksi;
                $transaksi->id_produk = $c->id_produk;
                $transaksi->id_user = $user_id;
                $transaksi->jumlah =  $c->jumlah;
                $transaksi->no_order = $numberorder;
                $transaksi->save();

                $c->delete();
            }

            return redirect(route('transaksi.uploadview', $order->id));
        }
        else{
            return redirect()->route('home.index');
        }
    }

    public function bayar()
    {
        if(Session::has('user')){
            return redirect()->route('activity.index');
        }
        else{
            return redirect()->route('home.index');
        }
    }

    public function uploadview($id)
    {
        $bayar = order::findOrFail($id);
        return view('Pelanggan.page.transaksi.pembayaran', compact('bayar'));
    }

    public function updateimg($id, Request $request)
    {
        if(Session::has('user')){

           

            $request->validate([
                'foto' => 'mimes:jpg,jpeg,png',
            ]);

            $user_id = Auth::user()->id;

            $bayar = order::find($id);
            
                if ($files = $request->file('foto')) {
                    $destinationPath = 'buktipembayaran/';
                    $file = $request->file('foto');
                    // upload path  
        
                    $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                        $files->getClientOriginalExtension();
                    $pathImg = $file->storeAs('', $profileImage);
                    $files->move($destinationPath, $profileImage);
                    $bayar->buktibayar = $pathImg;
                }

                $bayar->status = 'Sudah Upload Bukti Pembayaran';
                $bayar->save();

            return redirect()->route('activity.index');
        }
    }
}
