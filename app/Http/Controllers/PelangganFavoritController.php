<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Favorit;
use Session;



class PelangganFavoritController extends Controller
{
    public function index()
    {
        if(Session::has('user')){
            $favorit = Favorit::with(['produk'])->where('id_user', Auth::user()->id)->paginate(5);

            return view('Pelanggan.page.favorit.favorit', compact('favorit'));
        }
        else{
            return redirect()->route('home.index')->with(['success' => 'Silahkan Login Terlebih Dahulu']);
        }
    }

    public function create($id)
    {
        if(Session::has('user')){
            $produk = Produk::find($id)->id;
            $user_id = Auth::user()->id;

            $favorit = new Favorit;

            $favorit->id_produk = $produk;
            $favorit->id_user = $user_id;
            $favorit->save();

            return redirect(route('favorit.index'));

        }
        else{
            return redirect()->route('home.index')->with(['success' => 'Silahkan Login Terlebih Dahulu']);
        }

    }

    public function delete($id)
    {
        $favorit = Favorit::find($id);
        $favorit->delete();

        return redirect(route('favorit.index'))->with(['success' => 'Delete Favorit Berhasil']);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $favorit = Favorit::with(['produk'])
            ->where('id_user', Auth::user()->id)
            ->paginate(5);

        return view('Pelanggan.page.favorit.favorit', compact('favorit'));
    }

}
