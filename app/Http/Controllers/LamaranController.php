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
        return view('form_lamaran', compact('pekerjaan'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $request->validate([
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:5000',
        ]);

        // Dapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Simpan data lamaran ke dalam tabel `lamarans`
        Lamaran::create([
            'nama' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'email' => Auth::user()->email,
            'phone' => $request->input('phone'),
            'surat_lamaran' => $request->input('message'),
            'pekerjaan_id' => $request->input('pekerjaan_id'),
            'user_id' => $userId,
        ]);

        // Redirect ke halaman form dengan pesan sukses
        return redirect()->route('cari_kerja')->with('success', 'Lamaran berhasil dikirim.');
    }
}