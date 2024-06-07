<?php

namespace App\Http\Controllers;
use App\Models\Pengalaman;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CvController extends Controller
{
    public function index()
    {
        $pendidikans = Pendidikan::where('user_id', Auth::id())->get();
        $pengalamans = Pengalaman::where('user_id', Auth::id())->get();
        
        foreach ($pendidikans as $pendidikan) {
            $pendidikan->mulai = Carbon::parse($pendidikan->mulai)->locale('id')->translatedFormat('F Y');
            $pendidikan->selesai = $pendidikan->selesai ? Carbon::parse($pendidikan->selesai)->locale('id')->translatedFormat('F Y') : 'Sekarang';
        }

        foreach ($pengalamans as $pengalaman) {
            $pengalaman->mulai = Carbon::parse($pengalaman->mulai)->locale('id')->translatedFormat('F Y');
            $pengalaman->selesai = $pengalaman->selesai ? Carbon::parse($pengalaman->selesai)->locale('id')->translatedFormat('F Y') : 'Sekarang';
        }
        
        return view('profil_jobseeker', [
            'pendidikans' => $pendidikans,
            'pengalamans' => $pengalamans,
        ]);
    }

    public function pengalaman(Request $request)
    {
        $request->validate([
            'pekerjaan' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'mulai' => 'required|date',
            'selesai' => 'nullable|date',
            'desc' => 'nullable|string',
        ]);

        $pengalaman = new Pengalaman();
        $pengalaman->user_id = Auth::id();
        $pengalaman->pekerjaan = $request->input('pekerjaan');
        $pengalaman->divisi = $request->input('divisi');
        $pengalaman->mulai = $request->input('mulai');
        $pengalaman->selesai = $request->input('selesai') ?: null; // Mengatur nilai null untuk menandakan "present"
        $pengalaman->desc = $request->input('desc');
        $pengalaman->save();

        return redirect()->route('profil.jobseeker')->with('success', 'Pengalaman berhasil ditambahkan');
    }

    public function pendidikan(Request $request)
    {
        $request->validate([
            'instansi' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'ipk' => 'string|string|max:255',
            'mulai' => 'required|date',
            'selesai' => 'nullable|date',
            'desc' => 'nullable|string',
        ]);

        $pendidikan = new Pendidikan();
        $pendidikan->user_id = Auth::id();
        $pendidikan->instansi = $request->input('instansi');
        $pendidikan->jurusan = $request->input('jurusan');
        $pendidikan->ipk = $request->input('ipk');
        $pendidikan->mulai = $request->input('mulai');
        $pendidikan->selesai = $request->input('selesai') ?: null; // Mengatur nilai null untuk menandakan "present"
        $pendidikan->desc = $request->input('desc');
        $pendidikan->save();

        return redirect()->route('profil.jobseeker')->with('success', 'Pendidikan berhasil ditambahkan');
    }

    public function deletePendidikan($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();

        return redirect()->route('profil.jobseeker')->with('success', 'Pendidikan berhasil dihapus');
    }

    public function deletePengalaman($id)
    {
        $pengalaman = Pengalaman::findOrFail($id);
        $pengalaman->delete();

        return redirect()->route('profil.jobseeker')->with('success', 'Pengalaman berhasil dihapus');
    }

}
