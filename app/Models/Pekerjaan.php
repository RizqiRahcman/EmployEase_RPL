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

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'kota_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'perusahaan_id');
    }

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class);
    }

    public function details()
    {
        return $this->belongsTo(CompanyProfile::class);
    }

}