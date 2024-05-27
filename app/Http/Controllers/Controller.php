<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Response;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class UserController extends Controller
{
    public function getImage($id)
    {
        $user = User::findOrFail($id);

        $image = $user->image; // Mengambil data BLOB dari kolom image

        // Tentukan tipe MIME gambar berdasarkan jenis gambar yang tersimpan
        $mimeType = 'image/jpeg'; // Sesuaikan ini jika Anda menyimpan tipe gambar yang berbeda

        return Response::make($image, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="profile.jpg"'
        ]);
    }
}