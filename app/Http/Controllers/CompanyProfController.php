<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CompanyProfile;
use App\Models\Pekerjaan;

class CompanyProfController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->input('id');

        // Mengambil data user berdasarkan id yang diminta
        $user = User::findOrFail($id, ['first_name', 'email', 'image']);

        // Mengambil data profil perusahaan berdasarkan id user
        $companyProfile = CompanyProfile::where('user_id', $id)->first(['alamat', 'no', 'desc']);

        // Jika profil perusahaan tidak ditemukan, Anda dapat menangani error atau mengembalikan null
        if (!$companyProfile) {
            return abort(404); // misalnya, mengembalikan halaman error 404 jika profil perusahaan tidak ditemukan
        }

        // Mengambil semua data pekerjaan yang terkait dengan perusahaan yang sedang ditampilkan
        $pekerjaan = Pekerjaan::whereHas('user', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

        // Mengembalikan data ke view
        return view('profil_com', compact('user', 'companyProfile', 'pekerjaan'));
    }

}
