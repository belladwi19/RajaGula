<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Session;

class PelangganAccountController extends Controller
{
    public function index()
    {   
        if(Session::has('user')){
            $account = user::where('id', Auth::user()->id)->firstOrFail();
            
            return view('Pelanggan.page.account.account', compact('account'));
        }
        else{
            return redirect()->route('home.index')->with(['success' => 'Silahkan Login Terlebih Dahulu']);
        }
    }

    public function updateimg(Request $request)
    {

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $user_id = Auth::user()->id;
        $account = user::findOrFail($user_id);
        
            if ($files = $request->file('foto')) {
                $destinationPath = 'fotouser/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $account->foto = $pathImg;
            }
            $account->save();

        return redirect(route('account.index'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'email'  => 'required',
            'no_hp' => 'required',
            'alamat'   => 'required',
        ]);

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $user_id = Auth::user()->id;
        $account = user::findOrFail($user_id);
        
            if ($files = $request->file('foto')) {
                $destinationPath = 'fotouser/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $account->foto = $pathImg;
            }

        $account->email = $request->email;
        $account->telepon = $request->no_hp;
        $account->alamat = $request->alamat;
        $account->save();

        return redirect(route('account.index'));
    }
}