<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PekerjaanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'posisi' => 'required|string|max:255',
            'desc_pekerjaan' => 'required|string',
            'nama_kota' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tipe' => 'required|string',
            'kategori' => 'required|string',
            'gaji' => 'required|string',
        ]);

        // Cari kota berdasarkan nama
        $kota = Kota::where('nama', $request->nama_kota)->first();

        if (!$kota) {
            return back()->withErrors(['nama_kota' => 'Kota tidak ditemukan']);
        }

        // Ambil ID perusahaan dari user yang sedang login
        $perusahaan_id = Auth::user()->id;

        // Simpan pekerjaan baru
        Pekerjaan::create([
            'posisi' => $request->posisi,
            'desc_pekerjaan' => $request->desc_pekerjaan,
            'kota_id' => $kota->id,
            'alamat' => $request->alamat,
            'tipe' => $request->tipe,
            'kategori' => $request->kategori,
            'gaji' => $request->gaji,
            'slug' => Str::slug($request->posisi . '-' . Str::random(6)),
            'perusahaan_id' => $perusahaan_id
        ]);

        // Simpan pesan sukses dalam sesi
    return redirect()->route('dashboard.company')->with('success', 'Pekerjaan telah diunggah');
    }

    // public function index()
    // {
    //     // Mengambil semua data dari tabel pekerjaan
    //     $pekerjaans = Pekerjaan::all();
    //     // $pekerjaans = Pekerjaan::with(['user', 'kota'])->get();

    //     dd($pekerjaans);

    //     // Mengirim data ke view
    //     return view('pekerjaan.index', compact('pekerjaans'));
    // }

    // public function page()
    // {
    //     $pagpekerjaans = Pekerjaan::orderByDesc('created_at')->paginate(6);
    //     return view('pekerjaan.page', compact('pagpekerjaans'));
    // }

    public function filterPekerjaan(Request $request)
    {
        // Ambil nilai filter dari permintaan AJAX
        $fullTime = $request->input('fullTime');
        $partTime = $request->input('partTime');
        $contract = $request->input('contract');
        $internship = $request->input('internship');

        // Query data pekerjaan berdasarkan filter yang dipilih
        $query = Pekerjaan::query();

        if ($fullTime) {
            $query->orWhere('tipe', 'Full Time');
        }
        if ($partTime) {
            $query->orWhere('tipe', 'Part Time');
        }
        if ($contract) {
            $query->orWhere('tipe', 'Contract');
        }
        if ($internship) {
            $query->orWhere('tipe', 'Internship');
        }

        // Eksekusi query dan ambil data pekerjaan
        $pekerjaans = $query->paginate(10);

        // Kembalikan data pekerjaan dalam bentuk tampilan Blade
        return view('pekerjaan.filter_result', compact('pekerjaans'))->render();
    }
}