<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        $userProfile = $user->jobseeker;

        return view('editProfil', compact('user', 'userProfile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $userProfile = $user->jobseeker;

        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'alamat' => 'nullable|string|max:255',
            'no' => 'nullable|numeric|min:11',
            'tgl_lahir' => 'nullable|date',
            'jk' => 'nullable|string', // tambahkan validasi untuk jenis kelamin
            'desc' => 'nullable|string', // tambahkan validasi untuk deskripsi
            'keterampilan' => 'nullable|string',
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();

            $path = 'gambar/';
            $file->move(public_path($path), $filename);
            
            // Set the image path for the user
            $user->image = $path.$filename;
        }

        // Update data user
        $firstName = $request->filled('first_name') ? $request->input('first_name') : $user->first_name;
        $lastName = $request->filled('last_name') ? $request->input('last_name') : $user->last_name;

        $user->update([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'image' => isset($user->image) ? $user->image : $user->image, // Only update if the image was set
        ]);

        // Update data user profile if exists
        if ($userProfile) {
            $userProfile->update([
                'alamat' => $request->input('alamat'),
                'no' => $request->input('no'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'jk' => $request->input('jenisKelamin'),
                'desc' => $request->input('desc'),
                'keterampilan' => $request->input('keterampilan'),
            ]);
        } else {
            // If user profile does not exist, create new
            $userProfile = UserProfile::create([
                'user_id' => $user->id,
                'alamat' => $request->input('alamat'),
                'no' => $request->input('no'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'jk' => $request->input('jenisKelamin'),
                'desc' => $request->input('desc'),
                'keterampilan' => $request->input('keterampilan'),
            ]);
        }

        return redirect()->route('profil.jobseeker')->with('success', 'Profile updated successfully!');
    }

    public function editcompany()
    {
        $user = Auth::user();
        $companyProfile = $user->company->first();

        return view('editProfilCompany', compact('user', 'companyProfile'));
    }

    public function updatecompany(Request $request)
    {
        $user = Auth::user();
        $companyProfile = $user->company->first();

        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'alamat' => 'nullable|string|max:255',
            'no' => 'nullable|numeric|min:11',
            'desc' => 'nullable|string', // tambahkan validasi untuk deskripsi
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();

            $path = 'gambar/';
            $file->move(public_path($path), $filename);
            
            // Set the image path for the user
            $user->image = $path.$filename;
        }

        // Update data user
        $firstName = $request->filled('first_name') ? $request->input('first_name') : $user->first_name;

        $user->update([
            'first_name' => $firstName,
            'image' => isset($user->image) ? $user->image : $user->image, // Only update if the image was set
        ]);

        // Update data user profile if exists
        if ($companyProfile) {
            $companyProfile->update([
                'alamat' => $request->input('alamat'),
                'no' => $request->input('no'),
                'desc' => $request->input('desc'),
            ]);
        } else {
            // If user profile does not exist, create new
            $companyProfile = CompanyProfile::create([
                'user_id' => $user->id,
                'alamat' => $request->input('alamat'),
                'no' => $request->input('no'),
                'desc' => $request->input('desc'),
            ]);
        }

        return redirect()->route('dashboard.company')->with('success', 'Profile updated successfully!');
    }
    public function company(Request $request)
    {
        // Mulai query dari tabel companyprofiles
        $query = CompanyProfile::query();

        // Cek apakah ada inputan pencarian
        if (!empty($request->search)) {
            $cari = $request->search;
            // Join dengan tabel users untuk mencari berdasarkan first_name
            $query->whereHas('company', function($q) use ($cari) {
                $q->where('first_name', 'like', '%' . $cari . '%');
            });
        }

        // Order by desc dan paginate
        $pagperusahaan = $query->orderByDesc('created_at')->paginate(6);
        $pagperusahaan->appends($request->all()); // Append all query parameters to pagination links
        $jumlah = $pagperusahaan->total(); // Mengambil total jumlah data

        // Debugging: Uncomment untuk melihat data yang diambil
        // dd($pagperusahaan);

        // Return view dengan data yang diperlukan
        return view('dafPerusahaan', [
            'pagperusahaan' => $pagperusahaan,
            'request' => $request,
            'jumlah' => $jumlah,
        ]);
    }
}