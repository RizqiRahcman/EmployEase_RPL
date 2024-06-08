<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\Kota;
use App\Models\User;
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

    public function index(Request $request)
    {
        $query = Pekerjaan::query();
    
        if (!empty($request->search)) {
            $query->where('posisi', 'like', '%' . $request->search . '%');
        }
    
        if (!empty($request->search_lokasi)) {
            $namaKota = $request->search_lokasi;
            $kota = Kota::where('nama', $namaKota)->first();
    
            if ($kota) {
                $query->where('kota_id', $kota->id);
            } else {
                return back()->withErrors(['search_lokasi' => 'Kota tidak ditemukan']);
            }
        }
    
        $selectedTipe = $request->input('tipe', []);
        $selectedKategori = $request->input('kategori', []);
    
        if (!empty($selectedTipe)) {
            $query->whereIn('tipe', $selectedTipe);
        }
    
        if (!empty($selectedKategori)) {
            $query->whereIn('kategori', $selectedKategori);
        }
    
        $pagpekerjaans = $query->orderByDesc('created_at')->paginate(6);
        $pagpekerjaans->appends($request->all()); // Append all query parameters to pagination links
        $jumlah = $pagpekerjaans->count();
    
        return view('cari_kerja', [
            'pagpekerjaans' => $pagpekerjaans,
            'request' => $request,
            'jumlah' => $jumlah,
            'selectedTipe' => $selectedTipe,
            'selectedKategori' => $selectedKategori
        ]);
    }
    public function showForm($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        return view('form_lamaran', compact('pekerjaan'));
    }

    public function destroy($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->delete();

        return redirect()->back()->with('success', 'Pekerjaan berhasil dihapus');
    }
    
}