<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // User::truncate();
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Baru',
            'role' => 'pelamar',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
            'image' => 'gambar/contoh.png',
        ]);
        User::create([
            'first_name' => 'Grazedu',
            'last_name' => '',
            'role' => 'perusahaan',
            'email' => 'grazedu@mail.com',
            'password' => bcrypt('grazedu123'),
            'remember_token' => Str::random(60),
            'image' => 'gambar/grazedu.jpeg',
        ]);
        User::create([
            'first_name' => 'Pertamina',
            'last_name' => '',
            'role' => 'perusahaan',
            'email' => 'pertamina@mail.com',
            'password' => bcrypt('pertamina123'),
            'remember_token' => Str::random(60),
            'image' => 'gambar/logo pertamina.png',
        ]);
        User::create([
            'first_name' => 'LLDIKTI IX',
            'last_name' => '',
            'role' => 'perusahaan',
            'email' => 'dikti9@mail.com',
            'password' => bcrypt('dikti123'),
            'remember_token' => Str::random(60),
            'image' => 'gambar/kemdikbud.png',
        ]);
    }
}