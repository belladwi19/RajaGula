<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori::paginate(5);

        return view('Admin.Page.dataKategori.kategori', compact('kategori'));
    }

    public function create_view()
    {
        return view('Admin.Page.dataKategori.create');
    }

    public function create_process(Request $request)
    {
        $request->validate([
            'kategori_nama'            => 'required',
        ]);

        $kategori = new kategori;

        $kategori->kategori                = $request->kategori_nama;
        $kategori->save();

        return redirect(route('kategori.index'))->with(['success' => 'Tambah Kategori Berhasil']);
    }

    public function update_view($id)
    {
        $kategori = kategori::find($id);
        return view('Admin.Page.dataKategori.update', compact('kategori'));
    }

    public function update_process($id, Request $request)
    {
        $request->validate([
            'kategori_nama'            => 'required',
        ]);
        
        $kategori = kategori::find($id);

        $kategori->kategori                = $request->kategori_nama;
        $kategori->save();

        return redirect(route('kategori.index'))->with(['success' => 'Ubah Kategori Berhasil']);
    }

    public function delete($id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();

        return redirect(route('kategori.index'))->with(['success' => 'Delete Kategori Berhasil']);
    }
}