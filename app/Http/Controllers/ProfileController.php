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
}