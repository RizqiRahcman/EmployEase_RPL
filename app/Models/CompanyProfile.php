<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'alamat',
        'no',
        'desc',
    ];

    public function company()
    {
        return $this->belongsTo(User::class);
    }   
}
