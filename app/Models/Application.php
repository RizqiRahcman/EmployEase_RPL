<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Lengkap',
        'Email',
        'Telepon',
        'Surat_Lamaran'
    ];

    // public function kota()
    // {
    //     return $this->belongsTo(Kota::class);
    // }

    // public function perusahaan()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function apps()
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id');
    }
}