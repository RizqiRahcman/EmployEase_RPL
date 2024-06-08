<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lamaran;

class DashboardController extends Controller
{
    public function dashcom()
    {
        // Mulai query dari tabel companyprofiles
        $user = Auth::user();
        $pekerjaans = $user->pekerjaan;

        $lamarans = Lamaran::with(['pekerjaan' => function($query) use ($user) {
            $query->where('perusahaan_id', $user->id);
        }, 'user'])
        ->whereHas('pekerjaan', function($query) use ($user) {
            $query->where('perusahaan_id', $user->id);
        })
        ->get();

        // Menghitung jumlah lamaran berdasarkan tipe pekerjaan
        $fullTimeCount = $lamarans->filter(function ($lamaran) {
            return $lamaran->pekerjaan->tipe === 'Full Time';
        })->count();

        $partTimeCount = $lamarans->filter(function ($lamaran) {
            return $lamaran->pekerjaan->tipe === 'Part Time';
        })->count();

        $kontrakCount = $lamarans->filter(function ($lamaran) {
            return $lamaran->pekerjaan->tipe === 'Contract';
        })->count();

        $internshipCount = $lamarans->filter(function ($lamaran) {
            return $lamaran->pekerjaan->tipe === 'Internship';
        })->count();

        // Return view dengan data yang diperlukan
        return view('dashboardComp', [
            'user' => $user,
            'pekerjaans'=>$pekerjaans,
            'lamarans' => $lamarans,
            'fullTimeCount'=> $fullTimeCount,
            'partTimeCount' => $partTimeCount,
            'kontrakCount' => $kontrakCount,
            'internshipCount' => $internshipCount,
        ]);
    }

    public function lowongan()
    {
        // Mulai query dari tabel companyprofiles
        $user = Auth::user();
        $pekerjaans = $user->pekerjaan;

        // Return view dengan data yang diperlukan
        return view('dashLowongan', [
            'user' => $user,
            'pekerjaans'=>$pekerjaans
        ]);
    }

    public function pelamar()
    {
        // Mulai query dari tabel companyprofiles
        $user = Auth::user();

        $lamarans = Lamaran::with(['pekerjaan' => function($query) use ($user) {
            $query->where('perusahaan_id', $user->id);
        }, 'user'])
        ->whereHas('pekerjaan', function($query) use ($user) {
            $query->where('perusahaan_id', $user->id);
        })
        ->get();

        // Return view dengan data yang diperlukan
        return view('pelamar', [
            'user' => $user,
            'lamarans' => $lamarans,
        ]);
    }
}
