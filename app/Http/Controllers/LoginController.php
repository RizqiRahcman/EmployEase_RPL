<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

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

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }    
        return redirect('/signup');
    }

    // public function registrasi(){
    //     return view('signup');
    // }

    // public function simpanregistrasi(Request $request){
    //     // dd($request->all());

    //     User::create([
    //         'name' => $request->name,
    //         'role' => $request->role, // Gunakan nilai 'role' dari request
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60),
    //     ]);
        

    //     return view('welcome');

    // }
}