<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'pekerjaan_id',
        'user_id',
        'nama',
        'email',
        'phone',
        'surat_lamaran',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lamaran()
    {
        return $this->belongsTo(User::class);
    }
}
