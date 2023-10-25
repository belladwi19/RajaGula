<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminPelangganController extends Controller
{
    public function index()
    {
        $pelanggan = User::paginate(5);

        return view('Admin.Page.dataPelanggan.pelanggan', compact('pelanggan'));
    }

    
    
    public function delete($id)
    {
        $pelanggan = User::find($id);
        $pelanggan->delete();
        return redirect(route('pelanggan.index'))->with(['success' => 'Hapus Pelanggan Berhasil']);
    }
}
