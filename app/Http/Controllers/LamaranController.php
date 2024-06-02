<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    public function create(Pekerjaan $pekerjaan)
    {
        return view('lamaran.create', compact('pekerjaan'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
            'pekerjaan_id' => 'required|exists:pekerjaans,id',
        ]);

        // Simpan data lamaran
        Lamaran::create([
            'pekerjaan_id' => $request->pekerjaan_id,
            'user_id' => Auth::id(),  // Ambil ID user yang sedang login
            'nama' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'surat_lamaran' => $request->message,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('index')->with('success', 'Lamaran telah berhasil dikirim');
    }
}