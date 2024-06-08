<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\CompanyProfile;
use App\Models\UserProfile;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login');
    }

    // public function postlogin(Request $request){
    //     if(Auth::attempt($request->only('email', 'password'))){
    //         // Autentikasi berhasil
    //         dd('Login berhasil!');
    //     } else {
    //         // Autentikasi gagal
    //         dd('Login gagal!');
    //     }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            // Periksa peran pengguna
            $user = Auth::user();
            if ($user->role == 'pelamar') {
                return redirect('logedin');
            } elseif ($user->role == 'perusahaan') {
                return redirect('/DashComp');
            }
        }    
        return redirect('/signup'); 
    }

    public function registrasi(){
        return view('signup');
    }

    public function simpanregistrasi(Request $request){
        // Validasi data
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        // Buat pengguna baru
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'image'=> "gambar/contoh.png"
        ]); 

        if ($user->role === 'perusahaan') {
            CompanyProfile::create([
                'user_id' => $user->id,
                'alamat' => null,
                'no' => null,
                'desc' => null,
            ]);
        }

        if ($user->role === 'pelamar') {
            UserProfile::create([
                'user_id' => $user->id,
                'alamat' => null,
                'no' => null,
                'tgl_lahir' => null,
                'jk' => null,
                'desc' => null,
                'keteterampilan'=> null,
            ]);
        }
        

        return view('login');

    }

}