<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Favorit;
use App\Models\cart;
use Session;

class PelangganCartController extends Controller
{
    public function index()
    {
        if(Session::has('user')){
            $cart = cart::with(['produk'])->where('id_user', Auth::user()->id)->paginate(5);

            $tot = cart::where('id_user', Auth::user()->id)
            ->select('produks.harga', 'produks.id as id_produk', 'produks.harga', 'carts.jumlah', 'carts.id as id')
            ->join('produks', 'produks.id', '=', 'carts.id_produk')
            ->sum(cart::raw('produks.harga * carts.jumlah'));

            return view('Pelanggan.page.cart.cart', compact('cart', 'tot'));
        }
        else{
            return redirect()->route('home.index')->with(['success' => 'Silahkan Login Terlebih Dahulu']);
        }
    }

    public function create($id, Request $request)
    {
        if(Session::has('user')){
            $request->validate([
                'jumlah'        => 'required',
            ]);

            $produk = Produk::find($id)->id;
            $user_id = Auth::user()->id;

            $pro =Produk::find($id);
            
            if($request->jumlah > $pro->stok_produk)
            {
                return redirect(route('home.view', $pro->id))->with(['success' => 'Stok Tidak Tersedia']);
            }
            else{
                $cart = new cart;

                $cart->id_produk = $produk;
                $cart->id_user = $user_id;
                $cart->jumlah = $request->jumlah;
                
                $cart->save();
                Session::put('cart', $cart);

                $pro->stok_produk = $pro->stok_produk-$request->jumlah;
                $pro->save();
            }

            return redirect(route('cart.index'));
        }
        else{
            return redirect()->route('home.index')->with(['success' => 'Silahkan Login Terlebih Dahulu']);
        }
    }

    public function delete($id)
    {
        $cart = cart::find($id);
        $cart->delete();

        return redirect(route('cart.index'))->with(['success' => 'Delete Cart Berhasil']);
    }
}
