<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'posisi',
        'desc_pekerjaan',
        'kota_id',
        'alamat',
        'tipe',
        'kategori',
        'gaji',
        'slug',
        'perusahaan_id'
    ];

    // public function kota()
    // {
    //     return $this->belongsTo(Kota::class);
    // }

    // public function perusahaan()
    // {
    //     return $this->belongsTo(User::class);
    // }
}