<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Pekerjaan;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    public function index(request $request){
        $forms = Pekerjaan::all();
        return view ('form_lamaran', [
            'forms' => $forms
        ]);
    }
    public function store(Request $request)
    {
        // Validasi input
        $kota = Kota::where('nama', $request->nama_kota)->first();
        $request->validate([
            'Nama_Lengkap' => 'required|string|max:255',
            'Email' => 'required|string|max:255',
            'Telepon' => 'required|string|max:12',
            'Surat_Lamaran' => 'required|string',
        ]);

        // Ambil ID perusahaan dari user yang sedang login
        // $pekerjaan_id = Auth::user()->id;
        
        // Simpan pekerjaan baru
        Lamaran::create([
            'Nama_Lengkap' => $request->Nama_Lengkap,
            'Email' => $request->Email,
            'Telepon' => $request->Telepon,
            'Surat_Lamaran' => $request->Surat_Lamaran,
            'Pekerjaan_id' => $kota->id
        ]);

        // Simpan pesan sukses dalam sesi
    return redirect()->route('dashboard.company')->with('success', 'Lamaran telah diunggah');
    }
}
