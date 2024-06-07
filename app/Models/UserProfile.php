<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $table = 'userprofiles';
    protected $fillable = [
        'user_id',
        'alamat',
        'no',
        'tgl_lahir',
        'jk',
        'desc',
        'pengalaman_id',
        'penedidikan_id',
        'keteterampilan',
    ];

    public function jobseeker()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pengalaman()
    {
        return $this->belongsTo(Pengalaman::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }
}
