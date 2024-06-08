<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'role',
        'email',
        'image',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed'
        ];
    }

    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class, 'perusahaan_id');
    }

    public function jobseeker()
    {
        return $this->hasOne(UserProfile::class, 'user_id');
    }

    public function company()
    {
        return $this->hasOne(CompanyProfile::class, 'user_id');
    }

    public function lamarans()
    {
        return $this->hasMany(Lamaran::class);
    }
}