<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminLoginVerifyRequest;
use App\Models\User;
use App\Models\Admin;
use Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
            return view('admin.login');
    }

    public function loginpelanggan()
    {
            return view('pelanggan.login');
    }

    public function proses_login(request $request)
    {
        $username = request('username');
        $password = request('password');

        $admin = Admin::where('username', $username)->first();
        
        if($admin==null)
        {
            
            $request->session()->flash('error', 'Invalid Username');
            
            return redirect(route('login'));
        }
        
        else
        {
            if($password == $admin -> password)
            {
                session()->put('admin',$admin);
                //$request->session()->put('username', $request->Username);
                return redirect(route('dashboard.index'));
            }
            else if($request->Password!=$admin->password)
            {
                return view('Admin.login')->with(['success' => 'Invalid Password']);
            }
        }
    }

    public function proses_loginpelanggan(Request $request)
    {
        request()->validate(
            [
                'email'     => 'required',
                'password'  => 'required',
            ]);

        $kredensil = $request->only('email','password');

        if (Auth::attempt($kredensil)) {
            $user = Auth::user();
            $request->session()->put('user', $user);
            return redirect(route('home.index'));
        } 
        else{
            return redirect(route('loginpelanggan'))->with('success', 'Gagal Login Username dan Password Tidak Sesuai');
        }
    }
    
    public function logout()
    {
        $user = Auth::user();
        Auth::logout();
        return Redirect('login');
    }

    public function logoutpelanggan(Request $request)
    {
        $user = Auth::user();
        $request->session()->forget('user', $user);
        return Redirect(route('home.index'));
    }

    public function register(Request $request)
    {
        return view('Pelanggan.register');
    }

    public function proses_registerpelanggan(Request $request)
    {
        
        User::create([
            'name'          => $request -> name,
            'password'      => Hash::make($request -> password),
            'email'         => $request -> email,
            'alamat'        => $request -> alamat,
            'telepon'       => $request -> telepon,
            'role'          => 'user',
            'foto'          => "User",
        ]);
        
        $user = Auth::user();
        $request->session()->put('user', $user);
        return redirect('/loginpelanggan')->with('success', 'Registrasi Berhasil');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
  
  
    public function handleGoogleCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            if($user != null){
                Auth::login($user);
                $request->session()->put('user', $user);
                return redirect()->route('home.index');
            }else{
                User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'email_verified_at' => now(),
                    'telepon'           => 0,
                    'alamat'            => "-",
                    'status'            => "Aktif"
                ]);
        
                
                $user = Auth::user();
                $request->session()->put('user', $user);
                return redirect(route('home.index'));
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }


    }
}