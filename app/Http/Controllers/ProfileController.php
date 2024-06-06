<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        $userProfile = $user->jobseeker->first();

        return view('editProfil', compact('user', 'userProfile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $userProfile = $user->jobseeker->first();

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'alamat' => 'required|string|max:255',
            'no' => 'required|numeric|min:11',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|string',
            'desc' => 'nullable|string',
            'pengalaman_id' => 'nullable|integer',
            'pendidikan_id' => 'nullable|integer',
            'keterampilan' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $image = file_get_contents($request->file('image'));
            $mime = $request->file('image')->getMimeType();
            $user->image = $image;
            $user->image_mime = $mime;
        }

        // Update data user
        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
        ]);

        // Update data user profile
        $userProfile->update([
            'alamat' => $request->input('alamat'),
            'no' => $request->input('no'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'jk' => $request->input('jenisKelamin'),
            'desc' => $request->input('desc'),
            'pengalaman_id' => $request->pengalaman_id,
            'pendidikan_id' => $request->pendidikan_id,
            'keterampilan' => $request->keterampilan,
        ]);

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
    public function updateImage(Request $request)
    {
        // Validasi request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Ubah sesuai kebutuhan Anda
        ]);

        // Ambil pengguna dari sesi atau identitas pengguna yang sedang masuk
        $user = auth()->user();

        // Ambil gambar profil lama dari basis data
        $oldImage = $user->image;

        // Simpan gambar baru ke basis data sebagai blob
        $image = file_get_contents($request->file('image')->getRealPath());

        // Update informasi gambar profil pengguna
        $user->image = $image;
        $user->image_mime = $request->file('image')->getClientMimeType();
        $user->save();

        // Hapus gambar profil lama dari basis data
        // Pastikan Anda telah mengambil keputusan untuk menghapus gambar lama
        // Jika tidak, Anda dapat menghapus bagian ini
        if ($oldImage) {
            // Contoh jika menggunakan Eloquent
            $user->update(['image' => null, 'image_mime' => null]);
            
            // Contoh jika menggunakan query builder
            // DB::table('users')->where('id', $user->id)->update(['image' => null, 'image_mime' => null]);
        }

        return redirect()->back()->with('success', 'Gambar profil berhasil diperbarui.');
    }
}